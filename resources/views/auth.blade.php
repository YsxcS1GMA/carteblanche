@extends('layouts.index')

@section('title', 'Carte_Blanche')
@section('content')
    <div class="auth center">
        <h1 class="text-h1-bold">Авторизация</h1>
        <form method="POST" action="/auth_user" class="auth__block">
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
            <button class="button auth__button">Войти</button>
            <a href="/reg">Зарегистрироваться</a>
        </form>
    </div>
@endsection('content')