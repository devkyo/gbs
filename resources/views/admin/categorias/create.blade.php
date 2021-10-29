@extends('adminlte::page')

@section('title', 'Admin - Categorias')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@stop

@section('content_header')
    <h1>Crear categoria</h1>
    <br>
@stop

@section('content')

<form  action="{{ route('admin.categories.store') }}" enctype="multipart/form-data"  style="max-width:500px;Width:100%;" 
method="POST" title="Crear">
    @csrf
   {{-- @method('post') --}}
  <div class="form-group">
    <label for="categoria-form">Nombre Categoria</label>
    <input type="text" class="form-control" id="categoria-form"  name="name" placeholder="Escriba el nombre de su categoria">
    <small id="emailHelp" class="form-text text-muted">Evite escribir el nombre de la cateoria sin ñ y simbolos.</small>
  </div>
  <div class="form-group">
    <label for="categoria-img">Seleccione la imagen de la categoria</label>
    <input type="file" class="form-control-file" id="categoria-img" name="image">
  </div>
 
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
    

              



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
          
            columnDefs: [{
                "targets": [12],
                "visible": false
            }],
            
          
            
        } );
      } );


    </script>
@stop