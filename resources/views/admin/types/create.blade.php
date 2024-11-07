@extends('layouts.app')

@section('page-title', 'Tipologie')

@section('main-content')

<h1 class="text-center">
    Crea una nuova tipologia!
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

<form action="{{ route('admin.types.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">Nome Tipologia<span class="text-danger">*</span></label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required maxlength="128" placeholder="Inserisci il nome della tipologia...">

            @error('name')
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

    <a href="{{ route('admin.types.index') }}" class="btn btn-primary">
        Torna indietro
    </a>


</form>    

@endsection
