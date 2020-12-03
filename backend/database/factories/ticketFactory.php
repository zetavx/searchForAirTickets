<?php

namespace Database\Factories;

use App\Models\airline;
use App\Models\ticket;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ticketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_tic' => 'Vuelo-' . Str::random(5),
            'status_tic' => 'A',
            'city_start' => 'Origen-' . Str::random(5),
            'city_end' => 'Destino-' . Str::random(5),
            'date_start' => date('Y-m-d'),
            'date_return' => date('Y-m-d'),
            'scale_number' => 0,
            'price_tic' => 250.36,
            'duration_tic' => 15.58,
            'id_air' => airline::class,
        ];
    }
}