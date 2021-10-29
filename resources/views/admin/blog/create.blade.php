@extends('adminlte::page')

@section('title', 'Admin - Blog')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="{{ asset('/vendor/ckeditor/ckeditor.js') }}"></script>
@stop

@section('content_header')
    <h1>Crear noticia</h1>
    <br>
@stop

@section('content')

<form  action="{{ route('admin.blog.store') }}" enctype="multipart/form-data"  style="max-width:800px;Width:100%;" 
method="POST" title="Crear">
    @csrf
   @method('post')
   <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="categoria-form">Nombre de producto</label>
        <input type="text" class="form-control" id="categoria-form"  name="title" placeholder="Escriba el nombre del producto">
        
        @if ($errors->has('title'))
        <span class="text-danger">{{ $errors->first('title') }}</span>
        @endif

      </div>
    </div>
   </div>

   <div class="row">
     <div class="col">
      <div class="form-group">
        <label for="producto-img">Imagen destacada</label>
        <input type="file" class="form-control-file" id="producto-img" name="image">
        @if ($errors->has('image'))
        <span class="text-danger">{{ $errors->first('image') }}</span>
        @endif
      </div>
     </div>
   </div>

   <div class="row">
      <div class="col">
       <label for="categoria-form">Contenido</label>
        <textarea  class="ckeditor" name="name" id="editor1" rows="50" cols="100">
          
        </textarea>
        @if ($errors->has('image'))
        <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
      </div>
     
   </div>
   <br>
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