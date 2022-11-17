<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $p = ['Manager', 'CEO', 'COO', 'CFO', 'CMO', 'CTO', 'President', 'Vice-President', 'Intern', 'Human resources manager', 'Accountant', 'Customer service representative'];
        return [
            'lname' => $this->faker->lastName(),
            'fname' => $this->faker->firstName(),
            'position' => $this->faker->randomElement($p),
            'salary' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 999, $max = 999999),
        ];
    }
}
