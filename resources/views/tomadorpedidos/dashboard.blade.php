@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>SICSOFT</h1>
@stop

@section('content')
    <div class="card1">
        <a href="{{ route('tomadorpedidos.clientes') }}" class="no-underline text-body">
            <div class="align-items-center card-header1 d-flex flex-row justify-content-between">
                <div>
                    <h4 class="">Clientes</h4>
                    <span>Cartera de Clientes a Visitar</span>
                </div>
                <div>
                    <div class="align-self-center">
                        <span class="badge badge-primary"><i class="fas fa-angle-right"></i></span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="card1">
        <div class="align-items-center card-header1 d-flex flex-row justify-content-between">
            <div>
                <h4 class="">Ingreso de Pedidos</h4>
                <span>Ingreso de Pedidos Directos</span>
            </div>
            <div>
                <div class="align-self-center">
                    <span class="badge badge-primary"><i class="fas fa-angle-right"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="card1">
        <a href="{{ route('tomadorpedidos.lista.precios') }}" class="no-underline text-body">
            <div class="align-items-center card-header1 d-flex flex-row justify-content-between">
                <div>
                    <h4 class="">Articulos</h4>
                    <span>Consulte la Lista de Precios por Articulos</span>
                </div>
                <div>
                    <div class="align-self-center">
                        <span class="badge badge-primary"><i class="fas fa-angle-right"></i></span>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="card1">
        <div class="align-items-center card-header1 d-flex flex-row justify-content-between">
            <div>
                <h4 class="">Promociones</h4>
                <span>Consulte la Lista de Promociones</span>
            </div>
            <div>
                <div class="align-self-center">
                    <span class="badge badge-primary"><i class="fas fa-angle-right"></i></span>
                </div>
            </div>
        </div>
    </div>
    <div class="card1">
        <div class="align-items-center card-header1 d-flex flex-row justify-content-between">
            <div>
                <h4 class="">Analisis de Gestion</h4>
                <span>Visualice el Avance de sus Ventas</span>
            </div>
            <div>
                <div class="align-self-center">
                    <span class="badge badge-primary"><i class="fas fa-angle-right"></i></span>
                </div>
            </div>
        </div>
    </div>

@stop

@section('footer')
    <table class="styled-table" id="table-footer">
        <thead>
            <tr>
                <th scope="col">Prevendedor: 001 Charlie Jara Huaringa</th>
            </tr>
        </thead>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
        .card1 {
            box-shadow: 0 0 1px rgba(0, 0, 0, .125), 0 1px 3px rgba(0, 0, 0, .2);
            margin-bottom: 1rem;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .card-header1 {
            padding: .75rem 1.25rem;
        }
    </style>
    <style>
        .styled-table {
            width: 100%;
            font-size: clamp(0.7rem, 1.5vw, 0.9rem);
            border-collapse: collapse;
            font-family: sans-serif;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
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
        console.log('Hi!');
    </script>
@stop
