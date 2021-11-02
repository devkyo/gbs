@extends('adminlte::page')

@section('title', 'Dashboard')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@stop

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}
    <a href="{{ route('admin.products.create')}}"><button class="btn btn-success">Agregar nuevo producto</button></a>

    <table class="table table-striped display" id="participantes" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>slug</th>
                <th>Largo</th>
                <th>Ancho</th>
                <th>Alto</th>
                <th>Diametro</th>
                <th>Capacidad</th>
                <th>Categoria</th>
                <th>Opciones</th>
                {{-- <th>Fecha de registro</th> --}}
               
            </tr>
        </thead>
        <tbody>
          @foreach ($products as $product )
            
          <tr>
            <td>{{ $product->id }}</td>
            <td><img style="max-height:120px" src="{{ $product->image }}" alt=""></td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->code }}</td>
            <td>{{ $product->slug }}</td>
            <td>{{ $product->large }}</td>
            <td>{{ $product->ancho }}</td>
            <td>{{ $product->alto }}</td>
            <td>{{ $product->diametro }}</td>
            <td>{{ $product->capacidad }}</td>
            <td>{{ $product->category->name}}</td>
            <td style="display:flex">

                <a class="btn btn-primary mr-1"
                href="{{ route('admin.products.edit', $product) }}" title="Editar"><i class="far fa-edit"></i></a>
            
          
                <form  action="{{ route('admin.products.destroy', $product) }}" 
                    method="POST" title="Eliminar"> 
                    @csrf
                    @method('delete') 
                    <button class="btn btn-danger">
                        <i class="fas fa-trash"></i>
                    </button>
                </form>
            


            </td>
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
        dom: 'frtip',
        
        buttons: [
            {
            
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

<script>
    @if (Session::has('message'))
        toastr.options =
        {
        "closeButton" : true,
        "progressBar" : true
        }
        toastr.success("{{ session('message') }}");
    @endif

    @if (Session::has('error'))
        toastr.options =
        {
        "closeButton" : true,
        "progressBar" : true
        }
        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))
        toastr.options =
        {
        "closeButton" : true,
        "progressBar" : true
        }
        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))
        toastr.options =
        {
        "closeButton" : true,
        "progressBar" : true
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>

@stop