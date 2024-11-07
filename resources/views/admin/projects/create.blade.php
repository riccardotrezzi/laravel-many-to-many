@extends('layouts.app')

@section('page-title', 'Progetti')

@section('main-content')

<h1 class="text-center">
    Crea un nuovo progetto!
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

    <div class="mb-3">
        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required maxlength="128" placeholder="Inserisci il titolo...">

            @error('title')
                <div class="alert alert-danger">
                    ERRORE TITOLO: {{ $message }}
                </div>
            @enderror
    </div>

    <div class="mb-3">
        <label for="img" class="form-label">Immagine del progetto</label>
        <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img" maxlength="2048" placeholder="Inserisci la copertina...">
        
        @error('img')
            <div class="alert alert-danger">
                ERRORE IMMAGINE: {{ $message }}
            </div>
        @enderror
    </div>
    

    <div class="mb-3">
        <label for="project_date" class="form-label">Data del progetto</label>
        <input type="date" class="form-control @error('project_date') is-invalid @enderror" id="project_date" name="project_date" placeholder="Inserisci la data del progetto...">

        @error('project_date')
            <div class="alert alert-danger">
                ERRORE DATA DI VENDITA: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="project_type" class="form-label">Tipo <span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('project_type') is-invalid @enderror" id="project_type" name="project_type" required placeholder="Inserisci la tipologia...">

        @error('project_type')
            <div class="alert alert-danger">
                ERRORE TIPO: {{ $message }}
            </div>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" maxlength="4096" name="description" rows="3" required placeholder="Inserisci la descrizione..."></textarea>

        @error('title')
            <div class="alert alert-danger">
                ERRORE DESCRIZIONE: {{ $message }}
            </div>
        @enderror
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
