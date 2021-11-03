@extends('adminlte::page')

@section('title', 'Contacto')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@stop

@section('content_header')
    <h1>Contacto</h1>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}

    <table class="table table-striped display" id="contactos" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Empresa</th>
                <th>Dni</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Consulta</th>
                {{-- <th>Fecha de registro</th> --}}

            </tr>
        </thead>
        <tbody>
            @foreach ($contactos as $contacto)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $contacto->name }}</td>
                    <td>{{ $contacto->apellidos }}</td>
                    <td>{{ $contacto->empresa }}</td>
                    <td>{{ $contacto->dniruc }}</td>
                    <td>{{ $contacto->email }}</td>
                    <td>{{ $contacto->telefono }}</td>
                    <td>{{ $contacto->consulta }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>



@stop



@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#contactos').DataTable({
                dom: 'Bfrltip',
                buttons: [{
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [0, 1, 2, 3, 4, 5, 6, 7] //columnas que quieres exportar
                    },
                    text: 'Exportar Excel',
                    className: 'btn btn-success',
                }],
            })
        })
    </script>

@stop
