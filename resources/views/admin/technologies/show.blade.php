@extends('layouts.app')

@section('page-title', 'Tecnologie')

@section('main-content')
<div class="card" style="width: 17rem;">

  <div class="card-body">
        <h5 class="card-title">{{$technology->title}}</h5>

        <a href="{{ route('admin.technologies.index')}}" class="btn btn-warning">Torna ai progetti</a>
  </div>
</div>
@endsection
