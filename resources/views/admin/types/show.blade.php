@extends('layouts.app')

@section('page-title', 'Tipologie')

@section('main-content')
<div class="card" style="width: 17rem;">

  <div class="card-body">
        <h5 class="card-title">{{$type->name}}</h5>
        <a href="{{ route('admin.types.index')}}" class="btn btn-warning">Torna alla tipologia</a>
  </div>
</div>
    @endsection
