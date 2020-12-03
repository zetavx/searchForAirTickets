<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class airlinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('airlines')->insert([
            'name_air' => 'Air-' . Str::random(5),
            'status_air' => 'A',
            'email_air' => Str::random(5) . '@airlines.com',
        ]);
    }
}