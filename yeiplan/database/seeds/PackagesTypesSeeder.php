<?php

use Illuminate\Database\Seeder;

class PackagesTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
            \DB::table('packagestypes')->insert([
                'name_type' => "Express",
                'image_card_url' => 'img/P05.png',
                'created_at' => $faker->dateTime
            ]);

    }
}
