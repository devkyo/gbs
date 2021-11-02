@extends('adminlte::page')

@section('title', 'Slider')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@stop

@section('content_header')
    <h1>Categorias</h1>
@stop


@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}

    <a href="{{ route('admin.categories.create')}}"><button class="btn btn-success">Agregar nueva categoria</button></a>

    <table class="table table-striped display" id="participantes" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Imagen</th>
                <th>opciones</th>
                
                {{-- <th>Fecha de registro</th> --}}
               
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
              <td>{{$category->name}}</td>
              <td>{{$category->slug}}</td>
              <td><img src="{{$category->image}}" alt="" style="max-height: 300px"></td>
              <td style="display: flex;">

                <a class="btn btn-primary mr-1"
                    href="{{ route('admin.categories.edit', $category) }}" title="Editar"><i class="far fa-edit"></i></a>
                
              
                    <form  action="{{ route('admin.categories.destroy', $category) }}" 
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
                // dom: 'Bfrltip',
            
              
                
                
                    
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