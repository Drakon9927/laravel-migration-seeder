<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    public function run()
    {
        \DB::table('trains')->delete(); // Opzionale: pulisce la tabella prima di seminare

        Train::create([
            'company' => 'Trenitalia',
            'start_station' => 'Roma Termini',
            'end_station' => 'Milano Centrale',
            'departure_time' => '09:00',
            'arrival_time' => '13:00',
            'train_code' => 'TR100',
            'carriage_number' => 10,
            'on_time' => true,
            'cancelled' => false
        ]);

       
    }
}