@extends('layouts.layout')

@section('main')
    <form action="{{(!empty($blogs)) ? route('blogs.update',$blogs->id) :  route('blogs.store')}}" method="post">
        @csrf
        @method('POST')
        <input type="text" name="title" id="{{(!empty($blogs)) ? $blogs->title : ''}}" placeholder="title">
        <input type="text" name="subtitles" id="{{(!empty($blogs)) ? $blogs->subtitle : ''}}" placeholder="subtitles">
        <input type="text" name="article" id="{{(!empty($blogs)) ? $blogs->article : ''}}" placeholder="article">
        <button type="submit">Carica</button>
    </form>
@endsection