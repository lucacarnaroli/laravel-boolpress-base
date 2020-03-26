@extends('layouts.layout')

@section('main')

    <div class="card new-post" style="width: 23rem;">
    <div class="card-body">
        <h6 class="card-text">id: {{$blog->id}}</h6>
        <h2 class="card-title">Titolo: {{$blog->title}}</h2>
        <h4 class="card-text">Sottotitoli: {{$blog->subtitles}}</h4>
        <p class="card-text">Articolo: {{$blog->article}}</p>
        <a href="{{route('blogs.index')}}" class="btn btn-secondary">Tutti gli articoli</a>
    </div>
    </div>

@endsection