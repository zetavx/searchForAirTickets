<?php

namespace Database\Factories;

use App\Models\airline;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class airlineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = airline::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_air' => 'Air-' . Str::random(5),
            'status_air' => 'A',
            'email_air' => Str::random(5) . '@airlines.com',
        ];
    }
}