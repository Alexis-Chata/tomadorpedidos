@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
{{-- <h1>SicSoft</h1> --}}
<span></span>
@stop

@section('plugins.Datatables', true)
@section('plugins.Datatables-Plugins', true)

@section('content')

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title"><i class="fas fa-reply pr-2" role="button" ></i>Clientes</h3>
        <div class="card-tools d-flex" style="gap: 5px;">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-primary">Fecha: {{ now()->format('d-m-y') }}</span>
            <span class="badge badge-primary">{{ now()->translatedFormat('l') }}</span>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-striped table-hover d-none" id="comedi31s">
            <thead>
                <tr>
                    <th scope="col">ST</th>
                    <th scope="col">Nombre y/o Apellidos</th>
                    <th scope="col">Importe</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comedi31s as $comedi31)
                <tr>
                    <th scope="row">PE</th>
                    <td>{{ $comedi31->ccli }} - {{ $comedi31->tnomrep }}<br> {{ $comedi31->tdir }}</td>
                    <td>800.00</td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>

        <div class="col-12 mb-3">
            <input class="form-control" type="text" name="buscador" id="buscador" placeholder="Buscar Cliente..."
                autofocus>
        </div>

        <table class="styled-table">
            <thead>
                <tr>
                    <th scope="col">ST</th>
                    <th scope="col">Nombre y/o Apellidos</th>
                    <th scope="col">Importe</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($comedi31s as $comedi31)
                <tr>
                    <th scope="row">PE</th>
                    <td class="cliente">{{ $comedi31->ccli }} - {{ $comedi31->tnomrep }}<br> * {{ $comedi31->tdir }}</td>
                    <td>800.00</td>
                </tr>
                @empty
                @endforelse
            </tbody>
        </table>

    </div>
    <!-- /.card-body -->
    {{-- <div class="card-footer">
        The footer of the card
    </div> --}}
    <!-- /.card-footer -->
</div>
<!-- /.card -->

@stop

@section('footer')
<table class="styled-table" id="table-footer">
    <thead>
        <tr>
            <th scope="col">PDV.Prog</th>
            <th scope="col">PDV.Visit</th>
            <th scope="col">PDV.Efect</th>
            <th scope="col">%</th>
            <th scope="col">Importe</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">40</th>
            <td>7</td>
            <td>5</td>
            <td>12.50%</td>
            <td>3350.00</td>
        </tr>
    </tbody>
    {{-- <tfoot>
        <tr>
            <th colspan="100%">Prevendedor: 001 Charlie Jara Huaringa</th>
        </tr>
    </tfoot> --}}
</table>
@stop

@section('css')
<style>
    .styled-table {
        width: 100%;
        font-size: clamp(0.7rem, 1.5vw, 0.9rem);
        border-collapse: collapse;
        font-family: sans-serif;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    }

    .styled-table thead tr,
    .styled-table tfoot tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
        font-size: clamp(0.8rem, 1.5vw, 1rem);
    }

    .styled-table th,
    .styled-table td {
        padding: 12px 15px;
    }

    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }

    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #009879;
    }


    .font-size-12 {
        font-size: clamp(0.8rem, 1.5vw, 1rem);
    }

    #table-footer.styled-table th,
    #table-footer.styled-table td {
        padding: 8px 10px;
    }
</style>
@stop

@section('js')
<script>
    document.addEventListener("keyup", e => {
            if (e.target.matches("#buscador")) {
                document.querySelectorAll(".cliente").forEach(element => {
                    element.textContent.toLowerCase().includes(e.target.value.toLowerCase()) ?
                        element.parentNode.classList.remove("d-none") :
                        element.parentNode.classList.add("d-none");
                    // (e.target.value.toLowerCase() == "") ? element.parentNode.classList.add("d-none"): "";
                });
            }
        })
</script>
<script>
    $('#comedi31').DataTable({
            "columnDefs": [{
                "type": "num",
                "targets": 0
            }],
            order: [
                [0, 'desc']
            ],
            responsive: true,
            autoWidth: false,
            "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json"
            },
            "pagingType": "numbers",
        });
</script>
@stop
