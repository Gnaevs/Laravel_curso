@csrf
<div class="form-group">
<label for="title">
    Título del proyecto 
</label>
    <input class="form-control border-0 bg-light shadow-sm"
    type="text" 
    name="title" 
    value="{{ old('title', $project->title)}}">
</div>


<div class="form-group">
<label for="url">
    URL del proyecto
</label>
    <input class="form-control border-0 bg-light shadow-sm"
    type="text" 
    name="url" 
    value="{{ old('url', $project->url) }}">
</div>

<div class="form">
<label for="description">
    Descripción del proyecto
</label>
    <textarea class="form-control border-0 bg-light shadow-sm"
    name="description">{{ old('description', $project->description) }}</textarea>
</div>
<br>
<button class="btn btn-primary btn-lg btn-block"
type="submit">{{$btnText}}</button>
<a class="btn btn-link btn-block" href="{{ route('projects.index') }}">Cancelar</a>