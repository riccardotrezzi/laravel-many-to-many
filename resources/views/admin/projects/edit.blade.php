@extends('layouts.app')

@section('page-title', 'Modifica' .$project->title)

@section('main-content')

<h1 class="text-center">
    Modifica {{$project->title}}
</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach 
        </ul>
    </div>

@endif

<form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="title" name="title" required maxlength="128" value="{{ $project->title }}" placeholder="Inserisci il titolo...">
    </div>

    <div class="mb-3">
        <label for="img" class="form-label">Copertina</label>
        <input type="file" class="form-control" id="img" name="img" maxlength="2048" value="{{ $project->img }}" placeholder="Inserisci la copertina...">
    </div>

    <div class="mb-3">
        <label for="project_date" class="form-label">Data di vendita</label>
        <input type="date" class="form-control" id="project_date" name="project_date" value="{{ $project->project_date }}" placeholder="Inserisci la data del progetto...">
    </div>

    <div class="mb-3">
        <label for="project_type" class="form-label">Tipo <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="project_type" name="project_type" required value="{{ $project->project_type }}" placeholder="Inserisci la tipologia...">
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
        <textarea class="form-control" id="description" name="description" rows="3"  required placeholder="Inserisci la descrizione..." >{{ $project->description }}</textarea>
    </div>

    <div class="mb-4">
        <button type="submit" class="btn btn-success w-100">
            + Aggiungi
        </button>
    </div>

    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">
        Torna indietro
    </a>


</form>    

@endsection
