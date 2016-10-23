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
        for ($i = 1; $i <= 20; $i++) {
            \DB::table('servicestypes')->insert([
                'service_name' => $i,
                'observations' => $faker->text(),
                'created_at' => $faker->dateTime
            ]);
        }
    }
}
