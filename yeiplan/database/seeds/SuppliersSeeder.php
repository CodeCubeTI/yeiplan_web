<?php

use Illuminate\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $j = 0;
        for ($i = 1; $i <= 5; $i++) {
            \DB::table('suppliers')->insert([
                'user_id' => $i,
                'company_name' => $faker->company,
                'representative_name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'cell_phone' => $faker->phoneNumber,
                'address_id' => $i,
                'email' => $faker->companyEmail,
                'website' => $faker->company,
                'facebook' => $faker->company,
                'twitter' => $faker->company,
                'created_at' => $faker->date('Y-m-d')
            ]);
        }
    }
}
