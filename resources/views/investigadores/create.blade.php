@extends('layouts.app')
@section('content')
    <div class="container">
        @if (Auth::check())
            @if (session('message'))
                <div class="alert alert-success">
                    <h2>{{ session('message') }}</h2>

                </div>
            @endif

            <div class="row">
                <div class="col-md-auto ml-3">
                    <h2>Captura de Investigador</h2>
                </div>
                <hr>
                <script type="text/javascript">

                    $(document).ready(function() {
                        $('#js-example-basic-single').select2();

                    });

                </script>

            </div>

            <div class="row">
                <div class="col-12">
                    <form action="{{ route('investigadores.store') }}" method="post" enctype="multipart/form-data" class="col-12">
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
                            <div class="col-md-6">
                                <label class="font-weight-bold" for="nombre">Nombre </label>
                                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="font-weight-bold" for="linea_investigacion">Línea de investigación</label>
                                <select class="form-control" id="linea_investigacion" name="linea_investigacion">
                                    <option disabled selected>Elegir</option>
                                    <option value="Antropología política">Antropología política</option>
                                    <option value="Movimientos sociales">Movimientos sociales</option>
                                    <option value="cultura y género">cultura y género</option>
                                    <option value="Secularización y política">Secularización y política</option>
                                    <option value="Historia urgente">Historia urgente</option>
                                    <option value="Movimientos armados en México y organizaciones por la justicia de víctimas de desaparición forzada">cultura y género</option>
                                    <option value="Derechos Humanos, Juventud">Derechos Humanos, Juventud</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <label class="font-weight-bold" for="correo">Correo </label>
                                <input type="text" class="form-control" id="correo" name="correo" value="{{ old('correo') }}">
                            </div>
                            <div class="col-md-6">
                                <label class="font-weight-bold" for="grado">Grado </label>
                                <input type="text" class="form-control" id="grado" name="grado" value="{{ old('grado') }}">
                            </div>
                        </div>

                        <div class="row align-items-center mt-4">
                            <div class="col-md-12">
                                <label class="font-weight-bold" for="area">Curriculum</label>
                                <input type="text" class="form-control" id="curriculum" name="curriculum" value="{{ old('curriculum') }}">
                            </div>
                        </div>
                        <br>
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <label class="font-weight-bold" for="imagen">Imagen</label>
                                <div class="custom-file">
                                    <input name="imagen" type="file" class="custom-file-input" id="customFileLang"
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

    @else
        El periodo de Registro de Proyectos a terminado
    @endif

@endsection
