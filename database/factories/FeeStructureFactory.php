<?php

namespace Database\Factories;

use App\Models\FeeStructure;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FeeStructureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FeeStructure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'user_id' => User::factory(),
          'admission_fee' => 0,
          'total_fee_by_user' => 3000,
          'monthly_fee' => 3000,
          'admission_date' => '2022-07-10',
          'issue_fee_date' => '2022-07-10',
          'due_fee_date' => '2022-08-09',
          'status' => 'Paid',
        ];
    }
}
