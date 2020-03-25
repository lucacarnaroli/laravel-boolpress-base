@extends('layouts.layout')

@section('main')
    <div class="box-post">
        @foreach ($blogs as $blog)
            <div class="card post" style="width: 23rem;">
                <div class="card-body">
                    <h6 class="card-text">id: {{$blog->id}}</h6>
                    <h2 class="card-title">Titolo: {{$blog->title}}</h2>
                    <h4 class="card-text">Sottotitoli: {{$blog->subtitles}}</h4>
                    <p class="card-text">Articolo: {{$blog->article}}</p>
                    <a href="#" class="btn btn-primary">Modifica</a>
                    <form action="{{route('blogs.destroy', $blog->id)}}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger mt-1">DELETE</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection

