<?php

namespace Database\Factories;

use App\Models\EmergencyContact;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmergencyContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmergencyContact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'operator' => $this->faker->word,
        'phone' => $this->faker->word,
        'email' => $this->faker->word,
        'details' => $this->faker->text,
        'district' => $this->faker->word,
        'area' => $this->faker->word,
        'address' => $this->faker->text,
        'latitude' => $this->faker->word,
        'longtitude' => $this->faker->word,
        'map_address' => $this->faker->text,
        'status' => $this->faker->word,
        'type' => $this->faker->word,
        'image' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
