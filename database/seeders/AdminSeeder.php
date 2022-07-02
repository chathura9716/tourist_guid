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
            'name' => 'Admin',
            'type' => '',
            'address' => '157/F,hdga,kadg',
            'city' => 'Colombo',
            'availability' => 'null',
            'charges'=>2,
            'email' => 'admin@gmail.com',
            'password' =>bcrypt(12345678),
            'role' => 'admin'
        ]);
    }
}
