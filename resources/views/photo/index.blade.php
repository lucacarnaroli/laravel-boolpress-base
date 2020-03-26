<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="box-post">
        @foreach ($photos as $photo)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$photo->img}}" alt="Card image cap">
                <div class="card-body">
                    <h1 class="card-title">Title: {{$photo->user->name}}</h1>
                    <h2 class="card-text">Nome: {{$photo->name}}</h2>
                    <h3 class="card-text">Id: {{$photo->user_id}}</h3>
                    <a href="{{route('photos.show',$photo)}}" class="btn btn-info">Mostra</a>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>

