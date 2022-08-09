<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gym_id' => rand(1,500),
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'gender' => User::GENDER['Male'],
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'address' => $this->faker->address,
            'weight' => rand(45,100),
            'height' => rand(4,6),
            'cnic' => mt_rand(1000000000000, 9999999999999),
            'date_of_birth' => $this->faker->date('d-m-Y'),
            'phone' => $this->faker->phoneNumber(),
            'mobile' => $this->faker->phoneNumber(),
            'password' => null, // password
            'remember_token' => Str::random(10),
        ];
    }
}
