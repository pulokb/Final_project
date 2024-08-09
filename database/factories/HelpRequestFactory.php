<?php

namespace Database\Factories;

use App\Models\HelpRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class HelpRequestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HelpRequest::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
        'details' => $this->faker->text,
        'name' => $this->faker->word,
        'phone' => $this->faker->word,
        'email' => $this->faker->word,
        'district' => $this->faker->word,
        'area' => $this->faker->word,
        'address' => $this->faker->text,
        'help_type' => $this->faker->randomDigitNotNull,
        'priority' => $this->faker->randomDigitNotNull,
        'status' => $this->faker->word,
        'image' => $this->faker->word,
        'video' => $this->faker->word,
        'resolve_time' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
