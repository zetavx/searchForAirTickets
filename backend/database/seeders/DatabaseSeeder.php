<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //create 10 users
        \App\Models\airline::factory(10)->create()->each(function ($airline) {
            \App\Models\ticket::factory(3)->create(['id_air' => $airline->id]);
        });
        /*for ($i = 0; $i < 5; $i++) {
            $this->call([
                airlinesSeeder::class,
                ticketsSeeder::class,
            ]);
        }*/
    }
}