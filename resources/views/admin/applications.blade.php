@extends('layouts.index')

@section('title', 'Carte_Blanche')
@section('content')
    <div class="admin">
        <div class="admin-service center">
            <h1 class="text-h1-bold">Заказы</h1>
            <div class="admin-applications">
                <div class="admin-applications__header">
                    <div>№ Заказа</div>
                    <div>Клиент</div>
                    <div>Тип услуги, статус</div>
                </div>
            </div>
            <div class="admin-applications__applications">
                @foreach($applications as $application)
                    <div class="admin-applications__applications_item">
                        <div class="admin-applications__applications_item_info">
                            <div class="admin-applications__applications_item-left">
                                <div>{{$application->id}}</div>
                                <div class="admin-applications__applications_info">
                                    <div>{{$application->user->name}}</div>
                                    <div>{{$application->user->telephone}}</div>
                                </div>
                            </div>
                            <div class="admin-applications__applications_info">
                                <div>{{$application->serviceType->service_name}}</div>
                                <div>{{$application->statusApp->status_type}}</div>
                            </div>
                        </div>
                        <div class="admin-applications__applications_item_buttons">
                            <a href="/admin_applications/{{$application->id}}/confirm" class="admin-applications__applications_item_buttons-confirm">Принять</a>
                            <a href="/admin_applications/{{$application->id}}/deny" class="admin-applications__applications_item_buttons-deny">Отклонить</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection('content')