<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>laravel recherche</title>
</head>

<body>
    <form action="{{ route('post.rech') }}" method="post" id="form-rech">
        <input type="text" id="req" name="req">
        <button type="submit">Rechercher</button>
    </form>
    
    <div id="rech">
        @foreach ($posts as $post)
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            {{ $post->content }}
        </p>
        @endforeach
    </div>

    <script src="js/app.js"></script>
</body>

</html>