<?php

use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 6; $i <= 15; $i++) {
            \DB::table('customers')->insert([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'phone' => $faker->phoneNumber,
                'cell_phone' => $faker->phoneNumber,
                'address_id' => $i,
                'image_profile_url' => 'http://lorempixel.com/100/100/people/0/',
                'created_at' => $faker->date('Y-m-d')
            ]);
        }
    }
}
