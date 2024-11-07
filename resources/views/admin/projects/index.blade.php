@extends('layouts.app')

@section('page-title', 'Progetti')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Guarda tutti i miei progetti!
                    </h1>
                </div>

                <div class="mb-4">
                    <a href="{{ route('admin.projects.create') }}" class="btn btn-success w-100">
                        + Aggiungi
                    </a>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Data del progetto</th>
                            <th scope="col">Tipologia</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <th scope="row">{{ $project->id }}</th>
                                <td>{{ $project->title }}</td>
                                <td>{{ $project->project_date }}</td>
                                <td>{{ $project->project_type }}</td>
                                <td>
                                    <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-primary">
                                        Guarda il progetto!
                                    </a>
                                    <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}" class="btn btn-warning">
                                        Modifica
                                    </a>
                                    <form onsubmit="return confirm('Attenzione! Stai cancellando questo elemento, vuoi continuare?')" action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}" class="d-inline-block">
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
