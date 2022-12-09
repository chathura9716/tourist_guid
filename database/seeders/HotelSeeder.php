<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;
use App\Models\Vehical;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::create([
            
            'user_id' => '3',
            'hotel_name' => 'Shangri-La Colombo ',
            'type' => '5',
            'address' => 'galle face beach,Colombo',
            'city' => 'Colombo',
            'price' => '99',
            'description' => 'Shangri-La Colombo presents a new level of luxury in the city. Located in the heart of the business and entertainment district, the hotel offers the various collection of guestrooms with stunning... It’s hard to fault the Shangri La, especially with the incredible value of the current ‘staycation offer’
            ',
            'thumbnail' => '295690763.jpg',
    
        
        ]);

        Hotel::create([
            
            'user_id' => '3',
            'hotel_name' => 'jetwing kandy gallery',
            'type' => '5',
            'address' => 'De Soysa Estate Gonawatta Maligathanne Gurudeniya, Haragama',
            'city' => 'Kandy',
            'price' => '99',
            'description' => 'Set on the verdant banks of the Mahaweli River, this premium hotel is 11 km from Kandy Lake, and 12 km from both the Udawatta Kele Sanctuary and the Temple of the Sacred Tooth Relic.


            Upscale rooms have Wi-Fi, flat-screen TVs, minibars, and tea and coffeemaking facilities, as well as balconies with river views. Suites add outdoor hot tubs or separate living rooms with sofas. Room service is available 24/7.
            
            There’s a refined restaurant with a bar, as well as al fresco dining by the outdoor pool. Other amenities include butler service, a spa and parking.
            ',

            'thumbnail' => 'poolside-exterior-view-1076x818.jpg',
    
        
        ]);
        Hotel::create([
            
            'user_id' => '3',
            'hotel_name' => 'Kaminrich Cottage',
            'type' => '5',
            'address' => 'Hotel in Polhena Beach, Matara',
            'city' => 'Matara',
            'price' => '79',
            'description' => 'Situated in Matara, 200 metres from Madiha Beach, Kaminrich Cottage features accommodation with a restaurant, free private parking, an outdoor swimming pool and a shared lounge. Peaceful place, and Full Privacy. Looking to visit again
            ',
            'thumbnail' => '125642164.jpg',
        ]);
        Hotel::create([
            
            'user_id' => '2',
            'hotel_name' => 'The Valampuri',
            'type' => '4',
            'address' => '200 metres from Jaffna Railway Station,Jaffna',
            'city' => 'Jaffna',
            'price' => '59',
            'description' => 'The Valampuri provides accommodation with a restaurant, free private parking, an outdoor swimming pool and a fitness centre.
                     ',
            'thumbnail' => '171034872.jpg',
        ]);
        Hotel::create([
            
            'user_id' => '3',
            'hotel_name' => 'Marino Beach Colombo ',
            'type' => '7',
            'address' => 'Colombo',
            'city' => 'Colombo',
            'price' => '89',
            'description' => 'Marino Beach Colombo has a restaurant, outdoor swimming pool, a fitness centre and bar in Colombo. Value for money. Awesome stay and facilities for the price . Staff is very friendly and accomodating of all requests. Facilities are top notch and the roof top pool offers a splendid view of the ocean
                     ',
            'thumbnail' => '156672332.jpg',
        ]);
        Hotel::create([
            
            'user_id' => '3',
            'hotel_name' => 'Fairway Colombo',
            'type' => '5',
            'address' => 'fort,Colombo',
            'city' => 'Colombo',
            'price' => '85',
            'description' => 'Fairway Colombo is set in Colombo, 700 metres from Khan Clock Tower and 2.4 km from U.S. Embassy. Guests can enjoy the on-site restaurant. Free Wifi is available. Very nice staff, we were upgraded without asking. Very clean and nicely appointed rooms.

            ',
            'thumbnail' => 'fairway-colombo.jpg',
        ]);
        
        Hotel::create([
            'user_id' => '3',
            'hotel_name' => 'Kings Hotel',
            'type' => '5',
            'address' => '1/B, Unique View Road, Nuwara Eliya 22200 Sri Lanka',
            'city' => 'Nuwareliya',
            'price' => '69',
            'description' => 'Kings Court Hotel is an excellent choice for travelers visiting Nuwara Eliya, offering many helpful amenities designed to enhance your stay.

            While staying at Kings Court Hotel, visitors can check out International Buddhist Centre (1.1 mi) and Pedro Tea Factory (2.3 mi), some of Nuwara Eliya top attractions.',
            'thumbnail' => '1657610839.jpg',

        ]);
       

        Vehical::create([
            
            'user_id' => '1',
            'model' => 'Nissan ',
            'driver_name' => 'Sujith',
            'contact' => '0765362534',
            'licence_no' => '145247885',
            'vehical_no' => 'CA-1478',
            'type'=>'Van',
            'city'=>'Sigiriya',
            
            'thumbnail' => 'nissan.jpg',
    
        
        ]);
        Vehical::create([
            
            'user_id' => '1',
            'model' => 'Nissan ',
            'driver_name' => 'Ajith',
            'contact' => '0765362534',
            'licence_no' => '145247885',
            'vehical_no' => 'CA-1474',
            'type'=>'Van',
            'city'=>'kandy',
            
            'thumbnail' => 'baleno.jpg',
    
        
        ]);
        Vehical::create([
            
            'user_id' => '1',
            'model' => 'Toyota ',
            'driver_name' => 'sarath',
            'contact' => '0765362534',
            'licence_no' => '198145247885',
            'vehical_no' => 'CA-1474',
            'type'=>'Van',
            'city'=>'kandy',
            
            'thumbnail' => 'civic.jpg',
    
        
        ]);
        Vehical::create([
            
            'user_id' => '1',
            'model' => 'Nissan ',
            'driver_name' => 'Selva',
            'contact' => '0765362534',
            'licence_no' => '9287647885',
            'vehical_no' => 'CA-1474',
            'type'=>'Van',
            'city'=>'kandy',
            
            'thumbnail' => 'force.jpg',
    
        
        ]);
        Vehical::create([
            
            'user_id' => '1',
            'model' => 'Toyota ',
            'driver_name' => 'John',
            'contact' => '0765362534',
            'licence_no' => '14543247885',
            'vehical_no' => 'CA-1474',
            'type'=>'Van',
            'city'=>'kandy',
            
            'thumbnail' => 'hiace.jpg',
    
        
        ]);
        Vehical::create([
            
            'user_id' => '1',
            'model' => 'Nissan ',
            'driver_name' => 'Thiva',
            'contact' => '0765362534',
            'licence_no' => '145247885',
            'vehical_no' => 'CA-1474',
            'type'=>'Van',
            'city'=>'Sigiriya',
            
            'thumbnail' => 'innova.png',
    
        
        ]);
        Vehical::create([
            
            'user_id' => '1',
            'model' => 'Suzuki ',
            'driver_name' => 'Nisal',
            'contact' => '0765362534',
            'licence_no' => '145247885',
            'vehical_no' => 'CA-1474',
            'type'=>'Car',
            'city'=>'kandy',
            
            'thumbnail' => 'swift.jpg',
    
        
        ]);
        Vehical::create([
            
            'user_id' => '1',
            'model' => 'Toyota ',
            'driver_name' => 'Kumara',
            'contact' => '0765362534',
            'licence_no' => '145247885',
            'vehical_no' => 'CA-1474',
            'type'=>'Van',
            'city'=>'Colombo',
            
            'thumbnail' => 'Toyotajiace.png',
    
        
        ]);

    }
}
