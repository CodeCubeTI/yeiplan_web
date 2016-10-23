<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('UsersSeeder');
        $this->call('ServicesTypesSeeder');
        $this->call('PackagesTypesSeeder');
        $this->call('AddressesSeeder');
        $this->call('SuppliersSeeder');
        $this->call('ServicesSeeder');
        $this->call('PackagesSeeder');
        $this->call('ServicesPackagesSeeder');
        $this->call('CustomersSeeder');
        $this->call('ReservationsSeeder');
        $this->call('ServicesReservationsSeeder');
        $this->call('BillingsSeeder');
    }
}
