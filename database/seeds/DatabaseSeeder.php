<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(DisasterSeeder::class);
        $this->call(BarangaySeeder::class);
        $this->call(EvacSeeder::class);
    }
}
