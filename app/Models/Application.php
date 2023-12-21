<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Application;
use App\Models\Service;
use App\Models\Status;

class Application extends Model
{
    protected $fillable = [
        'id',
        'status_app',
        'user_id',
        'service_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function serviceType()
    {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function statusApp()
    {
        return $this->belongsTo(Status::class, 'status_app');
    }
}


