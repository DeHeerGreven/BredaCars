<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'amount_of_parts'];

    public function car_logs()
    {
        return $this->belongsToMany(CarLog::class);
    }
}
