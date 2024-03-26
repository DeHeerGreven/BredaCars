<?php

namespace Database\Seeders;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::create([
            'first_name' => 'Robin',
            'infix' => 'van',
            'last_name' => 'Persie',
            'email' => 'robinvanpersie@gmail.com',
            'street' => 'Feijenoordlaan',
            'house_number' => '3',
            'postal_code' => '3243WA',
            'city' => 'Rotterdam',
            'phone_number' => '+3163432732',
            'brand' => 'Opel',
            'model' => 'Corsa',
            'description' => 'Motor maakt raar geluid',
            'appointment_type' => 'reparatie',
            'appointment_date' => Carbon::now(),  
        ]);
    }
}
