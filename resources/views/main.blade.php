<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E comm project</title>

    <link rel="stylesheet" href="{{asset('css/mainStyle.css') }}" />
    <link rel="stylesheet" href="{{asset('css/header.css') }}" />

</head>
<body>
    {{View::make('header')}}
    @yield('content')
</body>
</html>
