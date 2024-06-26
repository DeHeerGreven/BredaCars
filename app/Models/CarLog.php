<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'appointment_id', 'car_id', 'name', 'description'];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class, 'appointment_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }

    public function parts()
    {
        return $this->belongsToMany(Part::class, 'car_logs_parts')->select('parts.id');
    }

    public function carLogsParts()
    {
        return $this->hasMany(CarLogsParts::class);
    }

}
