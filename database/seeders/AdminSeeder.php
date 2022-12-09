<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tourist;
use App\Models\Hotel;
use App\Models\Hagency;

use App\Models\Place;

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
       
            'name'=>'admin',
            'phone'=>'0768628420',
            'location'=>'gampaha',
            'about'=>"hello i'm chathura",
           
            'email' => 'admin@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'admin'
        ]);
        
        User::create([
       
            'name'=>'admin2',
            'phone'=>'0768628220',
            'location'=>'colombo',
            'about'=>"hello i'm admin2",
            
            'email' => 'admin2@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'admin'
        ]);
 
        User::create([
       
            'name'=>'Hotel agency 1',
            'phone'=>'0768628220',
            'location'=>'gampaha',
            'about'=>"hotel agency 1 profile",
           
            'email' => 'hacency1@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'Hagency'
        ]);
        Hagency::create([
          'agency_id'=>'3',
            'user_id'=>'1',
            'reg_no'=>'0768628220',
            'agency_name'=>'gampaha',
            'contact'=>"hotel agency 1 profile",
           
            'location' => 'hacency1@gmail.com',
          
        ]);
    
    }
}
