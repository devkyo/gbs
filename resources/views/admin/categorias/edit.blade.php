@extends('adminlte::page')

@section('title', 'Admin - Categorias')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@stop

@section('content_header')
    <h1>Editar categoria</h1>
    <br>
@stop

@section('content')

<form  action="{{ route('admin.categories.update', $category) }}" enctype="multipart/form-data"  style="max-width:500px;Width:100%;" 
method="POST" title="Actualizar">
    @csrf
   @method('put')
  <div class="form-group">
    <label for="categoria-form">Nombre Categoria</label>
    <input type="text" class="form-control" id="categoria-form"  name="name" placeholder="Escriba el nombre de su categoria" value="{{$category->name}}">
    <small id="emailHelp" class="form-text text-muted">Evite escribir el nombre de la cateoria sin ñ y simbolos.</small>

    @if ($errors->has('name'))
    <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif

  </div>

  <div class="form-group">
    <label for="categoria-form">Slug</label>
    <input type="text" class="form-control" id="categoria-form" value="{{$category->slug}}" disabled>
    <small id="emailHelp" class="form-text text-muted">El slug se genera automaticamente en base a su título.</small>
  </div>

  <div class="form-group">
    <label for="category-img">Imagen actual</label>
    <br>
    <img src="{{$category->image}}" alt="">
  </div>
  <div class="form-group">
    <label for="categoria-img">Seleccione nueva la imagen de la categoria</label>
    <input type="file" class="form-control-file" id="categoria-img" name="image">
  </div>
  
  <br><br>
  <button type="submit" class="btn btn-primary">Actualizar</button>
  <a href="{{route('admin.categories.index')}}" class="btn btn-success">Volver</a>
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