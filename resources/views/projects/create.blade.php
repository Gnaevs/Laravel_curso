@extends('layout')
@section('title', 'Portafolio')

@section('content')
    <h1>Crear nuevo proyecto</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.store', $project) }}">
       
        @include('projects._form', ['btnText' => 'Guardar'])

    </form>
@endsection
