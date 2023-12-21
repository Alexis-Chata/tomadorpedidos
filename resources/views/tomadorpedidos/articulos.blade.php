@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>SicSoft</h1> --}}
    <span></span>
@stop

@section('plugins.Datatables', true)
@section('plugins.Datatables-Plugins', true)

@section('content')

    <div class="card card-outline card-primary mb-5">
        <div class="card-header">
            <h3 class="card-title"><a class="text-dark" href="{{ route('dashboard') }}"><i class="fas fa-reply pr-2" role="button"></i></a>Lista Precios</h3>
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

            <div class="col-12 mb-3">
                <input class="form-control" type="text" name="buscador" id="buscador" placeholder="Buscar Producto..." autofocus>
            </div>

            <table class="styled-table">
                <thead>
                    <tr>
                        <th scope="col">Cod.</th>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio Cj</th>
                        <th scope="col">Cant/Cj</th>
                        <th scope="col">Precio Unidad</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comedi01s as $comedi01)
                        <tr>
                            <th scope="row">{{ $comedi01->cequiv }}</th>
                            <td>{{ $comedi01->tcor }}</td>
                            <td>{{ number_format($comedi01->comedilps->where('clistpr', '001')->first()->qprecio, 2) }}</td>
                            <td>{{ $comedi01->qfaccon }}</td>
                            <td>{{ number_format($comedi01->comedilps->where('clistpr', '001')->first()->qprecio / $comedi01->qfaccon, 2) }}</td>
                            <input class="articulo" type="hidden" value="{{ $comedi01->cequiv.' '.$comedi01->tcor }}">
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
            padding: 6px 7.5px;
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

        .main-footer {
            padding: .75rem;
        }

        .content-header {
            padding: 8px .5rem;
        }
    </style>
@stop

@section('js')
    <script>
        document.addEventListener("keyup", e => {
            if (e.target.matches("#buscador")) {
                document.querySelectorAll(".articulo").forEach(element => {
                    var texto = e.target.value.toLowerCase().trim().replace(/\s\s+/g, ' ');
                    var arraytexto = texto.split(" ");

                    var contiene = true;
                    arraytexto.forEach(texto => {
                        contiene = contiene && element.value.toLowerCase().includes(texto)
                    });

                    contiene ?
                        element.parentNode.classList.remove("d-none") :
                        element.parentNode.classList.add("d-none");
                    // (e.target.value.toLowerCase() == "") ? element.parentNode.classList.add("d-none"): "";
                });
            }
        })
    </script>
    <script>
        $('#comedi01').DataTable({
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
