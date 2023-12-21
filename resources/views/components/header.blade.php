<header class="header center">
    <a href="/" class="header__link">
        <img src="../images/logotype-header.png" alt="логотип" class="header__link_img">
    </a>
    @guest
        <div class="header__link_nav">
            <a href="/">Главная</a>
            <a href="/services">Услуги</a>
            <a href="/masters">Мастера</a>
        </div>

        <div class="header__link_right">
            <a href="/auth">Вход</a>
            <div>/</div>
            <a href="/reg">Регистрация</a>
        </div>
    @endguest
    @auth
            @if(auth()->user()->role_id === 1)
                <div class="header__link_nav">
                    <a href="/admin_services">Управление услугами</a>
                    <a href="/admin_applications">Управление заявками</a>
                    <a href="/exit">Выход</a>
                </div>
        @else
            <div class="header__link_nav">
                <a href="/">Главная</a>
                <a href="/services">Услуги</a>
                <a href="/masters">Мастера</a>
            </div>
            <div class="header__link_right">
                <a href="/exit">Выход</a>
            </div>
        @endif
    @endauth
</header>