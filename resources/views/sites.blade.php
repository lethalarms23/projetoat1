@extends('layout')
@section('titulo-pagina')
Contactos
@endsection
@section('header')
Sites
@endsection
@section('conteudo')
@foreach ($siteslista as $numerosites)
    <a href="{{$numerosites}}" style="text-align: center;" target="_blank"><h5>{{$numerosites}}</h5></a>
@endforeach
@endsection