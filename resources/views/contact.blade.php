@extends('layout')
@section('title','Contact')

@section('content')
<h1>Contact</h1>
    <form method="POST" action="{{route('contact')}}">
        @csrf
        <input name="name" placeholder="Nombre ..."><br>
        <input type="email" name="email" placeholder="Email ..."><br>
        <input name="subject" placeholder="asunto..."><br>
        <textarea name="content" placeholder="Mensaje ..." ></textarea><br>
        <button type="submit">Enviar</button><br>

    </form>
@endsection