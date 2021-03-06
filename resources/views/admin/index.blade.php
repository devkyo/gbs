@extends('adminlte::page')

@section('title', 'Dashboard')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@stop

@section('content_header')
    <h1>Participantes</h1>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}


    <table class="table table-striped display" id="participantes" width="100%">
        <thead>
            <tr>
                <th>F. registro</th>
                <th>Nombres</th>
                <th>DNI</th>
                <th>Edad</th>
                <th>Departamento</th>
                <th>Provincia</th>
                <th>Distrito</th>
                <th>Dirección</th>
                <th>Correo</th>
                <th>Celular</th>
                <th>Año lavadora</th>
                <th>Modelo</th>
                <th>Foto</th>
                <th>Ver foto</th>
                {{-- <th>Fecha de registro</th> --}}
               
            </tr>
        </thead>
        <tbody>
            @foreach ($participantes as $participante)
                <tr>
                    {{-- <td>{{ $participante->created_at }}</td> --}}
                    <td>{{ $participante->created_at }}</td>
                    <td>{{ $participante->nombres }}</td>
                    <td>{{ $participante->dni }}</td>
                    <td>{{ $participante->edad }}</td>
                    <td>{{ $participante->departamento }}</td>
                    <td>{{ $participante->provincia }}</td>
                    <td>{{ $participante->distrito }}</td>
                    <td>{{ $participante->direccion }}</td>
                    <td>{{ $participante->correo }}</td>
                    <td>{{ $participante->celular }}</td>
                    <td>{{ $participante->anolavadora }}</td>
                    <td>{{ $participante->modelo }}</td>
                    <td>{{ URL::to('/')}}{{$participante->foto}}</td>
                    <td><a target="_blank" href="{{ URL::to('/')}}{{$participante->foto}}">Ver foto</a></td>
                    {{-- <td>{{ $participante->create_at }}</td> --}}
                   
                    
                </tr>
            @endforeach
        </tbody>
    </table>



@stop



@section('js')
    <script> console.log('Hi!'); </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
    $('#participantes').DataTable( {
        dom: 'Bfrltip',
        buttons: [
            {
            extend: 'excel',
            className: 'btn btn-success',
            text: 'Exportar Excel',
            exportOptions: {
                 columns: [0,1,2,3,4,5,6,7,8,9,10,11,12] //columnas que quieres exportar
                },
            },
        ],
        columnDefs: [{
             "targets": [12],
             "visible": false
         }],
        
       
        
    } );
} );
    </script>
@stop