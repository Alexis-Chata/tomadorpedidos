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
            <h3 class="card-title">Clientes</h3>
            <div class="card-tools">
                <!-- Buttons, labels, and many other things can be placed here! -->
                <!-- Here is a label for example -->
                <span class="badge badge-primary">Todos</span>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-striped table-hover" id="comedi31">
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
                            <td>{{ $comedi31->ccli }}</td>
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

@section('js')
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
