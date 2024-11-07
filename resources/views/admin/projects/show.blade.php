@extends('layouts.app')

@section('page-title', 'Progetti')

@section('main-content')
<div class="card" style="width: 17rem;">
  <img src="{{ $project['img'] }}" class="card-img-top" alt="">

  <div class="card-body">
        <h5 class="card-title">{{$project->title}}</h5>
        <p class="card-text">{{$project->description}}</p>

        <h6 class="mb-2">
            Data del progetto: {{$project->project_date}}
        </h6>
        <h6 class="mb-4">
            Tipologia: {{$project->project_type}}
        </h6>
        <a href="{{ route('admin.projects.index')}}" class="btn btn-warning">Torna ai progetti</a>
  </div>
</div>
    @endsection
