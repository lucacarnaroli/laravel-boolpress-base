@extends('layouts.layout')

@section('main')
    <div class="post">
        @foreach ($blogs as $blog)
            <h2>{{$blog->id}}</h2>
            <h2>{{$blog->title}}</h2>
            <h4>{{$blog->subtitles}}</h4>
            <p>{{$blog->article}}</p>
        @endforeach
    </div>
@endsection