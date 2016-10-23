<?php

use Illuminate\Database\Seeder;

class BillingsSeeder extends Seeder
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
            \DB::table('billings')->insert([
                'customer_id' => $i,
                'number_card' => $faker->creditCardNumber,
                'expire_month' => $faker->month,
                'expire_year' => $faker->year,
                'security_code' => $faker->password,
                'created_at' => $faker->date('Y-m-d')
            ]);
        }
    }
}
