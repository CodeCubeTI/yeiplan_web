<?php

use Illuminate\Database\Seeder;

class ServicesPackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            \DB::table('servicespackages')->insert([
                'service_id' => $faker->numberBetween(1, 15),
                'package_id' => $faker->numberBetween(1, 15),
                'quantity' => $faker->numerify('##'),
                'created_at' => $faker->dateTime
            ]);
        }
    }
}
