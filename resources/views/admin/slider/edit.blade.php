@extends('adminlte::page')

@section('title', 'Slider')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@stop

@section('content_header')
    <h1>Sliders</h1>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}


    <table class="table table-striped display" id="participantes" width="100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image actual</th>
                <th>Accion</th>
                
                {{-- <th>Fecha de registro</th> --}}
               
            </tr>
        </thead>
        <tbody>
            
            <tr>
                
              <td>{{$slider->id}}</td>
              <td><img src="{{$slider->image}}" alt="" style="max-height: 300px"></td>
              <td style="display: flex;">

                <form  action="{{ route('admin.sliders.update', $slider) }}"   enctype="multipart/form-data" 
                    method="POST" title="Actualizar"> 
                    @csrf
                    @method('put')
                    <input type="file" name="image"> 

                    <br>
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif


                    <br>
                    <br>
                    <button class="btn btn-success">
                        <i class="fas fa-trash"></i>
                        Actualizar
                    </button>
                </form>

              


              </td>
            </tr>
           
       
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