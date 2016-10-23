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
        $serv = ["Mobiliario", "Entretenimiento", "Comida", "Decoracion"];

        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 4; $i++) {
            \DB::table('servicestypes')->insert([
                'name_type' => $serv[$i-1],
                'image_card_url' => 'img/P0' .  $i . '.png',
                'created_at' => $faker->dateTime
            ]);
        }
    }
}
