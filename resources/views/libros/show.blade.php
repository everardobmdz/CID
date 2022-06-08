@extends('layouts.plantilla')
@section('content')

<div class="mt-5 text-center">
    <span style="font-size: 50px;" class="material-icons">menu_book</span>
</div>
<h3 class="text-center">{{$libro->titulo}}</h3>
<div class="container w-50">
    <p>{!!$libro->descripcion!!}</p>
</div>

@endsection