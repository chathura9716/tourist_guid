<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Admin',
            'lname' => '1',
            'dob' => '1997/05/16',
            'nic' => '971370537V',
            'contact' => '078635421',
            'email' => 'admin@gmail.com',
            'password' =>bcrypt(12345678),
            'role' => 'admin'
        ]);
    }
}
