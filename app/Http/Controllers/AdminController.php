<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Application;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Status;

class AdminController extends Controller
{
    public function admin_applications() {

        $applications = Application::all();

        return view("admin.applications", [
            'applications' => $applications,
        ]);
    }
    
    public function confirm($id)
    {

        $application = DB::table('applications')->where('id',"=",$id)->update(['status_app' => 2]);

        return redirect()->back();
    }
    
    public function deny($id)
    {

        $application = DB::table('applications')->where('id',"=",$id)->update(['status_app' => 3]);

        return redirect()->back();
    }

    public function admin_services() {

        $services = Service::all();

        return view("admin.services", [
            'services' => $services,
        ]);
    }

    public function services_create(Request $request) {
        $request->validate([
            "service_name"=> "required",
            "service_photo"=> "required",
            "service_desc"=> "required",
            ],
            [ 
                "service_name.required" => "Поле обязательно для заполнения!",
                "service_photo.required" => "Поле обязательно для заполнения!",
                "service_desc.required" => "Поле обязательно для заполнения!",
        ]);


        $servicesInfo=$request->all();

        $photo = $request->file('service_photo');
        $photoName = time() . '_' . $photo->getClientOriginalName();
        $destinationPath = public_path('images/services');
        $photo->move($destinationPath, $photoName);

        $services_create = Service::create([
            "service_name"=> $servicesInfo["service_name"],
            "service_desc"=> $servicesInfo["service_desc"],
            "service_photo"=> $photoName,
        ]);

        if ($services_create) {
            return redirect()->back()->with("success","Услуга добавлена!");
            
        } else {
            return redirect()->back()->with("error","Произошла ошибка! Попробуйте снова!");
        }

    }

    public function services_update(Request $request, $id) {

        $request->validate([
            "service_name"=> "required",
            "service_desc"=> "required",
            ],
            [ 
                "service_name.required" => "Поле обязательно для заполнения!",
                "service_desc.required" => "Поле обязательно для заполнения!",
        ]);

        $servicesInfo=$request->all();

        $newPhotoName = $request->file('services_photo');

        $service = Service::find($id);

        if (!empty($photo)) {
            // Обработка для нового фото
            $newPhotoName = time() . '_' . $newPhoto->getClientOriginalName();
            $destinationPath = public_path('images/services');
            $newPhoto->move($destinationPath, $newPhotoName);
        
            // Обновление имени фото в базе данных
            $services_create->service_photo = $newPhotoName;
        } else {
            // Если новое фото не предоставлено, оставляем старое фото без изменений
            $oldPhotoName = $service->service_photo;
            $service->service_photo = $oldPhotoName;
        }

        $service->service_name = $servicesInfo['service_name'];
        $service->service_desc = $servicesInfo['service_desc'];

        $service->save();

        return  redirect()->back()->with('success', 'Услуга успешно обновлена.');
    }

    public function services_delete($id) {
        $service = Service::find($id);

        $service->delete();

        return  redirect()->back()->with('success', 'Услуга успешно удалена.');
    }
}
