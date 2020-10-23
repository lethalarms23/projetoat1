@extends('layout')
@section('titulo-pagina')
Contactos
@endsection
@section('header')
Sites
@endsection
@section('conteudo')
@foreach ($siteslista as $numerosites)
    <div style="text-align: center">
    <p><a href="{{$numerosites}}" target="_blank"><h5>{{$numerosites}}</h5></a></p>
    </div>
@endforeach
@endsection