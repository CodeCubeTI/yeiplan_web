<?php

use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 15; $i++) {
            \DB::table('packages')->insert([
                'package_name' => $faker->name,
                'price' => $faker->randomNumber(),
                'image_package_url' => 'http://lorempixel.com/400/200/abstract/0/',
                'description_short' => $faker->realText(100),
                'description' => $faker->realText(300),
                'packagestype_id' => 1,
                'created_at' => $faker->date('Y-m-d')
            ]);
        }
    }
}
