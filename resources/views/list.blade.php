<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $heading }}</h1>

    @if(count($lists) === 0)
        <p>empty data</p>
    @endif

    @foreach($lists as $list)
        <h2><a href="/list/{{ $list['id'] }}">{{ $list['subject'] }}</a></h2>
    @endforeach

</body>
</html>
