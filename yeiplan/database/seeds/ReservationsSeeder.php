<?php

use Illuminate\Database\Seeder;

class ReservationsSeeder extends Seeder
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
            \DB::table('reservations')->insert([
                'date' => $faker->date('Y-m-d'),
                'address_id' => $i,
                'paid' => $faker->numerify('#####'),
                'created_at' => $faker->date('Y-m-d')
            ]);
        }
    }
}
