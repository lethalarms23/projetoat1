@extends('layout')
@section('titulo-pagina')
Formulário submetido
@endsection
@section('header')
Informação enviada através do form
@endsection
@section('conteudo')
<div style="text-align: center">
{{$nome}}<br>
{{$morada}}<br>
{{$automovel}}<br>
</div>
@endsection