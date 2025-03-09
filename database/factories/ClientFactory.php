<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'name'=>$this->faker->name(),
                'email'=>$this->faker->unique()->safeEmail(),
                'surnames'=>$this->faker->lastName(),
                'gender'=>$this->faker->randomElement(['male','female']),
                'cell_phone'=>$this->faker->phoneNumber(),
                'bank_name'=>$this->faker->company(),
                'bank_branch'=>$this->faker->randomElement[''],
                'account_number'=>'absa',
                'account_type'=>'individual',
                'address'=>$this->faker->address(),
                'nrc_number'=>'479974/11/1',
                'card_number'=>'1',
                'password'=>bcrypt('12345'),
        ];
    }

}
