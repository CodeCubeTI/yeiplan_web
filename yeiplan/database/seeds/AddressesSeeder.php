<?php

use Illuminate\Database\Seeder;

class AddressesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 30; $i++) {
            \DB::table('addresses')->insert([
                'street' => $faker->streetName,
                'noInt' => $faker->numerify('##'),
                'noExt' => $faker->numerify('##'),
                'zipCode' => $faker->numerify('#####'),
                'state_id' => $faker->numberBetween(1, 32),
                'city_id' => $faker->numberBetween(1, 2492),
                'created_at' => $faker->date('Y-m-d')
            ]);
        }
    }
}
