<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
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
            \DB::table('services')->insert([
                'service_name' => $faker->name,
                'stock' => $faker->numerify('###'),
                'price' => $faker->randomNumber(),
                'image_service_url' => 'http://lorempixel.com/400/200/city/0/',
                'description_short' => $faker->realText(100),
                'description' => $faker->realText(250),
                'servicestype_id' => $faker->numberBetween(1, 4),
                'supplier_id' => $faker->numberBetween(1, 5),
                'created_at' => $faker->date('Y-m-d')
            ]);
        }
    }
}
