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

        <div class="tab-pane fade show active pt-3" id="nav-articulo" role="tabpanel"
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
            @forelse ( $items as $item )
                <span>{{ $item }}</span>
                <span>{{ $item->producto }}</span>
                <br>
                <br>
                <br>
            @empty

            @endforelse

        </div>

        <div class="tab-pane fade" id="nav-resumen" role="tabpanel" aria-labelledby="nav-resumen-tab">...</div>
    </div>
</div>
