<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Tourist;
use App\Models\Hotel;
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
            'phone'=>'0768628220',
            'location'=>'gampaha',
            'about'=>"hello i'm chathura",
            'thumbnail'=>"1648767489.jpg",
            'email' => 'admin@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'admin'
        ]);
        User::create([
       
            'name'=>'admin',
            'phone'=>'0768628220',
            'location'=>'gampaha',
            'about'=>"hello i'm chathura",
            'thumbnail'=>"1648767489.jpg",
            'email' => 'thu@gmail.com',
            'password' => bcrypt(12345678),
            'role' => 'admin'
        ]);
 
    
    
        Hotel::create([
            'user_id' => '2',
            'hotel_name' => 'Kings Hotel',
            'type' => '5 Star',
<<<<<<< HEAD
            'address' => '1/B, Unique View Road, Nuwara Eliya 22200 Sri Lanka',
            'city' => 'Nuwareliya',
            'description' => 'Kings Court Hotel is an excellent choice for travelers visiting Nuwara Eliya, offering many helpful amenities designed to enhance your stay.

            While staying at Kings Court Hotel, visitors can check out International Buddhist Centre (1.1 mi) and Pedro Tea Factory (2.3 mi), some of Nuwara Eliya top attractions.',
            'thumbnail' => '1657610839.jpg',
=======
            'address' => 'Sri lanka',
            'city' => 'Sigiriya',
            'description' => 'xxfgcgvbmn,',
            'thumbnail' => 'hotel-sigiriya.jpg',
>>>>>>> origin

        ]);
        Place::create([
            'user_id' => '2',
            'place_name' => 'Sigiriya',
            'type' => 'hill',
            'province' => 'Center Province',
            'city' => 'Sigiriya',
            'description' => 'Sigiriya or Sinhagiri is an ancient rock fortress located in the northern Matale District near the town of Dambulla in the Central Province, Sri Lanka.
            ',
            'thumbnail' => '1666684220.jpg',

        ]);
        Place::create([
            'user_id' => '2',
            'place_name' => 'Ella',
            'type' => 'upcountry',
            'province' => 'Central Province',
            'city' => 'Ella',
            'description' => 'Ella has all the best parts of Sri Lanka rolled into one: 
                                beautiful jungle mountains, rolling tea plantations, 
                                and epic waterfalls. As one of the biggest tea producers, 
                                travelers can look forward to spending their days among the greenest surroundings, enjoying the views from hilltop houses and adventurous hiking trails. Even the train ride to Ella is one of life’s most remarkable experiences, as you travel by iconic blue train through bamboo forests and tropical mist. Enjoy all the top things to do in Ella with this complete travel guide.

            ',
            'thumbnail' => '1666780536.jpg',

        ]);
        Place::create([
            'user_id' => '2',
            'place_name' => 'Galle',
            'type' => 'Beach',
            'province' => 'Southern Province',
            'city' => 'Galle',
            'description' => 'The city of Galle is located on the Southwestern Coast 
                            of Sri Lanka and is nothing less than a place of wonders 
                            and exquisite beauty. The city was first fortified by the Portuguese, then colonised by the Dutch and finally ruled by the British. So, as a result, you will witness a beautiful blend of all the cultures. Thus, a visit to Sri Lanka is incomplete till you spend some time at Galle. It is known for the Galle Fort, the Lighthouse and the beaches in Galle. When you are done with exploring all the attractions, go to the beaches for refreshing and rejuvenating your soul!',
            'thumbnail' => '1657035958.jpg',

        ]);
    }
}
