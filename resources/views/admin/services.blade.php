@extends('layouts.index')

@section('title', 'Carte_Blanche')
@section('content')
    <div class="admin">
        <div class="admin-service center">
            <h1 class="text-h1-bold">Добавление услуги</h1>
            <form method="POST" action="/services_create" class="admin-service__block" enctype="multipart/form-data">
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
                    <input class="input2 @error('service_name') input-error-field @enderror" type="text" name="service_name" placeholder="Введите название">
                                
                    @error("service_name")
                        <div class="input-error-text" role="alert">
                            {{$message}}
                        </div>
                     @enderror
                </div>
                <div class="inputs-container">
                    <textarea class="input2 @error('service_desc') input-error-field @enderror" type="text" name="service_desc" placeholder="Добавьте описание"></textarea>
                                
                    @error("service_desc")
                        <div class="input-error-text" role="alert">
                            {{$message}}
                        </div>
                     @enderror
                </div>
                <div class="inputs-container">
                    <input class="input2 @error('service_photo') input-error-field @enderror" type="file" name="service_photo" placeholder="Добавьте фото">
                                
                    @error("service_photo")
                        <div class="input-error-text" role="alert">
                            {{$message}}
                        </div>
                     @enderror
                </div>
                <button class="button admin-service__button">Добавить на сайте</button>
            </form>
        </div>
        <div class="admin-service center">
            <h1 class="text-h1-bold">Редактирование услуги</h1>
            @foreach($services as $service)
                <form method="POST" action="/services_update/{{$service->id}}" class="admin-service__block" enctype="multipart/form-data">
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
                        <input class="input2 @error('service_name') input-error-field @enderror" type="text" name="service_name" value="{{$service->service_name}}" placeholder="Введите название">
                                    
                        @error("service_name")
                            <div class="input-error-text" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="inputs-container">
                        <textarea class="input2 @error('service_desc') input-error-field @enderror" type="text" name="service_desc"  value="{{$service->service_desc}}" placeholder="Добавьте описание">{{$service->service_desc}}</textarea>
                                    
                        @error("service_desc")
                            <div class="input-error-text" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="inputs-container">
                        <input class="input2 @error('service_photo') input-error-field @enderror" type="file" name="service_photo"  value="{{$service->service_photo}}" placeholder="Добавьте фото">
                                    
                        @error("service_photo")
                            <div class="input-error-text" role="alert">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <button class="button admin-service__button">Редактировать услугу</button>
                    <a class="admin-service__link" href="/services_delete/{{$service->id}}">Удалить услугу</a>
                </form>
            @endforeach
        </div>
    </div>
@endsection('content')