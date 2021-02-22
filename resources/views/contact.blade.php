@extends('layout')
@section('title','Contact')

@section('content')
<h1>Contact</h1>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)   
            <li>{{$error}}</li>
        @endforeach
    </ul>        
    @endif
    <form method="POST" action="{{route('contact')}}">
        @csrf
        <input name="name" placeholder="Nombre ..." value=""><br>
        <input type="email" name="email" placeholder="Email ..." value=""><br>
        <input name="subject" placeholder="asunto..."><br>
        <textarea name="content" placeholder="Mensaje ..." ></textarea><br>
        <button type="submit">Enviar</button><br>

    </form>
@endsection