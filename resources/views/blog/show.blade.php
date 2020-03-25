@extends('layouts.layout')

@section('main')
    <div class="newBox">
        <h2>id: {{$blog->id}}</h2>
        <h2>Titolo: {{$blog->title}}</h2>
        <h4>Sottotitoli: {{$blog->subtitles}}</h4>
        <p>Articolo: {{$blog->article}}</p>
    </div>
@endsection