@extends('layout')
@section('title', 'Portfolio')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="display-4 mb-0"> {{ __('Portfolio') }} </h1>
        

        @auth
            <a class="btn btn-primary" 
            href="{{ route('projects.create') }}">Crear Proyecto</a>
        @endauth
    </div>
    <p class="lead text-secondary">Proyectos realizados</p>
        <ul class="list-group">
            @forelse ($projects as $project)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    <a class="text-secondary d-flex justify-content-between align-item-center" 
                    href="{{ route('projects.show', $project) }}">
                        <span class="font-weight-bold">
                            {{ $project->title }}
                        </span>
                        <span class="text-black-50">
                            {{ $project->created_at->format('d/m/y') }}
                        </span>

                    </a>
                </li>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">
                    No hay elementos para mostrar
                </li>
            @endforelse
            {{ $projects->links('pagination::bootstrap-4') }}

        </ul>
    
@endsection
</div>
