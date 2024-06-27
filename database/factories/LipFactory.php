<?php

namespace Database\Factories;

use App\Models\Lip;
use Illuminate\Database\Eloquent\Factories\Factory;

class LipFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lip::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand' => 'Wardah',
            'type' => 'Matte',
            'shade' => '01',
            'price' => 50000.00,
        ];
    }
}
