<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'last_name' => $this->faker->lastName,
        'first_name' => $this->faker->firstName,
        'gender' => $this->faker->randomElement(['0', '1', '2']),
        'email' => $this->faker->unique()->safeEmail,
        'tel1' => $this->faker->numerify('080'),
        'tel2' => $this->faker->numerify('####'),
        'tel3' => $this->faker->numerify('####'),
        'address' => $this->faker->address,
        'category_id' => $this->faker->randomElement(['1','2','3','4','5']),
        'detail' => $this->faker->paragraph,
        ];
    }
}
