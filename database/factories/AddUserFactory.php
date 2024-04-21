<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AddUser>
 */
class AddUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fname' => fake()->firstName(),
            'lname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'phone_no' => fake()->phoneNumber(),
            'city' => fake()->city(),
            'age' => fake()->numberBetween(1, 100),
            'password' => md5(fake()->password()),
            'cpassword' => md5(fake()->password()),
            'address' => fake()->address(),
        ];
    }
}
