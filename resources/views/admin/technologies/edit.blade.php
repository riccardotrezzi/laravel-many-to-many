@extends('layouts.app')

@section('page-title', 'Modifica' .$technology->title)

@section('main-content')

<h1 class="text-center">
    Modifica {{$technology->title}}
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
    @method('GET')

    <div class="mb-3">
        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="title" name="title" required maxlength="128" value="{{ $technology->title }}" placeholder="Inserisci il titolo...">
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
