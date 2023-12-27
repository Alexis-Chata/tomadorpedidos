<div>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link" id="nav-cliente-tab" data-toggle="tab" data-target="#nav-cliente" type="button"
                role="tab" aria-controls="nav-cliente" aria-selected="false">Cliente</button>
            <button class="nav-link active" id="nav-articulo-tab" data-toggle="tab" data-target="#nav-articulo"
                type="button" role="tab" aria-controls="nav-articulo" aria-selected="true">Articulo</button>
            <button class="nav-link" id="nav-resumen-tab" data-toggle="tab" data-target="#nav-resumen" type="button"
                role="tab" aria-controls="nav-resumen" aria-selected="false">Resumen</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade" id="nav-cliente" role="tabpanel" aria-labelledby="nav-cliente-tab">...</div>

        <div class="tab-pane fade show active pt-3 source-sans-pro" id="nav-articulo" role="tabpanel"
            aria-labelledby="nav-articulo-tab">

            <br />
            <label>Articulo</label>
            <input type="text" list="productos" autofocus class="col" wire:model="producto">

            <datalist id="productos">
                @forelse ($comedi01s as $comedi01)
                <option value="{{ $comedi01->cequiv }} {{ $comedi01->tcor }}"></option>
                @empty

                @endforelse
            </datalist>
            <br>
            <label>Cantidad</label>
            <input type="number" class="col" wire:model="cantidad">
            <br>
            <br>
            <button class="btn btn-primary" wire:click='agregar'>Agregar</button>
            <br>
            <br>
            @if ($items->count())
            <span class="w-px-40 justify-content-center">#</span>
            <span class="w-px-253">Producto</span>
            <span class="w-px-55 justify-content-center font-weight-bold">Cantidad</span>
            <span class="w-px-65 justify-content-end">Precio</span>
            <span class="w-px-70 justify-content-end font-weight-bold">Importe</span>
            <br/>
            @endif

            @forelse ( $items as $item )
                <span class="w-px-40 justify-content-end">{{ $item->get('numero_orden') }} | </span>
                <span class="w-px-250"> {{ $item->get('producto') }}</span><span>|</span>
                <span class="w-px-55 justify-content-end font-weight-bold">{{ number_format($item->get('cantidad'), 2, '.', ' ') }} |</span>
                <span class="w-px-65 justify-content-end">{{ number_format($item->get('precio'), 2, '.', ' ') }} |</span>
                <span class="w-px-70 justify-content-end font-weight-bold">{{ number_format($item->get('importe'), 2, '.', ' ') }}</span>
            <br>
            @empty

            @endforelse

            @if ($items->count())
            <span class="w-px-40 justify-content-center"></span>
            <span class="w-px-253"></span>
            <span class="w-px-55 justify-content-center"></span>
            <span class="w-px-65 justify-content-end font-weight-bold">Total:</span>
            <span class="w-px-70 justify-content-end">S/. {{ number_format($items->sum('importe'), 2, '.', ' ') }}</span>
            <br/>
            @endif

        </div>

        <div class="tab-pane fade" id="nav-resumen" role="tabpanel" aria-labelledby="nav-resumen-tab">...</div>
    </div>
</div>
