@extends('adminlte::page')

@section('title', 'Admin - Productos')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@stop

@section('content_header')
    <h1>Crear producto</h1>
    <br>
@stop

@section('content')

<form  action="{{ route('admin.products.store') }}" enctype="multipart/form-data"  style="max-width:600px;Width:100%;" 
method="POST" title="Crear">
    @csrf
   @method('post')
   <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="categoria-form">Nombre de producto</label>
        <input type="text" class="form-control" id="categoria-form"  name="name" placeholder="Escriba el nombre del producto">
        {{-- <small id="emailHelp" class="form-text text-muted">Evite escribir el nombre de la cateoria sin ñ y simbolos.</small> --}}
      </div>
    </div>
   </div>
   <div class="row">
      <div class="col">
        <div class="form-group">
          <label for="producto-img">Seleccione la imagen del producto</label>
          <input type="file" class="form-control-file" id="producto-img" name="image">
        </div>
       
      </div>
      <div class="col">
        <div class="form-group">
          <label for="exampleFormControlSelect1">Seleccione su categoria</label>
          <select class="form-control" id="exampleFormControlSelect1" name="category">
            @foreach ($categories as $category )
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
           
          </select>
        </div>
      </div>
   </div>

   <div class="row">
    <div class="col">
      <div class="form-group">
        <label for="categoria-form">Codigo interno</label>
        <input type="text" class="form-control" id="categoria-form"  name="code" placeholder="Escriba el codigo del producto">

      </div>
    </div>
    <div class="col">
      <div class="form-group">
        <label for="categoria-form">Largo</label>
        <input type="text" class="form-control" id="categoria-form"  name="large" placeholder="Escriba el nombre de su categoria">
      
      </div>
    </div>
 </div>

 <div class="row">
  <div class="col">
    <div class="form-group">
      <label for="categoria-form">Ancho</label>
      <input type="text" class="form-control" id="categoria-form"  name="ancho" placeholder="Escriba el nombre de su categoria">
      
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="categoria-form">Alto</label>
      <input type="text" class="form-control" id="categoria-form"  name="alto" placeholder="Escriba el nombre de su categoria">
      
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="categoria-form">Diametro</label>
      <input type="text" class="form-control" id="categoria-form"  name="diametro" placeholder="Escriba el nombre de su categoria">
      
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="categoria-form">Capacidad</label>
      <input type="text" class="form-control" id="categoria-form"  name="capacidad" placeholder="Escriba el nombre de su categoria">
      
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <h4>Colores disponibles</h4>
    
    <div class="form-group">
      <label for="exampleFormControlSelect2">Seleccione 1 o más colores disponibles para el producto (ctrl + click)</label>
      <select multiple class="form-control" id="exampleFormControlSelect2" name="colors[]">
      @foreach ($colors as $color )
      <option value="{{$color->id}}">{{$color->name}}</option>

      @endforeach
    </select>
  </div>

  </div>
</div>

<br><br>
  
  
 
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