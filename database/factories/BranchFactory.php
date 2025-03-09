<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            [
                'name'=>'Chadiza',
                'contact_number'=>'0968501639',
                'contact_email'=>'',
                'contact_number_2'=>'0971132995',
            ],
            [
                'name'=>'Chama',
                'contact_number'=>'0971133007',
                'contact_email'=>'',
                'contact_number_2'=>'0971133007',
            ],
            [
                'name'=>'Chambishi',
                'contact_number'=>'0961259966',
                'contact_email'=>'',
                'contact_number_2'=>'9701132730',
            ],
        ];
    }
}
