@extends('layouts.app')

@section('page-title', 'Tecnologie')

@section('main-content')

<h1 class="text-center">
    Crea una nuova tecnologia!
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

<form action="{{ route('admin.technologies.store') }}" method="POST">
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


    <div class="mb-4">
        <button type="submit" class="btn btn-success w-100">
            + Aggiungi
        </button>
    </div>

    <a href="{{ route('admin.technologies.index') }}" class="btn btn-primary">
        Torna indietro
    </a>


</form>    

@endsection
