<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookmark.io</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <div class="app">
        <div class="left">
            @include('Includes.Sidebar')
        </div>
        <div class="right">
            @include('Includes.Header')

            @yield('content')
        </div>
    </div>
</body>
</html>
