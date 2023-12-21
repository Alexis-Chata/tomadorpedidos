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
                    role="button"></i></a>Tomador Pedidos</h3>
        <div class="card-tools d-flex" style="gap: 5px;">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-primary">Fecha: {{ now()->format('d-m-y') }}</span>
            <span class="badge badge-primary">{{ now()->translatedFormat('l') }}</span>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body p-2 pt-3">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
              <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</button>
              <button class="nav-link" id="nav-contact-tab" data-toggle="tab" data-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">...</div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
          </div>


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
@stop
