@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- @if (Auth::check()) --}}
            @if (session('message'))
                <div class="alert alert-success">
                    <h2>{{ session('message') }}</h2>

                </div>
            @endif

            <div class="row">
                <div class="col-md-auto ml-3">
                    <h2>Captura de Evento</h2>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <form action="{{ route('eventos.store') }}" method="post" enctype="multipart/form-data" class="col-12">
                        {!! csrf_field() !!}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    Debe de llenar los campos marcados con un asterisco (*).
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <br>
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="titulo">Titulo* </label>
                                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo') }}">
                            </div>
                            
                        </div>
                        <br>
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="descripcion">Descripcion* </label>
                                <textarea class="form-control" id="descripcion" name="descripcion" value="{{ old('descripcion') }}"></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <label class="font-weight-bold" for="fecha">Fecha* </label>
                                <input type="date" class="form-control" id="fecha" name="fecha" value="{{ old('fecha') }}">
                            </div>
                            
                        </div>
                        
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="containerImgCreate">
                                    <img id="createInvesPic" src="../../public/images/defaultPicture.png">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="font-weight-bold" for="imagen">Imagen</label>
                                <div class="custom-file">
                                    <input name="imagen" type="file" class="custom-file-input" id="customFileLang" accept="image/*"
                                           lang="es">
                                    <label class="custom-file-label" for="customFileLang">Seleccionar Archivo</label>
                                </div>
                            </div>

                        </div>
                        
                        <br>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <a href="{{ route('home') }}" class="btn btn-danger">Cancelar</a>
                                <button type="submit" class="btn btn-success">
                                    Guardar datos
                                    <i class="ml-1 fas fa-save"></i>
                                </button>
                            </div>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
            <br>
            <div class="row align-items-center">

                <br>
                <hr>
                <h5>Departamento de Estudios sobre Movimientos Sociales. DESMOS</h5>
            </div>
    </div>

    {{-- @else
        El periodo de Registro de Proyectos a terminado
    @endif --}}

@endsection

@section('css')
        <style>
            .containerImgCreate{
                margin: 1.5em;
                width: 150px;
                height: 200px;
                position: relative;
                overflow: hidden;
            }
            
            #createInvesPic{
                width: 100%;
                position: absolute;
                object-fit: contain;
            }
            
        </style>
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script>
        document.getElementById("customFileLang").addEventListener('change',cambiarImagen);
        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) =>{
                document.getElementById('createInvesPic').setAttribute('src',event.target.result);
            };

            reader.readAsDataURL(file);
        }
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#descripcion' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    
@endsection