<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Place;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create([
            'user_id' => '1',
            'place_name' => 'Knuckles Mountain Range',
            'type' => 'hill',
            'province' => 'Center Province',
            'city' => 'Kandy',
            'description' => 'Knuckles mountain range encompasses two major towns in Sri Lanka – Matale and Kandy. It can be more evident with the fact that Knuckles form a major portion of the central province in Sri Lanka. The UNESCO world heritage site is loaded with an array flora and fauna, and exciting trail endowed with waterfalls, rivers, and tropical forest.
            You can gain a maximum altitude of 1200 meters.
            There are 2 popular trek routes inside Knuckles Mountain Range. They are as follows: 
            Hunasgiriya Route:  A 31 km of the ride by road. As you take the A26 from Kandy on your way to the Knuckles, the imposing views would leave you overwhelmed. You would find yourself lost in the magical world all around created by mountains, valleys, lakes, and tea estates. The 12-km trek to the Knuckles is an enchanting one with a medium difficulty level. The entire trek also encompasses 3 km walk close to the Mini Worlds End.
            There are plenty of birds, forests, and streams all around to enchant you. The trail is fairly flat as you near the Mini Worlds End, but it’s an up slope thereafter. You have to pay an entrance fee to enter the Knuckles. If you want to experience the remarkable nature of Sri Lanka and spend some moments free from
            Trek length: 12 km
            Total trek duration: 7 hours approximately
            Difficulty: Medium
            Rangala Route: If you are someone who loves challenges and like to tread extreme terrains, then Rangala route leading to the Knuckle top is perfect for you. The enchanting trail takes you through panoramic vistas comprising of lush green tea-estates, forests, and temple. Uneven as it is, the trail is mostly up slope and is difficult to climb. By the time this trail ends, there is a river along the trail that cascades into 5 different waterfalls.
            The Rangala Trek also requires you to have wonderful walking shoes and a proper hat. The last leg of the trek is of around 4 km which takes you top to the waterfalls. This is one of the highlights of the trek and must not be missed by any nature seeker.
            Trek length: 26 km
            Total trek duration: 6-8 hours approximately
            Difficulty: Hard
            ',
            'thumbnail' => 'KnucklesMountainRange.jpg',
        ]);
        Place::create([
            'user_id' => '1',
            'place_name' => 'Ambuluwawa',
            'type' => 'hill',
            'province' => 'Center Province',
            'city' => 'Kandy',
            'description' => 'Ambuluwawa Biodiversity Complex is Sri Lanka first multi-religious sanctuary. Ambuluwawa Tower lies at the top of the Ambuluwawa mountain, 1,087 meters above sea level and 700 meters above Gampola town. It is the backyard mountain in Gampola. ',
            'thumbnail' => 'ambuluwawa.jpg',

        ]);
        Place::create([
            'user_id' => '2',
            'place_name' => 'Hanthana ',
            'type' => 'hill',
            'province' => 'Center Province',
            'city' => 'Kandy',
            'description' => 'The Hanthana mountain range in Kandy is popular among those who like to go hiking, camping, bird watching and be close to nature in any way.
               ',        
            'thumbnail' => 'Hanthana.jpg',
        ]);

        Place::create([
            'user_id' => '2',
            'place_name' => 'Sembuwatta ',
            'type' => 'lack',
            'province' => 'Center Province',
            'city' => 'Matale',
            'description' => 'Sembuwatta Lake is a tourist attraction situated at Elkaduwa in the Matale District of Sri Lanka, adjacent to the Campbell Lane Forest Reserve. Sembuwatta Lake is a man-made lake created from natural spring water. Alongside the lake is a natural swimming pool. Sembuwatta Lake is believed to be 9 m to 12 m deep.   ',        
            'thumbnail' => 'Sembuwatta.jpg',
        ]);

        Place::create([
            'user_id' => '1',
            'place_name' => 'Nine arches ',
            'type' => 'Bridge',
            'province' => 'Center Province',
            'city' => 'NuwaraEliya',
            'description' => 'Train tours in the beautiful uplands of Sri Lanka are rated as some of the best train tours in the world. The grand Nine Arch Bridge, also known as The Bridge In The Sky, is a glorious man-made masterpiece, located in the ‘hill country’ of Ella, Sri Lanka.
            ',
            'thumbnail' => 'Nine-Arch-Bridge.jpg',
        ]);

        Place::create([
            'user_id' => '2',
            'place_name' => 'Kallady Beach ',
            'type' => 'Beach',
            'province' => 'Eastern Province',
            'city' => 'Baticalo',
            'description' => 'Falling under the category of ‘most peaceful beaches’ in Sri Lanka, Kallady Beach is one of those places where people who despise the noise would feel completely at home. Located about 40 minutes from Pasikuda and separated by the Batticaloa lagoon, Kallady Beach is as much a balm for the weary eyes as it is for the fatigued mind.      ',
            'thumbnail' => 'Kallady.jpg',
        ]);
        Place::create([
            'user_id' => '2',
            'place_name' => 'St. Mary cathedral',
            'type' => 'Church',
            'province' => 'Eastern Province',
            'city' => 'Baticalo',
            'description' => 'The Cathedral of St. Mary is the cathedral church of the Roman Catholic Diocese of Batticaloa in Puliyanthivu. The cathedral is a landmark and Catholic historical icon in the district of Batticaloa, Sri Lanka. It was first built in 1808 by Paschal Mudaliyar.
           ',           
            'thumbnail' => 'cathedral-2-300x300.jpg',
        ]);
        Place::create([
            'user_id' => '2',
            'place_name' => 'Nilaveli Beach',
            'type' => 'Beach',
            'province' => 'Eastern Province',
            'city' => 'Trincomalee',
            'description' => 'Scenic sandy beach featuring clear water with coral & marine life & boats to Pigeon Island.  ',           
            
            'thumbnail' => 'Nilaveli-Beach-Trincomalee-1140x530.jpg',
        ]);
        Place::create([
            'user_id' => '1',
            'place_name' => 'Sri Thirukoneshwaram Kowil',
            'type' => 'Hindu Temple',
            'province' => 'Eastern Province',
            'city' => 'Trincomalee',
            'description' => 'Thirukonamalai Konesar Temple – The Temple of the Thousand Pillars and Dakshina-Then Kailasam is a classical-medieval Hindu temple complex in Trincomalee, a Hindu religious pilgrimage centre in Eastern Province, Sri Lanka. The most sacred of the Pancha Ishwarams of Sri Lanka, it was built significantly during the reign of the early Cholas and the Five Dravidians of the Early Pandyan Kingdom on top of Konesar Malai, a promontory overlooking Trincomalee District, Gokarna bay and the Indian Ocean. 
            ',

            'thumbnail' => 'Koneswaram temple - Lankapradeepa.JPG',
        ]);
        Place::create([
            'user_id' => '2',
            'place_name' => 'Nallur Kandaswamy kovil',
            'type' => 'Hindu Temple',
            'province' => 'Northern Province',
            'city' => 'Jaffna',
            'description' => 'Nallur Kandaswamy Kovil is a significant Hindu temple, located in Nallur, Northern Province, Sri Lanka
            ',

            'thumbnail' => 'Nallur-Kandaswamy-Temple-Nallur-Kovil1.jpg',
        ]);
        Place::create([
            'user_id' => '1',
            'place_name' => 'Jaffna fort',
            'type' => 'Fort',
            'province' => 'Northern Province',
            'city' => 'Jaffna',
            'description' => 'Jaffna Fort is a fort built by the Portuguese at Jaffna, Sri Lanka in 1618 under Phillippe de Oliveira following the Portuguese invasion of Jaffna. The fort is located near the coastal village of Gurunagar.
                ',

            'thumbnail' => 'Jaffna-Dutch-Fort-header.jpg',
        ]);
        Place::create([
            'user_id' => '2',
            'place_name' => 'Sri Naga vihara ',
            'type' => 'Buddhist temple',
            'province' => 'Northern Province',
            'city' => 'Jaffna',
            'description' => 'Traveling on a budget? Sri Nagavihara International Buddhist Centre is a terrific place to start your exploring in Jaffna. This place of worship would not cost you a dime. Nallur Kandaswamy Kovil, Jaffna Fort and Jaffna Public Library are close by and also recommended by fellow travelers.      ',

            'thumbnail' => '2019-10-23.jpg',
        ]);
        Place::create([
            'user_id' => '1',
            'place_name' => 'casuarina beach',
            'type' => 'Beach',
            'province' => 'Northern Province',
            'city' => 'Jaffna',
            'description' => 'Casuarina Beach is in Karainagar, Jaffna District, Sri Lanka, about 20 kilometres from Jaffna. The Casuarina Beach in Karainagar is also called and written as Casoorina, Cashoorina and few other variants. This is considered to be the best beach in the Jaffna Peninsula with white sand.
            ',
            'thumbnail' => 'Casuarina_Beach_1.jpg',
        ]);

        Place::create([
            'user_id' => '2',
            'place_name' => 'Ruwanweliseya',
            'type' => 'Buddhist temple',
            'province' => 'North center Province',
            'city' => 'Anuradhapura',
            'description' => 'The Ruwanweli Maha Seya, also known as the Mahathupa is a stupa in Anuradhapura, Sri Lanka. Two quarts or one Dona of the Buddha relics are enshrined in the stupa, making it the largest collection of his relics anywhere.
            ',
            'thumbnail' => 'z_jun-p02-The.jpg',
        ]);

        Place::create([
            'user_id' => '1',
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
