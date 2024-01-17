<div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link" id="nav-cliente-tab" data-toggle="tab" data-target="#nav-cliente" type="button" role="tab" aria-controls="nav-cliente" aria-selected="false">Cliente</button>
            <button class="nav-link active" id="nav-articulo-tab" data-toggle="tab" data-target="#nav-articulo" type="button" role="tab" aria-controls="nav-articulo"
                aria-selected="true">Articulo</button>
            <button class="nav-link" id="nav-resumen-tab" data-toggle="tab" data-target="#nav-resumen" type="button" role="tab" aria-controls="nav-resumen" aria-selected="false">Resumen</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade" id="nav-cliente" role="tabpanel" aria-labelledby="nav-cliente-tab">...</div>

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
                        <button type="button" class="btn btn-info" id="btnGuardar">Guardar</button>
                    </div>
                @endif

        </div>

        <div class="tab-pane fade" id="nav-resumen" role="tabpanel" aria-labelledby="nav-resumen-tab">...</div>
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
                text: "No se pudo grabar el pedido intente nuevamente.",
                icon: "error"
            });
        });
    </script>
@endscript
