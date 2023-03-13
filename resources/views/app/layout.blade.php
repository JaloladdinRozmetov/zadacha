<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <div class="header-box">

        <div class="header-logo">
            <img src="{{ asset('img/img_1.png') }}" alt="Logo">
        </div>
        <div class="header-content">
            <ul>
                <li><a class="button" href="{{route('home')}}">Задание 1</a></li>
                <li><a class="button" href="{{route('task2')}}">Задание 2</a></li>
                <li><a class="button" href="{{route('task3')}}">Задание 3</a></li>
                <li><a class="button" href="{{route('task4')}}">Задание 4</a></li>
                <li><a class="button" href="{{route('task5',['element_id'=>1])}}">Задание 5</a></li>
                <li><a class="button" href="{{route('task6')}}">Задание 6</a></li>
            </ul>
        </div>
        <div class="user-profile">
            <i class="fas fa-user"></i>
            @if (session('username'))
                Привет, {{ session('username') }}
            @else
                Привет Аноним!
                @endif</li>
        </div>

    </div>
</div>
@yield('content')
<div class="footer">
    <div class="container">
        <div class="footer-box">
        <div class="footer-logo">
            <img src="{{asset('img/img_1.png')}}" alt="">
        </div>
        <div class="footer-right">
            <p>
                Выполнил: Рузметов Жалоладдин
            </p>
            <p>
                тел +99897 510 36 44
            </p>
        </div>
        </div>

    </div>
</div>
@stack('scripts')
</body>
</html>
