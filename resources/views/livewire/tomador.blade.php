<div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link" id="nav-cliente-tab" data-toggle="tab" data-target="#nav-cliente" type="button" role="tab" aria-controls="nav-cliente" aria-selected="false">Cliente</button>
            <button class="nav-link active" id="nav-articulo-tab" data-toggle="tab" data-target="#nav-articulo" type="button" role="tab" aria-controls="nav-articulo"
                aria-selected="true">Articulo</button>
            <button class="nav-link" id="nav-extras-tab" data-toggle="tab" data-target="#nav-extras" type="button" role="tab" aria-controls="nav-extras" aria-selected="false">Extras</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade pt-3 source-sans-pro" id="nav-cliente" role="tabpanel" aria-labelledby="nav-cliente-tab">
            <br />
            <form wire:submit.prevent="agregarcliente">
                <div class="form-group m-0">
                    <label>Cliente</label>
                    <div class="text-danger">
                        @error('cliente')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <input type="text" list="clientes" autofocus class="form-control col" wire:model="cliente" required>
                    </div>

                    <datalist id="clientes">
                        @forelse ($comedi31s as $comedi31)
                            <option value="{{ $comedi31->comedi07->ccli }} {{ $comedi31->comedi07->tcli }}"></option>
                        @empty
                        @endforelse
                    </datalist>
                </div>
                <br>
                <div class="d-flex justify-content-start">
                    <button class="btn btn-primary">Agregar</button>
                </div>
            </form>
            <br>
            <br>
            @if (!is_null($ccliente) && !is_null($ccliente->comedi07))
                <p class="m-0"><span>Cliente:</span> {{ $ccliente->comedi07->ccli }} - {{ $ccliente->comedi07->tcli }}</p>
                <p class="m-0"><span>Direcc.:</span> {{ $ccliente->comedi07->tdir }}</p>
                <p class="m-0"><span>Ruta:</span> {{ $ccliente->crut }}</p>
                <p class="m-0"><span>List.Precios:</span> {{ $ccliente->comedi07->clistpr }}</p>
                <p class="m-0"><span>Doc.Vta:</span> </p>
                <br>
            @endif

        </div>

        <div class="tab-pane fade show active pt-3 source-sans-pro" id="nav-articulo" role="tabpanel" aria-labelledby="nav-articulo-tab">

            <br />
            <form wire:submit.prevent="agregar">
                <div class="form-group m-0">
                    <label>Articulo</label>
                    <div class="text-danger">
                        @error('producto')
                            {{ $message }}
                        @enderror
                    </div>
                    <div x-data x-init="setTimeout(() => $refs.producto.focus(), 250)">
                        <input type="text" list="productos" autofocus class="form-control col" wire:model="producto" x-ref="producto" required>
                    </div>

                    <datalist id="productos">
                        @forelse ($comedi01s as $comedi01)
                            <option value="{{ $comedi01->cequiv }} {{ $comedi01->tcor }}"></option>
                        @empty
                        @endforelse
                    </datalist>
                </div>
                <br>
                <label>Cantidad</label>
                <input type="number" class="form-control col" wire:model="cantidad" required step=0.01 min="0.01">
                <div class="text-danger">
                    @error('cantidad')
                        {{ $message }}
                    @enderror
                </div>
                <br>
                <div class="d-flex justify-content-start">
                    <button class="btn btn-primary">Agregar</button>
                </div>
            </form>
            <br>
            <br>

        </div>

        <div class="tab-pane fade pt-3 source-sans-pro" id="nav-extras" role="tabpanel" aria-labelledby="nav-extras-tab">
            <br />
            <form wire:submit.prevent="agregarboni">
                <div class="form-group m-0">
                    <label>Bonificacion</label>
                    <div class="text-danger">
                        @error('bonificacion')
                            {{ $message }}
                        @enderror
                    </div>
                    <div>
                        <input type="text" list="bonificacions" class="form-control col" wire:model="bonificacion" required>
                    </div>

                    <datalist id="bonificacions">
                        @forelse ($comedi26s as $comedi26)
                            <option value="{{ $comedi26->cprom }} {{ $comedi26->tprom }}"></option>
                        @empty
                        @endforelse
                    </datalist>
                </div>
                <br>
                <label>Cantidad</label>
                <input type="number" class="form-control col" wire:model="cantidadboni" required step="1" min="1">
                <div class="text-danger">
                    @error('cantidadboni')
                        {{ $message }}
                    @enderror
                </div>
                <br>
                <div class="d-flex justify-content-start">
                    <button class="btn btn-primary">Agregar</button>
                </div>
            </form>
            <br>
            <br>
        </div>

        <div class="source-sans-pro">
            @if ($items->count())
                <span class="w-px-40 justify-content-center">#</span>
                <span class="w-px-253">Producto</span>
                <span class="w-px-55 justify-content-center font-weight-bold">Cantidad</span>
                <span class="w-px-65 justify-content-end">Precio</span>
                <span class="w-px-70 justify-content-end font-weight-bold">Importe</span>
                <br />

                @forelse ($items as $item)
                    <span class="w-px-40 justify-content-end">{{ $item->get('citem') }} | </span>
                    <span class="w-px-250"> {{ $item->get('cequiv') . ' ' . $item->get('producto') . ' - ' . $item->get('qfaccon') }}</span><span>|</span>
                    <span class="w-px-55 justify-content-end font-weight-bold">{{ number_format($item->get('qcanped'), 2, '.', ' ') }} |</span>
                    <span class="w-px-65 justify-content-end">{{ number_format($item->get('qpreuni'), 2, '.', ' ') }} |</span>
                    <span class="w-px-70 justify-content-end font-weight-bold">{{ number_format($item->get('qimp'), 2, '.', ' ') }}</span>
                    <i role="button" class="fas fa-times text-danger ml-3 p-1" wire:click="eliminarItem('{{ $item->get('cequiv') }}')"></i>
                    <br>
                @empty
                @endforelse

                <span class="w-px-40 justify-content-center"></span>
                <span class="w-px-253"></span>
                <span class="w-px-55 justify-content-center"></span>
                <span class="w-px-65 justify-content-end font-weight-bold">Total:</span>
                <span class="w-px-70 justify-content-end">S/. {{ number_format($items->sum('qimp'), 2, '.', ',') }}</span>
                <br />
                <br />
                <div class="d-flex justify-content-end">
                    <div class="text-danger align-self-center m-2">
                        @error('importetotal')
                            {{ $message }}
                        @enderror
                    </div>
                    <button type="button" class="btn btn-info custom-focus-shadow" id="btnGuardar">Guardar</button>
                </div>
            @endif
        </div>
    </div>
</div>

@script
    <script>
        $wire.on('pedido-created', () => {
            Swal.fire({
                title: "¡Buen trabajo!",
                text: "Pedido Guardado exitosamente.",
                icon: "success"
            });
        });

        $wire.on('pedido-error', () => {
            Swal.fire({
                title: "¡Oops... Algo paso!",
                text: "No se pudo grabar el pedido, intentelo nuevamente.",
                icon: "error"
            });
        });
    </script>
@endscript
