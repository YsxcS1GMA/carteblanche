<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Application;

use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ApplicationController extends Controller
{
    public function services() {

        $services = Service::all();
        return view('services', [
            'services' => $services]);   
    }

    public function application_create(Request $request, $id) {

        $applicationInfo=$request->all();

        $userId = Auth::user()->id;

        $application_create = Application::create([
            "status_app"=> '1',
            "user_id"=> $userId,
            "service_id"=> $id,
        ]);

        if ($application_create) {
            return redirect()->back()->with("success","Вы оформили заявку");
        } else {
            return redirect()->back()->with("error","Произошла ошибка! Попробуйте снова!");
        }

    }
}
