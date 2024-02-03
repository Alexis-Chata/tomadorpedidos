@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>SicSoft</h1> --}}
    <span></span>
@stop

@section('content')

    <div class="card card-outline card-primary mb-5">
        <div class="card-header">
            <h3 class="card-title"><a class="text-dark" href="{{ route('dashboard') }}"><i class="fas fa-reply pr-2" role="button"></i></a>Tomador Pedidos</h3>
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

            <livewire:tomador :ccliente="$ccliente"/>

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
        .source-sans-pro {
            font-family: 'Source Sans Pro';
            font-size: 13px;
        }

        .w-px-40 {
            width: 40px;
            display: inline-grid;
        }

        .w-px-55 {
            width: 55px;
            display: inline-grid;
        }

        .w-px-65 {
            width: 65px;
            display: inline-grid;
        }

        .w-px-70 {
            width: 76px;
            display: inline-grid;
        }

        .w-px-250 {
            width: 250px;
            display: inline-grid;
        }

        .w-px-253 {
            width: 253.22px;
            display: inline-grid;
        }

        .styled-table {
            width: 100%;
            font-size: clamp(0.6rem, 1.5vw, 0.9rem);
            border-collapse: collapse;
            font-family: sans-serif;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr,
        .styled-table tfoot tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-size: clamp(0.6rem, 1.5vw, 0.9rem);
        }

        .styled-table th,
        .styled-table td {
            padding: 5px 5px;
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

        .select2-container--default .select2-selection--single {
            padding: .1rem .75rem;
        }

        .custom-focus-shadow:focus {
            box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
        }
    </style>
@stop

@section('plugins.Sweetalert2', true)

@section('js')
    <script>
        window.Livewire.on('mostrar_ventana_confirmacion', () => {

            setTimeout(() => {
                btnguardar = document.getElementById('btnGuardar');
                btnguardar.addEventListener('click', () => {
                    Swal.fire({
                        title: "¿Está seguro?",
                        text: "¡No podrás revertir esto!",
                        icon: "warning",
                        showCancelButton: true,
                        cancelButtonText: "Cancelar",
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Confirmar, Guardar Pedido"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            {{-- @this.dispatch('registrar-pedido'); --}}
                            Livewire.dispatch('registrar-pedido');
                        }
                    });
                });
            }, 500);

        });
    </script>
@stop
