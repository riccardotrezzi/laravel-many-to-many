@extends('layouts.app')

@section('page-title', 'Tipologie')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Guarda le tipologie!
                    </h1>
                </div>

                <div class="mb-4">
                    <a href="{{ route('admin.types.create') }}" class="btn btn-success w-100">
                        + Aggiungi
                    </a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <th scope="row">{{ $type->id }}</th>
                                <td>{{ $type->name }}</td>
                                <td>
                                    <a href="{{ route('admin.types.show', ['type' => $type->id]) }}" class="btn btn-primary">
                                        Guarda il progetto!
                                    </a>
                                    <a href="{{ route('admin.types.edit', ['type' => $type->id]) }}" class="btn btn-warning">
                                        Modifica
                                    </a>
                                    <form onsubmit="return confirm('Attenzione! Stai cancellando questo elemento, vuoi continuare?')" action="{{ route('admin.types.destroy', ['type' => $type->id]) }}" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            Elimina
                                        </button>
                                    </form>
                                    
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
@endsection
