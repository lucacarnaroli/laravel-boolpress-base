@extends('layouts.layout')


@section('header')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
        @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
        @endforeach
            </ul> 
        </div>
    @endif
@endsection

@section('main')
    <div class="box">
    <form action="{{route('blogs.store')}}" method="post">
        @csrf
        @if (!empty($blogs))
            @method('PATCH')
        @else
            @method('POST')
        @endif
        <input type="text" name="title" id="{{(!empty($blogs)) ? $blogs->title : ''}}" placeholder="title">
        <input type="text" name="subtitles" id="{{(!empty($blogs)) ? $blogs->subtitles : ''}}" placeholder="subtitles">
        <input type="text" name="article" id="{{(!empty($blogs)) ? $blogs->article : ''}}" placeholder="article">
        <button type="submit">Carica</button>
        
    </form>
    </div>
@endsection