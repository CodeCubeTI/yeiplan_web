<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
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
            \DB::table('users')->insert([
                'name' => $faker->userName,
                'email' => $faker->email,
                'password' => encrypt('123456'),
                'created_at' => $faker->date('Y-m-d')
            ]);
        }
    }
}
