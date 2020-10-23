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
    <option value="Toyota">Toyota</option>
    <option value="BMW">BMW</option>
    <option value="Jaguar">Jaguar</option>
    <option value="Audi">Audi</option>
</select>
<button type="submit">Enviar</button>
</form>
</div>
@endsection
