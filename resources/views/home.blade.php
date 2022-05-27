@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container">
            <div class="row align-items-center">

                {{-- @if(Auth::check() && (Auth::user()->role =='admin' || Auth::user()->role =='cta' || Auth::user()->role =='auxiliar' || Auth::user()->role =='redes' || Auth::user()->role =='aulas' || Auth::user()->role =='general' )) --}}
                    <div class="col-md-12">
                        <div class="card card-chart">
                            <div class="card-header card-header-success">B&uacute;squeda General</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                @if (session('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif

                                <form action="" method="POST" enctype="multipart/form-data" class="col-12">
                                    {!! csrf_field() !!}

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>Debe de escribir un criterio de búsqueda</ul>
                                        </div>
                                    @endif

                                    <br>
                                    <div class="row align-items-center">
                                        <div class="col-md-3 offset-md-1 text-end">
                                            <h3 class="card-title"><span class="text-success"><i class="fa fa-search"></span></i> Búsqueda</h3>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="busqueda" name="busqueda" />
                                        </div>
                                        <div class="col-md-2">
                                            <button type="submit" class="btn btn-success">Buscar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                {{-- @endif --}}

                <div class="col-md-12 ">
                    <div class="card card-chart">
                        <div class="card-header card-header-success">CID - DESMOS</div>
                        <div class="row m-1">

                            {{-- @if (Auth::check() && (Auth::user()->role =='admin' || Auth::user()->role =='cta' || Auth::user()->role =='auxiliar' || Auth::user()->role =='redes' )) --}}
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card card-stats ">
                                        <div class="card-header card-header-warning card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">person</i>
                                            </div>
                                            <h3 class="card-title">Investigadores <br></h3>
                                            <a href="{{route('investigadores.create')}}" class="btn btn-outline-success mb-2">Capturar Investigador</a>
                                            <a href="{{route('investigadores.indexAdmin')}}" class="btn btn-outline-danger mb-2">Consultar Investigadores</a>
                                        </div>
                                        <div class="card-footer p-2">
                                            
                                        </div>
                                    </div>
                                </div>
                            {{-- @endif --}}

                            <!-- Apartado de Tickets  -->
                            {{-- @if(Auth::check() && (Auth::user()->role =='admin' || Auth::user()->role =='cta' || Auth::user()->role =='auxiliar' || Auth::user()->role =='redes'))
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-danger card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">info_outline</i>
                                            </div>
                                            <h3 class="card-title">Tickets</h3>
                                            <a class="btn btn-outline-success" href="{{ route('tickets.create') }}">Capturar Tickets</a>
                                            <a href="{{ route('tickets.index') }}" class="btn btn-outline-danger">Consultar Tickets</a>
                                        </div>
                                        <div class="card-footer">
                                            <div class="stats">
                                                <i class="material-icons">local_offer</i> La Normal: {{$ticketsNormal}}
                                                <i class="material-icons">local_offer</i> Belenes: {{$ticketsBelenes}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif --}}
                            <!-- Apartado de LLaves   -->
                            {{-- @if(Auth::check() && (Auth::user()->role =='admin' || Auth::user()->role =='cta' || Auth::user()->role =='auxiliar' || Auth::user()->role =='redes')) --}}
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-info card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">event</i>
                                            </div>
                                            <h3 class="card-title">Eventos</h3>
                                            <a class="btn btn-outline-success mb-2" href="{{route('eventos.create')}}">Capturar Evento</a>
                                            <a href="{{route('eventos.indexAdmin')}}" class="btn btn-outline-danger mb-2">Consultar Eventos</a>
                                        </div>
                                        <div class="card-footer p-2">
                                            
                                        </div>
                                    </div>
                                </div>
                            {{-- @endif --}}

                            <!-- Apartado de Inventario   -->
                            {{-- @if(Auth::check() && (Auth::user()->role =='admin')) --}}
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-success card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">campaign</i>
                                            </div>
                                            <h3 class="card-title">Divulgación</h3>
                                            <a class="btn btn-outline-success mb-2" href="{{route("divulgaciones.create")}}" >Capturar Publicación</a>
                                            <a class="btn btn-outline-danger mb-2" href="{{route("divulgaciones.indexAdmin")}}" >Consultar Publicaciones</a>
                                        </div>
                                        <div class="card-footer p-2">
                                            
                                        </div>
                                    </div>
                                </div>
                            {{-- @endif --}}

                            <!-- Apartado de Aulas y áreas   -->
                            {{-- @if(Auth::check() && (Auth::user()->role =='admin' || Auth::user()->role =='cta' || Auth::user()->role =='rh' || Auth::user()->role =='redes')) --}}
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="card card-stats">
                                        <div class="card-header card-header-secondary card-header-icon">
                                            <div class="card-icon">
                                                <i class="material-icons">menu_book</i>
                                            </div>
                                            <h3 class="card-title">Libros y capítulos</h3>
                                            <a class="btn btn-outline-success mb-2" href="{{route("libros.create")}}" >Capturar Libro</a>
                                            <a class="btn btn-outline-danger mb-2" href="{{route("libros.indexAdmin")}}" >Consultar Libros</a>
                                        </div>
                                        <div class="card-footer p-2">
                                            
                                        </div>
                                    </div>
                                </div>
                            {{-- @endif --}}

                            <!-- Apartado de Cursos   -->
                            {{-- @if(Auth::check() && (Auth::user()->role =='admin' || Auth::user()->role =='cta' || Auth::user()->role =='aulas' || Auth::user()->role =='redes' || Auth::user()->role =='auxiliar' || Auth::user()->role == 'general')) --}}
                                <div class="col-lg-4 col-md-6 col-sm-12 ">
                                    <div class="card card-stats ">
                                        <div class="card-header card-header-info card-header-icon">
                                            <div class="card-icon">
                                            <i class="material-icons">newspaper</i>
                                            </div>
                                            <h3 class="card-title">Artículos en revistas científicas</h3>
                                            <a class="btn btn-outline-success mb-2" href="{{route("articulos.create")}}">Capturar artículo</a>
                                            <a class="btn btn-outline-danger mb-2" href="{{route("articulos.indexAdmin")}}">Consultar artículos</a>
                                        </div>
                                        <div class="card-footer p-2">
                                            
                                        </div>
                                    </div>
                                </div>
                            {{-- @endif --}}

                     
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <div class="card card-stats">
                                    <div class="card-header card-header-success card-header-icon">
                                        <div class="card-icon">
                                            <i class="material-icons">logout</i>
                                        </div>
                                        <h3 class="card-title">Salir</h3>
                                        <a class="btn btn-outline-danger" href=""
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            >
                                {{ __('Salir') }}
                            </a>
                            <form id="logout-form" action="" method="POST" class="d-none">
                                @csrf
                            </form>
                                    <div class="card-footer">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
