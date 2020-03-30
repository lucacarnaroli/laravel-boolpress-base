@extends('layouts.layout')

@section('main')

<div class="box-form">
    <form action="{{route('blogs.store')}}" method="post">
        @csrf
            {{-- @if (!empty($blogs)) --}}
                {{-- @method('PATCH') --}}
            {{-- @else --}}
                @method('POST')
            {{-- @endif --}}
        <div class="form-group">
            <label for="exampleInputEmail1">Inserisci il titolo</label>
            <input type="text" class="form-control" name="title" id="" aria-describedby="emailHelp" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Inserisci un sottotitolo</label>
            <input type="text" class="form-control" name="subtitles" id="" placeholder="Subtitles">
        </div>
        <div class="form-group">
            <textarea class="textarea" name="article" id="" cols="40" rows="10" placeholder=" Text"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Carica</button>
    </form>
</div>

@endsection
