@extends('layouts.app')

@section('page-title', 'Tecnologie')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Guarda tutte le tecnologie!
                    </h1>
                </div>

                <div class="mb-4">
                    <a href="{{ route('admin.technologies.create') }}" class="btn btn-success w-100">
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
                        @foreach ($technologies as $technology)
                            <tr>
                                <th scope="row">{{ $technology->id }}</th>
                                <td>{{ $technology->title }}</td>
                                <td class="text-end">


                                    <a href="{{ route('admin.technologies.show', ['technology' => $technology->id]) }}" class="btn btn-primary">
                                        Guarda il progetto!
                                    </a>
                                    <a href="{{ route('admin.technologies.edit', ['technology' => $technology->id]) }}" class="btn btn-warning">
                                        Modifica
                                    </a>
                                    <form onsubmit="return confirm('Attenzione! Stai cancellando questo elemento, vuoi continuare?')" action="{{ route('admin.technologies.destroy', ['technology' => $technology->id]) }}" class="d-inline-block">
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
