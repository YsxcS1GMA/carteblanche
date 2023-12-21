@extends('layouts.index')

@section('title', 'Carte_Blanche')
@section('content')
    <div class="services center">
        <h1 class="text-h1-bold">Услуги</h1>
        <div class="services__items">
            @foreach($services as $service)
            <form method="POST" action="/application_create/{{$service->id}}" class="services__item">
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
                <div class="services__item_info">
                    <div class="services__item_info_text">
                        <h2 class="text-h1-bold">{{$service->service_name}}</h2>
                        <div class="services__item_info_desc">{{$service->service_desc}}</div>
                    </div>
                    @if(auth()->check())
                        <button class="button services__item_info_button">Записаться</button>
                    @else
                        <div class="services__item_info_guest">Авторизируйтесь, чтобы записаться</div>
                    @endif
                </div>
                <div class="services__item_img-container">
                    <img class="services__item_img" src="../images/services/{{$service->service_photo}}" alt="услуга">
                </div>
            </form>
            @endforeach
        </div>
    </div>
@endsection('content')