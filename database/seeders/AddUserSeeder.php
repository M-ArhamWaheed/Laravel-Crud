<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\AddUser;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AddUser::create([
            'fname' => 'Arham',
            'lname' => 'Waheed',
            'email' => 'check@gmail.com',
            'phone_no' => '03035672559',
            'city' => 'Lahore',
            'age' => '12',
            'password' => '123',
            'cpassword' => '123',
            'address' => 'Lahore',
        ]);
    }
}
