<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'infix', 'last_name', 'email', 'street', 'house_number', 'postal_code', 'city', 'phone_number', 'brand', 'model', 'description', 'appointment_type' ,'appointment_date'];

    public function car_log()
    {
        return $this->hasOne(CarLog::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'appointment_user');
    }
}
