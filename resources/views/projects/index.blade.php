@extends('layout')
@section('title','Portfolio')

@section('content')
<h1>Portfolio</h1>
<ul>


    {{-- fORMA PHP}}
    
    {{-- <?php foreach ($portfolio as $portfolioItem) {
        echo   "<li>" . $portfolioItem['title'] . "</li>";
    } ?> --}}

    {{--   fORMA OPTIMIZADA    --}}

    {{-- <?PHP foreach ($portfolio as $portFolioItem): ?>
        <li> {{$portFolioItem['title']}} </li>
    <?php endforeach ?> --}}

    {{--       CON BLADE        --}}

    {{-- @foreach ($portfolio as $portFolioItem)
        <li> {{$portFolioItem['title']}} </li>
    @endforeach --}}

    {{--       IF CON BLADE       --}}
    
    {{-- @if ($portfolio) 

        @foreach ($portfolio as $portFolioItem)
            <li> {{$portFolioItem['title']}} </li>
        @endforeach
    @else
        <li>No hay proyectos para mostrar</li>
    @endif --}}

    {{--             FORELSE             --}}

    {{-- @forelse ($portfolio as $portFolioItem)
        <li>{{$portFolioItem['title'] }}</li>        
    @empty
        <li>No hay elementos para mostrar</li>
        
    @endforelse --}}


    {{--              HACER UN DUMP        --}}

    {{-- @forelse ($projects as $project)
        <li>{{$project->title }} <pre>{{var_dump($loop)}}</pre></li>        
    @empty
        <li>No hay elementos para mostrar</li>
        
    @endforelse --}}



    {{--                  JUGAR CONDICIONALES Y EL DUMP                       --}}



    @forelse ($projects as $project)
    <li><a href="{{ route('projects.show', $project) }}">{{$project->title }}</a></li>        
    @empty
        <li>No hay elementos para mostrar</li>        
    @endforelse
    {{$projects->links('pagination::bootstrap-4')}}
    

    {{--                      TAMBIEN TENEMOS                             --}}

    {{-- @for ()        
    @endfor

    @while ()        
    @endwhile

    @switch()
    @endswitch --}}

    {{-- Crear un controlador usando el comando php artisan make:controller PorfolioController --}}






</ul>
@endsection