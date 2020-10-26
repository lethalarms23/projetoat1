@extends('layout')
@section('titulo-pagina')
Formulário submetido
@endsection
@section('header')
Informação enviada através do form
@endsection
@section('conteudo')
<div style="text-align: center">
Nome: {{$nome}} Morada: {{$morada}}<br>
Carro: {{$automovel}}<br>
</div>
<div style="height: 150px; width: 100%; padding-left: 10px; text-align: center">
    <img src="{{asset($marcas[$automovel])}}" style="height: 100%;">
</div>
<br>
@endsection