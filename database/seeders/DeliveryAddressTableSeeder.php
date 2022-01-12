<?php

namespace Database\Seeders;

use App\Models\DeliveryAddress;
use Illuminate\Database\Seeder;

class DeliveryAddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deliveryRocords = [
            [
                'id' => 1,
                'user_id' => 42,
                'name' => 'Roshan',
                'email' => 'mdroshannafiz@gmail.com',
                'address' => 'Tanore',
                'country' => 'Bangladesh',
                'state' => 'Dhaka',
                'city' => 'Dhaka',
                'pincode' => '1010',
                'mobile' => '01643287044',
                'status' => '1',
            ],
            [
                'id' => 2,
                'user_id' => 42,
                'name' => 'Roshan',
                'email' => 'mdroshannafiz@gmail.com',
                'address' => 'Mohonpur',
                'country' => 'Bangladesh',
                'state' => 'Rajshahi',
                'city' => 'Rajshahi',
                'pincode' => '6060',
                'mobile' => '01643287044',
                'status' => '1',
            ]
        ];
        DeliveryAddress::insert($deliveryRocords);
    }
}
