<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="box-photo">
        @foreach ($photos as $photo)
            <div class="box-card">
                <img src="{{$photo->img}}" alt="">
                <h2>Nome: {{$photo->name}}</h2>
                <h3>Id: {{$photo->user_id}}</h3>
            </div>
        @endforeach
    </div>
</body>
</html>