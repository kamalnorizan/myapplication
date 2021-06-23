<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{ $posts }} --}}
    {{-- @foreach ($posts as $post)
        Title : {{ $post['title'] }} <br>
        Body : {{ $post['body'] }} <br>
        Author : {{ $post['author'] }} <hr>
    @endforeach --}}

    @for ($i=0;$i< sizeOf($posts); $i++)
        Title : {{ $posts[$i]['title'] }} <br>
        Body : {{ $posts[$i]['body'] }} <br>
        Author : {{ $posts[$i]['author'] }} <hr>
    @endfor

    
</body>
</html>
