
@extends('app.layout')

@section('content')

    <div class="index_box">
        <div class="index_content_box">
            <div class="title-content">
                Стажировка это круто
            </div>
            <ul>
                <li>- работа в команде</li>
                <li>- реальные проекты</li>
                <li>- оплачиваемая стажировка</li>
                <li>- перспективная отрасль</li>
            </ul>
            <a href="#" class="index-send_button">
                ПОДРОБНЕЕ
            </a>
        </div>
        <div class="index_image">
            <img src="{{asset('img/img_2.png')}}" alt="">
        </div>
    </div>


<div class="container">
    <h1><span>Свободные вакансии</span></h1>
    <br>
    <div class="main-menu">
        <div class="footer_menu">
            <p>Программист</p>
            <div class="img">
                <img src="{{asset('img/img_3.png')}}" alt="there is img"
                     type="png"
                />
            </div>

            <p>Верстка макета, интеграция
                сайта, программирование</p>
            <button type="submit" class="menu-btn">Zayavka</button>
        </div>
        <div class="footer_menu">
            <p>Программист</p>
            <div class="img">
                <img src="{{asset('img/img_4.png')}}" alt="there is img"
                     type="png"
                />
            </div>
            <p>Верстка макета, интеграция
                сайта, программирование</p>
            <button type="submit" class="menu-btn"> Zayavka</button>
        </div>
        <div class="footer_menu">
            <p>Программист</p>
            <div class="img">
                <img src="{{asset('img/img_5.png')}}" alt="there is img"
                     type="png"
                />
            </div>
            <p>Верстка макета, интеграция
                сайта, программирование</p>
            <button type="submit" class="menu-btn"> Zayavka</button>
        </div>
        <div class="footer_menu">
            <p>Программист</p>
            <div class="img">
                <img src="{{asset('img/img_6.png')}}" alt="there is img"
                     type="png"
                />
            </div>
            <p>Верстка макета, интеграция
                сайта, программирование</p>
            <button type="submit" class="menu-btn"> Zayavka</button>
        </div>
    </div><br>
    <div class="last-menu">
        <div class="left-menu">

            <ul>
                <p>Мы готовы вам предложить:</p>
                <li><span>Обучение под руководтсвом опытного наставника</span> </li>
                <li><span>Дружелюбный коллектив</span> </li>
                <li><span>озможность профессионального и карьерного роста в ИТ-компании</span> </li>
                <li><span>Официальное трудоустройство</span> </li>
            </ul>

        </div>
        <div class="right-menu">

            <ul>
                <p>Мы ждем от вас:</p>
                <li><span> Желание и умение обучаться, упорство и целеустремленность</span></li>
                <li><span>Базовые знания PHP, JavaScript, MySQL, HTML и CSS</span> </li>
                <li> <span> Нацеленность на развитие и долгосрочное сотрудничество</span></li>
                <li><span>Имеешь опыт веб-разработки</span> </li>
            </ul>
        </div>
    </div>
</div>
@endsection
