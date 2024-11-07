@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success mb-4">
                        Sei loggato!
                    </h1>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary d-flex justify-content-center">
                        Vai ai miei progetti!
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
