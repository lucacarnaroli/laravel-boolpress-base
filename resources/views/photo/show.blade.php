<link rel="stylesheet" href="{{asset('css/app.css')}}">

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$photo->img}}" alt="Card image cap">
    <div class="card-body">
        <h1 class="card-title">Title: {{$photo->user->name}}</h1>
        <h2 class="card-text">Nome: {{$photo->name}}</h2>
        <h3 class="card-text">Id: {{$photo->user_id}}</h3>
        <a href="{{route('photos.index',$photo)}}" class="btn btn-info">Tutte le foto</a>
    </div>
</div>