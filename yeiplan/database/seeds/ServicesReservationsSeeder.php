<?php

use Illuminate\Database\Seeder;

class ServicesReservationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 20; $i <= 30; $i++) {
            \DB::table('servicesreservations')->insert([
                'service_id' => $faker->numberBetween(1, 10),
                'reservation_id' => $faker->numberBetween(1, 5),
                'quantity' => $faker->numerify('##'),
                'subtotal' => $faker->numerify('#####'),
                'created_at' => $faker->date('Y-m-d')
            ]);
        }
    }
}
