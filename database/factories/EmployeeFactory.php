<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{

    public function definition(): array
    {
        return [

                'name'=>'Admin',
                'surname'=>'Admin',
                'cell_phone'=>'0973456789',
                'email'=>'admin@admin.com',
                'password'=>bcrypt('123456'),
                'employee_number'=>'2323232',
                'gender'=>'male',
                'nrc_number'=>'479974/11/1',
                'address'=>'123 Main Street',
                'branch_name'=>'Central Bank',

        ];
    }
}
