@extends('layouts.plantilla')
@section('content')

<div class="mt-5 text-center">
    <span style="font-size: 50px;" class="material-icons">newspaper</span>
</div>
<h3 class="text-center">{{$articulo->titulo}}</h3>
<div class="container w-50">
    <p>{!!$articulo->descripcion!!}</p>
</div>

@endsection