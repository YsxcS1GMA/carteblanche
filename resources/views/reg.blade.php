@extends('layouts.index')

@section('title', 'Carte_Blanche')
@section('content')
    <div class="auth center">
        <h1 class="text-h1-bold">Регистрация</h1>
        <form method="POST" action="/reg_user" class="auth__block">
            @csrf
            @if(session('error'))
                <div class="input-error-text">
                    {{ session('error') }}
                </div>
            @endif
            @if(session('success'))
                <div class="input-success-text">
                    {{ session('success') }}
                </div>
            @endif
            <div class="inputs-container">
                <input class="input @error('name') input-error-field @enderror" type="text" name="name" placeholder="Имя">
                            
                @error("name")
                    <div class="input-error-text" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>
            <div class="inputs-container">
                <input class="input @error('telephone') input-error-field @enderror" type="tel" name="telephone" placeholder="Номер телефона">
                            
                @error("telephone")
                    <div class="input-error-text" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>
            <div class="inputs-container">
                <input class="input @error('email') input-error-field @enderror" type="email" name="email" placeholder="E-Mail">
                            
                @error("email")
                    <div class="input-error-text" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>
            <div class="inputs-container">
                <input class="input @error('password') input-error-field @enderror" type="password" name="password" placeholder="Пароль">
                            
                @error("password")
                    <div class="input-error-text" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>
            <div class="inputs-container">
                <input class="input @error('confirm_password') input-error-field @enderror" type="password" name="confirm_password" placeholder="Повторите пароль">
                            
                @error("confirm_password")
                    <div class="input-error-text" role="alert">
                        {{$message}}
                    </div>
                 @enderror
            </div>
            <button class="button auth__button">Зарегистрироваться</button>
            <a href="/auth">Войти</a>
        </form>
    </div>
@endsection('content')