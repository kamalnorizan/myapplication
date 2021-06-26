<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($comments as $comment)
        {{ $comment->title }} - {{ $comment->name }}
    @endforeach
{{--
    @foreach ($commentsEloquent as $commentE)
        {{ $commentE->post->title }} - {{ $commentE->user->name }}
    @endforeach --}}


</body>
</html>
