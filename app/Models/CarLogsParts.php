<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CarLogsParts extends Model
{
    use HasFactory;

    protected $fillable = [
        "part_id",
        "car_log_id",
        "amount"
    ];

}
