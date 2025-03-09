<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{

    public function run(): void
    {
        Client::create([

                'names'=>'John Doe',
                'email'=>'john@doe.com',
                'surnames'=>'Doe',
                'gender'=>'male',
                'cell_phone'=>'0123456789',
                'bank_name'=>'absa',
                'bank_branch'=>'absa',
                'account_number'=>'absa',
                'account_type'=>'individual',
                'address'=>'1234 Main street',
                'nrc_number'=>'479974/11/1',
                'card_number'=>'1',
                'password'=>bcrypt('12345'),
            'branch_name'=>$this->randomBranch()
        ]);
    }
    private  function randomBranch() {
        $branch = Branch::all()->random(1)->first();
        return $branch->name;
    }
}
