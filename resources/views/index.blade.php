@extends('layout')
@section('titulo-pagina')
Formulário
@endsection
@section('header')
Formulário
@endsection
@section('conteudo')
<div style="text-align:center">
<form method="post" action="{{route('processar.form')}}">
    @csrf
<label for="nome">Nome</label>
<input type="text" name="nome">
<label for="morada">Morada</label>
<input type="text" name="morada">
<label for="automovel">Automovel</label>
<select name="automovel">
@foreach($marcas as $marca => $item)
    <option value="{{$marca}}">{{$marca}}</option>
@endforeach
</select>
<button type="submit">Enviar</button>
</form>
</div>
@endsection
