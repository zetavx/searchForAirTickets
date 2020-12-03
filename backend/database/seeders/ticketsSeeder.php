<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Database\Seeder;

class ticketsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'name_tic' => 'Vuelo-' . Str::random(5),
            'status_tic' => 'A',
            'city_start' => 'Origen-' . Str::random(5),
            'city_end' => 'Destino-' . Str::random(5),
            'date_start' => date('Y-m-d'),
            'date_return' => date('Y-m-d'),
            'scale_number' => 0,
            'price_tic' => 250.36,
            'duration_tic' => 15.58,
            'id_air' => 1,
        ]);
    }
}