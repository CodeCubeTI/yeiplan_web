<?php

use Illuminate\Database\Seeder;

class ServicesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 5; $i++) {
            \DB::table('servicestypes')->insert([
                'name_type' => $faker->userName,
                'image_card_url' => 'http://lorempixel.com/400/200/abstract/0/',
                'created_at' => $faker->dateTime
            ]);
        }
    }
}
