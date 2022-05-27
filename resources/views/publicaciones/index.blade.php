@extends('layouts.plantilla')
@section('content')
<section class="module" id="team">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <h2 class="module-title font-alt">Publicaciones</h2>
            </div>
        </div>
        <div class="row">
            <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-6">
                <a href="{{route('libros.index')}}" class="team-item bg-dark bg-gradient" style='background-image: url("../public/images/Libros.jpg")'>
                    <p class="u-non-blurred">Libros y capítulos</p>
                </a>
            </div>
            <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-6" onclick="wow fadeInUp">
                <a class="team-item bg-dark bg-gradient" style='background-image: url("../public/images/Revistas.jpg")'>  
                    <p class="u-non-blurred">Artículos en revistas científicas</p>
                </a >
            </div>
        </div>
    </div>
</section>
@endsection