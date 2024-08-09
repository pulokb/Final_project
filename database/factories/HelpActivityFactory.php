<?php

namespace Database\Factories;

use App\Models\HelpActivity;
use Illuminate\Database\Eloquent\Factories\Factory;

class HelpActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HelpActivity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'activity' => $this->faker->word,
        'note' => $this->faker->text,
        'status' => $this->faker->word,
        'help_request' => $this->faker->randomDigitNotNull,
        'volunteer' => $this->faker->randomDigitNotNull,
        'image' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
