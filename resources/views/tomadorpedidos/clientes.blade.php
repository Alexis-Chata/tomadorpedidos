@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>SicSoft</h1> --}}
    <span></span>
@stop

@section('content')

    <div class="card card-outline card-primary mb-5">
        <div class="card-header">
            <h3 class="card-title"><a class="text-dark" href="{{ route('dashboard') }}"><i class="fas fa-reply pr-2"
                        role="button"></i></a>Clientes</h3>
            <div class="card-tools d-flex" style="gap: 5px;">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="badge badge-primary">Fecha: {{ now()->format('d-m-y') }}</span>
                <span class="badge badge-primary">{{ now()->translatedFormat('l') }}</span>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body p-3">
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
                            <form method="POST" action="{{ route('tomadorpedidos.tomador.post') }}">
                                <td class="cliente">
                                    @csrf
                                    <input type="hidden" name="ccliente" value="{{ $comedi31->id }}">
                                    <button class="p-0 dropdown-item bg-danger-soft-hover" href="#">
                                        {{ $comedi31->ccli }} - {{ $comedi31->comedi07->tnomrep }}<br> *
                                        {{ $comedi31->comedi07->tdir }}
                                    </button>
                                </td>
                            </form>
                            <td>{{ number_format($comedi31->comedi36snow->sum('qimpvta'), 2) }}</td>
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
                <th scope="row">{{ $comedi31s->count() }}</th>
                <td>7</td>
                <td>{{ $countComedi31sWithComedi36Snow }}</td>
                <td>{{ number_format(($countComedi31sWithComedi36Snow / $comedi31s->count()) * 100, 2) }} %</td>
                <td>{{ number_format($totalQimpvta, 2) }}</td>
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
            padding: 8px 10px;
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
                document.querySelectorAll(".cliente").forEach(element => {
                    var texto = e.target.value.toLowerCase().trim().replace(/\s\s+/g, ' ');
                    var arraytexto = texto.split(" ");

                    var contiene = true;
                    arraytexto.forEach(texto => {
                        contiene = contiene && element.textContent.toLowerCase().includes(texto)
                    });

                    contiene ?
                        element.parentNode.classList.remove("d-none") :
                        element.parentNode.classList.add("d-none");
                    // (e.target.value.toLowerCase() == "") ? element.parentNode.classList.add("d-none"): "";
                });
            }
        })
    </script>
@stop
