<?php

namespace App\Livewire;

use App\Models\Comedi01;
use App\Models\Comedi22;
use App\Models\Comedi26;
use App\Models\Comedi31;
use App\Models\Comedi36;
use App\Models\Comedi37;
use Exception;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Fluent;
use Livewire\Attributes\On;
use Livewire\Component;

class Tomador extends Component
{
    public $items;
    public $producto, $cantidad;
    public $bonificacion, $cantidadboni;
    public $cliente;
    public Comedi31 $ccliente;
    public $clistpr;
    public $docvta;

    public function mount()
    {
        $this->items = collect();
        $this->clistpr = $this->listaprecios();
    }

    #[On('registrar-pedido')]
    public function guardarPedido()
    {
        Cache::lock('guardar pedido')->block(15, function () {
            try {

                DB::transaction(function () {
                    $ccia = '11';
                    $cdivi = '00';
                    $ccendis = '07';
                    $cidpr = 'cidpr';
                    $fupgr = now()->format('Y-m-d');
                    $tupgr = now()->format('H:i:s');
                    $username = substr(auth()->user()->name, 0, 10);
                    $condpag = ' '; // | ‘ ’: Contado | ‘C’: Crédito |

                    $items = $this->items;
                    $this->validandoImporteTotal($items);
                    $qdesipm = '18.00'; // porcentaje IGV.
                    $qimpvta = number_format($items->sum('qimp'), 2, '.', ''); // importe total venta incluye impuestos.
                    $qdesigv = number_format(($qimpvta * $qdesipm) / 100, 2, '.', ''); // importe descuento IGV.
                    $qimptot = number_format($qimpvta - $qdesigv, 2, '.', ''); // importe total sin impuestos.

                    $cven = auth()->user()->codVendedorAsignadosMain()->cven; // Código Prevendedor
                    $comedi31 = $this->ccliente; // Código de Cliente
                    $clin = '00'; // Código Línea Preventista
                    [$cletd, $ctip] = $this->docventa();
                    $cconpag = ' '; // Código Política Crédito
                    $plazo = '0'; // Plazo de pago
                    $cflagst = ' '; // Estatus Pedido: | ’ ’:Pendiente | ‘R’:Recibido |
                    $csup = '000'; // Código Supervisor
                    $clistpr = $this->clistpr; // Código Lista de Precios
                    $noped = ' '; // | ‘ ‘: Pedido | ‘N’: No Pedido |
                    $cmnp = '00'; // Código Motivo No Pedido
                    $qdescom = '0.00'; // importe descuento comercial.
                    $qdesisc = '0.00'; // importe descuento ISC.

                    $nped = $this->generarNped();

                    $comedi36y37dataExtra = [
                        'ccia' => $ccia,
                        'cdivi' => $cdivi,
                        'ccendis' => $ccendis,
                        'cidpr' => $cidpr,
                        'fupgr' => $fupgr,      // 10/02/2023
                        'tupgr' => $tupgr,      // 15:05:49
                        'cuser' => $username,
                        'fmov' => $fupgr,       // 10/02/2023
                        'nped' => $nped,        // Generar nped (10)
                    ];

                    $comedi36 = [
                        'cven' => $cven, // Código Prevendedor
                        'ccli' => $comedi31->comedi07->ccli, // Código de Cliente
                        'crut' => $comedi31->crut, // Código de Ruta
                        'clin' => $clin, // Código Línea Preventista
                        'cletd' => $cletd, // | ‘ ‘: Nota Ped. | ‘F’:FE | ‘B’:BE |
                        'ctip' => $ctip, // | ‘1’: Factura |  ‘2’: Boleta | ‘3’: Nota Pedido |
                        'condpag' => $condpag, // | ‘ ’: Contado | ‘C’: Crédito |
                        'cconpag' => $cconpag, // Código Política Crédito
                        'plazo' => $plazo, // Plazo de pago
                        'cflagst' => $cflagst, // Estatus Pedido: | ’ ’:Pendiente | ‘R’:Recibido |
                        'csup' => $csup, // Código Supervisor
                        'clistpr' => $clistpr, // Código Lista de Precios
                        'noped' => $noped, // | ‘ ‘: Pedido | ‘N’: No Pedido |
                        'cmnp' => $cmnp, // Código Motivo No Pedido
                        'qdescom' => $qdescom, // importe descuento comercial.
                        'qdesigv' => $qdesigv, // importe descuento IGV.
                        'qdesipm' => $qdesipm, // porcentaje IGV.
                        'qdesisc' => $qdesisc, // importe descuento ISC.
                        'qimptot' => $qimptot, // importe total sin impuestos.
                        'qimpvta' => $qimpvta, // importe total venta incluye impuestos.
                    ];

                    $comedi36 = new Comedi36(array_merge($comedi36, $comedi36y37dataExtra));
                    $comedi36->save();

                    foreach ($items as $item) {
                        $comedi37 = new Comedi37(array_merge($item->except(['producto', 'qfaccon'])->all(), $comedi36y37dataExtra));
                        $comedi37->save();
                    }
                });

                $this->reset();
                $this->items = collect();
                $this->ccliente = new Comedi31();
                $this->clistpr = $this->listaprecios();
                $this->dispatch('pedido-created');
            } catch (Exception $e) {
                // Manejar la excepción
                Log::error($e->getMessage());

                $this->dispatch('pedido-error');

                $items = $this->items;
                $this->validandoImporteTotal($items);
            }
        });
    }

    private function generarNped()
    {
        $ultimoregistro = Comedi22::latest()->first(); //ultimo registro ordenado segun created_at
        $ndoc = $ultimoregistro->ndoc;
        $nped = str_pad($ndoc + 1, 10, '0', STR_PAD_LEFT);
        $ultimoregistro->ndoc = $nped;
        $ultimoregistro->save();
        return $nped;
    }

    private function docventa()
    {
        switch ($this->docvta) {
            case 1:
                $cletd = 'F'; // | ‘F’: FE | ‘B’: BE | ‘ ‘: Nota Ped. |
                $ctip = '1'; // | ‘1’: Factura |  ‘2’: Boleta | ‘3’: Nota Pedido |
                break;

            case 2:
                $cletd = 'B'; // | ‘F’: FE | ‘B’: BE | ‘ ‘: Nota Ped. |
                $ctip = '2'; // | ‘1’: Factura |  ‘2’: Boleta | ‘3’: Nota Pedido |
                break;
            case 3:
                $cletd = ' '; // | ‘F’: FE | ‘B’: BE | ‘ ‘: Nota Ped. |
                $ctip = '3'; // | ‘1’: Factura |  ‘2’: Boleta | ‘3’: Nota Pedido |
                break;

            default:
                $cletd = ' '; // | ‘F’:FE | ‘B’:BE | ‘ ‘: Nota Ped. |
                $ctip = '3'; // | ‘1’: Factura |  ‘2’: Boleta | ‘3’: Nota Pedido |
                break;
        }
        return [$cletd, $ctip];
    }

    public function agregar()
    {
        $this->reset(['bonificacion', 'cantidadboni']);
        $this->validandoCampos();

        $producto = trim($this->producto);
        $cantidad = number_format($this->cantidad, 2, '.', '');
        $items = $this->items;

        $ctransa = '01'; // Código transacción: ‘01’:Venta, ‘02’: Promoción
        $clistpr = $this->clistpr; // Código Lista de Precios
        $prom = ' '; // ‘S’: Es una promoción
        $qdesc = 0.00; // Importe de descuento
        $qpordes = 0.00; // Porcentaje de descuento
        $qdesisc = 0.00; // Importe de ISC(Impuesto Selectivo al consumo)

        $codProducto = substr(trim($producto), 0, 3);
        $comedi01 = Comedi01::where('cequiv', $codProducto)->first();

        $mensaje = 'Articulo No Existe';

        if ($items->contains('cequiv', $codProducto)) {
            $comedi01 = null;
            $mensaje = 'Articulo ya fue ingresado anteriormente';
        }

        if ($comedi01 != null  && $comedi01->flagcre == 1) {
            $comedi01 = null;
            $mensaje = 'Articulo no esta activo';
        }

        if ($comedi01 != null  && $cantidad >= $comedi01->comedi02->qsaldis) {
            $comedi01 = null;
            $mensaje = 'Stock insuficiente';
        }

        $this->validandoArticulo($comedi01, $mensaje);

        $this->validandoUnidadesxPresentacion($cantidad, $comedi01->qfaccon);

        $precio = number_format($comedi01->comedilps->where('clistpr', $clistpr)->first()->qprecio, 2, '.', '');

        $importe = $this->calculoImporte($cantidad, $precio, $comedi01->qfaccon);

        $item = collect();
        $item->put('cequiv', $codProducto); // Código Equivalencia Artículo (cód.corto)
        $item->put('ccodart', $comedi01->ccodart); // Código de Artículo
        $item->put('ctransa', $ctransa); // Código transacción: ‘01’:Venta, ‘02’: Promoción
        $item->put('clistpr', $clistpr); // Código Lista de Precios
        $item->put('qcanped', $cantidad); // Cantidad de pedido
        // $item->put('qcanprom', $cantidad2); // Cantidad Promoción
        $item->put('qpreuni', $precio); // Precio de artículo
        $item->put('qimp', $importe); // Importe
        $item->put('prom', $prom); // ‘S’: Es una promoción
        $item->put('qdesc', $qdesc); // Importe de descuento
        $item->put('qpordes', $qpordes); // Porcentaje de descuento
        $item->put('qdesisc', $qdesisc); // Importe de ISC(Impuesto Selectivo al consumo)
        // $item->put('cprom', $cprom); // Código de Promoción

        $item->put('producto', $comedi01->tcor);
        $item->put('qfaccon', $comedi01->qfaccon);

        $items->push($item);
        $items = $items->sortBy('cequiv');

        // Agregar el número de orden a cada elemento
        $items = $this->numeroOrdenItem($items);

        $this->items = $items;
        $this->reset(['producto', 'cantidad']);

        $this->dispatch('mostrar_ventana_reinicio');
    }

    public function agregarboni()
    {
        $this->reset(['producto', 'cantidad']);
        $this->validandoCamposBoni();

        $bonificacion = trim($this->bonificacion);
        $cantidadboni = number_format($this->cantidadboni, 2, '.', '');
        $items = $this->items;

        $ctransa = '02'; // Código transacción: ‘01’:Venta, ‘02’: Promoción
        $clistpr = $this->clistpr; // Código Lista de Precios
        $prom = 'S'; // ‘S’: Es una promoción

        $codPromocion = substr(trim($bonificacion), 0, 3);
        $comedi26 = Comedi26::where('cprom', $codPromocion)->first();
        //$comedi01 = Comedi01::where('cequiv', $codProducto)->first();

        $mensaje = 'Bonificacion No Existe';

        if ($items->contains('cprom', $codPromocion)) {
            $comedi26 = null;
            $mensaje = 'Bonificacion ya fue ingresado anteriormente';
        }

        if ($comedi26 != null  && Carbon::parse($comedi26->ffinpro)->addDay()->lt(now())) {
            $comedi26 = null;
            $mensaje = 'Bonificacion no esta activo';
        }

        // if ($comedi26 != null  && $cantidadboni >= $comedi26->comedi02->qsaldis) {
        //     $comedi26 = null;
        //     $mensaje = 'Stock insuficiente';
        // }

        $this->validandoBonificacion($comedi26, $mensaje);

        $this->validandoUnidadesxPresentacionBoni($cantidadboni, 1);

        $precio = number_format($comedi26->qprecio, 2, '.', '');

        $importe = $this->calculoImporte($cantidadboni, $precio, 1) * (1 - ($comedi26->qpordes) / 100);

        $item = collect();
        $item->put('cequiv', substr($comedi26->ccodart1, -3)); // Código Equivalencia Artículo (cód.corto)
        $item->put('ccodart', $comedi26->ccodart1); // Código de Artículo
        $item->put('ctransa', $ctransa); // Código transacción: ‘01’:Venta, ‘02’: Promoción
        $item->put('clistpr', $clistpr); // Código Lista de Precios
        $item->put('qcanped', $cantidadboni); // Cantidad de pedido
        // $item->put('qcanprom', $cantidad2); // Cantidad Promoción
        $item->put('qpreuni', $precio); // Precio de artículo
        $item->put('qimp', $importe); // Importe
        $item->put('prom', $prom); // ‘S’: Es una promoción
        $item->put('qdesc', '0.00'); // Importe de descuento
        $item->put('qpordes', '0.00'); // Porcentaje de descuento
        $item->put('qdesisc', '0.00'); // Importe de ISC(Impuesto Selectivo al consumo)
        $item->put('cprom', $codPromocion); // Código de Promoción

        $item->put('producto', $comedi26->tprom);
        $item->put('qfaccon', 1);

        $items->push($item);
        $items = $items->sortBy('cequiv');

        // Agregar el número de orden a cada elemento
        $items = $this->numeroOrdenItem($items);

        $this->items = $items;
        $this->reset(['bonificacion', 'cantidadboni']);

        $this->dispatch('mostrar_ventana_reinicio');
    }

    public function agregarcliente()
    {

        $cliente = trim($this->cliente);
        $ccli = trim(substr($cliente, 0, 8));
        $ccli = explode(' ', $ccli)[0];
        $ccli = str_pad($ccli, 6, '0', STR_PAD_LEFT);
        $ccli = strlen($ccli) == 6 ? '07' . $ccli : str_pad($ccli, 8, '0', STR_PAD_LEFT); // 8digitos
        $cven = auth()->user()->codVendedorAsignadosMain()->cven;
        $comedi31 = Comedi31::with('comedi07')->where('ccli', $ccli)->first();
        $mensaje = 'Campo Requerido';
        $this->docvta = 2;
        if (!is_null($comedi31->comedi07->cruc)) {
            $this->docvta = 1;
        }

        if (is_null($comedi31)) {
            $mensaje = "Cliente no existe";
        }
        if (!is_null($comedi31) && $comedi31->cven != $cven) {
            $comedi31 = null;
            $mensaje = "Cliente no pertenece";
        }

        $this->reset(['ccliente']);
        $this->resetValidation(['cliente']);

        Validator::make(
            [
                'cliente' => $comedi31,
            ],
            [
                'cliente' => 'required',
            ],
            [
                'required' => $mensaje,
            ]
        )->validated();

        $this->ccliente = $comedi31;
    }

    public function eliminarItem($cequiv)
    {
        $items = $this->items;
        $items = $items->reject(function ($item) use ($cequiv) {
            return $item->get('cequiv') === $cequiv;
        });
        $items = $this->numeroOrdenItem($items);
        $this->items = $items;
    }

    private function listaprecios()
    {
        $cven = auth()->user()->codVendedorAsignadosMain()->cven;
        $clientes = Comedi31::with('comedi07:ccli,clistpr')->where('cven', $cven)->get();

        // Definir los tipos de clientes (puedes obtener estos datos de tu base de datos)
        $tiposClientes = [
            ['clistpr' => '001', 'nombre' => 'Minoristas'],
            ['clistpr' => '002', 'nombre' => 'Mayoristas'],
            // Agrega más tipos según sea necesario
        ];

        // Inicializar una colección para almacenar los resultados
        $resultados = new Collection();

        // Calcular el recuento de clientes para cada tipo
        foreach ($tiposClientes as $tipoCliente) {
            $recuentoClientes = $clientes->where('comedi07.clistpr', $tipoCliente['clistpr'])->count();
            $resultados->push([
                'tipo' => $tipoCliente['clistpr'],
                'recuento' => $recuentoClientes,
            ]);
        }

        // Ordenar la colección por recuento descendente
        $resultados = $resultados->sortByDesc('recuento');

        // Obtener el tipo con más clientes
        $tipoConMasClientes = $resultados->first();

        // Convertiendo array a Class Fluent Objeto
        $fluent = new Fluent($tipoConMasClientes);
        $clistpr = $fluent->tipo;

        // dd($fluent, $fluent->toArray(), $fluent['ccli'], $fluent->ccli);

        if (!is_null($this->ccliente) && !is_null($this->ccliente->comedi07)) {
            $clistpr = $this->ccliente->comedi07->clistpr ?? $clistpr;
        }

        return $clistpr;
    }

    private function numeroOrdenItem($items)
    {
        return $items->values()->map(function ($item, $index) {
            $item['citem'] = str_pad($index + 1, 3, '0', STR_PAD_LEFT);
            return $item;
        });
    }

    private function calculoImporte($cantidad, $precio, $qfaccon)
    {
        $cantidadBultos = explode(localeconv()['decimal_point'], $cantidad)[0];
        $cantidadUnidades = explode(localeconv()['decimal_point'], $cantidad)[1];

        $importeXbultos = $cantidadBultos * $precio;
        $importeXunidades = ($cantidadUnidades * $precio) / $qfaccon;
        return number_format($importeXbultos + $importeXunidades, 2, '.', '');
    }

    private function validandoUnidadesxPresentacion($cantidad, $qfaccon)
    {
        $unidades = explode(localeconv()['decimal_point'], $cantidad)[1];

        if ($unidades >= $qfaccon) {
            Validator::make(
                [
                    'cantidad' => null,
                ],
                [
                    'cantidad' => 'required',
                ],
                [
                    'required' => 'Cantidad no permitida (presentacion de ' . $qfaccon . ' unidades)',
                ]
            )->validated();
        }
    }

    private function validandoUnidadesxPresentacionBoni($cantidad, $qfaccon)
    {
        $unidades = explode(localeconv()['decimal_point'], $cantidad)[1];

        if ($unidades >= $qfaccon) {
            Validator::make(
                [
                    'cantidadboni' => null,
                ],
                [
                    'cantidadboni' => 'required',
                ],
                [
                    'required' => 'Cantidad no permitida (presentacion de ' . $qfaccon . ' unidades)',
                ]
            )->validated();
        }
    }

    private function validandoArticulo($comedi01, $mensaje)
    {
        Validator::make(
            [
                'producto' => $comedi01,
            ],
            [
                'producto' => 'required',
            ],
            [
                'required' => $mensaje,
            ]
        )->validated();
    }

    private function validandoBonificacion($comedi26, $mensaje)
    {
        Validator::make(
            [
                'bonificacion' => $comedi26,
            ],
            [
                'bonificacion' => 'required',
            ],
            [
                'required' => $mensaje,
            ]
        )->validated();
    }

    private function validandoCampos()
    {
        $this->validate(
            [
                'producto' => 'required',
                'cantidad' => 'required|min:0.01',
            ],
            [
                'required' => 'Campo requerido',
            ]
        );
    }

    private function validandoCamposBoni()
    {
        $this->validate(
            [
                'bonificacion' => 'required',
                'cantidadboni' => 'required|min:1',
            ],
            [
                'required' => 'Campo requerido',
            ]
        );
    }

    private function validandoImporteTotal($items)
    {
        if ($items->sum('qimp') <= 0) {
            Validator::make(
                [
                    'importetotal' => null,
                ],
                [
                    'importetotal' => 'required',
                ],
                [
                    'required' => 'Importe Total no valido',
                ]
            )->validated();
        }
    }

    public function render()
    {
        $cven = auth()->user()->codVendedorAsignadosMain()->cven;
        $comedi01s = Comedi01::all();
        $comedi26s = Comedi26::all();
        $comedi31s = Comedi31::with('comedi07')->where('cven', $cven)->get();
        return view('livewire.tomador', compact('comedi01s', 'comedi26s', 'comedi31s'));
    }
}
