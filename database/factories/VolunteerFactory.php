<?php

namespace Database\Factories;

use App\Models\Volunteer;
use Illuminate\Database\Eloquent\Factories\Factory;

class VolunteerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Volunteer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'profession' => $this->faker->word,
        'designation' => $this->faker->word,
        'identity_type' => $this->faker->word,
        'identity' => $this->faker->word,
        'phone' => $this->faker->word,
        'email' => $this->faker->word,
        'blood_group' => $this->faker->word,
        'details' => $this->faker->text,
        'district' => $this->faker->word,
        'area' => $this->faker->word,
        'address' => $this->faker->text,
        'latitude' => $this->faker->word,
        'longtitude' => $this->faker->word,
        'map_address' => $this->faker->text,
        'status' => $this->faker->word,
        'type' => $this->faker->word,
        'approval' => $this->faker->word,
        'user_id' => $this->faker->word,
        'description' => $this->faker->text,
        'interest' => $this->faker->text,
        'refer_code' => $this->faker->word,
        'referance' => $this->faker->word,
        'birth_date' => $this->faker->word,
        'joining_date' => $this->faker->word,
        'image' => $this->faker->word,
        'attachment' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
