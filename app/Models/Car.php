<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['brand',	'model', 'transaction',	'fuel',	'color', 'license_plate'];

    use HasFactory;

    public function car_logs()
    {
        return $this->hasMany(CarLog::class);
    }
}
