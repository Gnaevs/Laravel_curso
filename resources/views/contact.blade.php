@extends('layout')
@section('title','Contact')

@section('content')
<h1>Contact</h1>
    <form method="POST" action="{{route('contact')}}">
        @csrf
        <input name="name" placeholder="Nombre ..."><br>
        <input type="email" name="subject" placeholder="Asunto ..."><br>
        <input name="name" placeholder="Nombre..."><br>
        <textarea name="content" placeholder="Mensaje ..." ></textarea><br>
        <button type="submit">Enviar</button><br>

    </form>
@endsection