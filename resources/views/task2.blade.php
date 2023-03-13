@extends('app.layout')

@section('content')
    <div class="container">
        <form action="/login" method="POST" class="username-form">
            @csrf
            <h2 class="username-form__title">Авторизация</h2>
            <div class="username-form__input-group">
                <input type="text" id="username" name="username" placeholder="Ваше имя" class="username-form__input">
            </div>
            <div class="button-box">
            <button type="submit" class="username-form__submit-btn-1">ОТПРАВИТЬ</button>
            <button type="submit" class="username-form__submit-btn-2">ОТПРАВИТЬ</button>
            </div>
        </form>
    </div>

@endsection
