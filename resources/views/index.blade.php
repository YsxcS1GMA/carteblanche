@extends('layouts.index')

@section('title', 'Carte_Blanche')
@section('content')
    <div class="main">
        <div class="main__top center">
            <img src="../images/logotype.png" alt="logotype">
            <img src="../images/line1.png" alt="line">
            <div class="main__top_title">СТУДИЯ АВТОУХОДА</div>
            <div class="main__top_contacts">
                <div>+7 (917) 666-67-77</div>
                <div>Уфа, Гостиный Двор, 1</div>
            </div>
        </div>
        <div class="main__proposal center">
            <div class="main__proposal_title">
                <h2 class="text-h1-bold">ЧТО МЫ ПРЕДЛАГАЕМ</h2>
                <img src="../images/line2.png" alt="line2">
            </div>
            <div class="main__proposal_items">
                <div class="main__proposal_item">
                    <div class="main__proposal_item_title">ДЕТЕЙЛИНГ</div>
                    <div class="main__proposal_item_desc">Мы знаем как вернуть и продлить молодость Вашей технике! Детейлинг - проявление внимания и заботы Вашему автомобилю.</div>
                </div>
                <div class="main__proposal_item">
                    <div class="main__proposal_item_title">АВТОМОЙКА</div>
                    <div class="main__proposal_item_desc">Наш профиль - это детейлинг. А это значит, что мы не потоковая мойка. Мы как никто другой понимаем конструкцию автомобиля, обладаем всем необходимым инструментарием и знаниями для того, чтобы качественно и максимально деликатно вернуть чистоту Вашему автомобилю.</div>
                </div>
                <div class="main__proposal_item">
                    <div class="main__proposal_item_title">МАРКЕТ</div>
                    <div class="main__proposal_item_desc">Специально для Вас мы подобрали только лучшие и проверенные средства для ухода за автомобилем.Профессиональная автокосметика от ведущих производителей.</div>
                </div>
            </div>
        </div>
        <div class="main__slider">
            <div class="main__slider_slide">
                <img class="services__item_img" src="../images/services/service.png" alt="мастер">
            </div>
            <div class="main__slider_slide">
                <img class="services__item_img" src="../images/services/service.png" alt="мастер">
            </div>
            <div class="main__slider_slide">
                <img class="services__item_img" src="../images/services/service.png" alt="мастер">
            </div>
        </div>
        <div class="main__contacts center">
            <div class="services__item">
                <div class="services__item_info">
                    <div class="services__item_info_text">
                        <h2 class="text-h1-bold">Контакты</h2>
                        <div class="main__contacts_phones">
                            <div class="services__item_info_desc">Детейлинг <span class="main__contacts_phones_number">+7 (917) 111-22-22</span></div>
                            <div class="services__item_info_desc">Автомойка <span class="main__contacts_phones_number">+7 (917) 222-11-11</span></div>
                            <div class="services__item_info_desc">Уфа, Гостиный Двор, 1</div>
                        </div>
                    </div>
                </div>
                <div class="services__item_img-container">
                    <img class="services__item_img" src="../images/services/map.png" alt="карта">
                </div>
            </div>
        </div>
    </div>
@endsection('content')