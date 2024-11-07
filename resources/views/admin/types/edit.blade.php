@extends('layouts.app')

@section('page-title', 'Modifica' .$type->name)

@section('main-content')

<h1 class="text-center">
    Modifica {{$type->name}}
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
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Titolo <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="name" name="name" required maxlength="128" value="{{ $type->name }}" placeholder="Inserisci il nome della tipologia...">
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
