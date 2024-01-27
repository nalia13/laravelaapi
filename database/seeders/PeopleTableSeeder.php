<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;
use Faker\Factory as Faker;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 200) as $index) {
            People::create([
                'first_name'    => $faker->firstName,
                'last_name'     => $faker->lastName,
                'phone_number'  => $faker->phoneNumber,
                'street'        => $faker->streetAddress,
                'city_country'  => $faker->city . ', ' . $faker->country,
            ]);
        }
    }

}
