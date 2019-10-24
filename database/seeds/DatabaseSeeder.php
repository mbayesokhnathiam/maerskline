<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(LoadingSeeder::class);
        // $this->call(ShippingsTableSeeder::class);
        // $this->call(VesselsSeeder::class);
        $this->call(PortCodesSeeder::class);
    }
}
