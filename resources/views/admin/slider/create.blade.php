@extends('adminlte::page')

@section('title', 'Slider')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@stop

@section('content_header')
    <h1>Crear slider</h1>
    <br>
@stop

@section('content')
    {{-- <p>Welcome to this beautiful admin panel.</p> --}}


    
            
        
                <form  action="{{ route('admin.sliders.store') }}"   enctype="multipart/form-data" 
                    method="POST" title="Actualizar"> 
                    @csrf
                    @method('post')
                    <input type="file" name="image"> 

                    <br>
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif


                    <br>
                    <br>
                    <button class="btn btn-success">
                        {{-- <i class="fas fa-trash"></i> --}}
                        Crear
                    </button>
                </form>

              

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
       
        columnDefs: [{
             "targets": [12],
             "visible": false
         }],
        
       
        
    } );
} );
    </script>
@stop