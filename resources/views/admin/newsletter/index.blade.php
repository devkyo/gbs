@extends('adminlte::page')

@section('title', 'Newsletter')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@stop

@section('content_header')
    <h1>Newsletter</h1>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}

    <table class="table table-striped display" id="newsletter" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                {{-- <th>Terminos</th> --}}
                {{-- <th>Fecha de registro</th> --}}

            </tr>
        </thead>
        <tbody>
            @foreach ($newsletters as $newsletter)
                <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ $newsletter->email }}</td>
                    {{-- <td>{{ $newsletter->terminos }}</td> --}}
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
            $('#newsletter').DataTable({
                dom: 'Bfrltip',
                buttons: [{
                    extend: 'excelHtml5',
                    exportOptions: {
                        columns: [0, 1] //columnas que quieres exportar
                    },
                    text: 'Exportar Excel',
                    className: 'btn btn-success',
                }],
            })
        })
    </script>

@stop
