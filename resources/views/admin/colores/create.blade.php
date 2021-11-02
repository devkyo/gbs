@extends('adminlte::page')

@section('title', 'Colores')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



<link rel="stylesheet" href="{{  asset('css/monolith.min.css') }}" />



@stop

@section('content_header')
    <h1>Crear color</h1>
@stop


@section('content')
    <p>1- Escriba el nombre con el cual desea guardar el color</p>
    <p>2- Seleccione un color en el cuadro y click <strong>save (guardar)</strong></p>

  
  <br>
    <form  action="{{ route('admin.colors.store') }}" enctype="multipart/form-data"  style="max-width:500px;Width:100%;" 
    method="POST" title="Crear">
        @csrf
       {{-- @method('post') --}}
      <div class="form-group">
        <label for="categoria-form">Nombre</label>
        <input type="text" class="form-control" id="categoria-form"  name="name" placeholder="Escriba el nombre con el cual desea guardar el color">
        {{-- <small id="emailHelp" class="form-text text-muted">Evite escribir el nombre de la cateoria sin ñ y simbolos.</small> --}}
      </div>
      <div class="form-group">
        <label for="categoria-img">Seleccione un color</label>
        <div class="colorpicker"></div>
        <input type="hidden" class="form-control-file" id="color" name="hex">
      </div>
      
      <br><br>
      <button type="submit" class="btn btn-primary">Agregar</button>
    </form>


  

@stop



@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

{{-- <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script> --}}

    <script src="{{ asset('js/pickr.min.js')}}"></script>
    <script src="{{ asset('js/pickr.es5.min.js')}}"></script>





    <script>

    const pickr = Pickr.create({
        el: '.colorpicker',
        theme: 'monolith', // or 'monolith', or 'nano'
      
        components: {

            // Main components
            preview: true,

            hue: true,

            // Input / output Options
            interaction: {
                // hex: true,
              
                input: true,
                clear: true,
                save: true
            }
        }
    });

    pickr.on('save', (color, instance) => {

      console.log(color.toHEXA().toString())
      $('#color').val(color.toHEXA().toString())
    })
    .on('change', (color, instance) => {
      $('#color').val(color.toHEXA().toString())
    })
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