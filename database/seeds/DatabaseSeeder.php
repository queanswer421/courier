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
        // $this->call(UsersTableSeeder::class);
        // $this->call(CourierTableSeeder::class);
        // $this->call(RolesTableSeeder::class);
        // $this->call(ShipmentsTableSeeder::class);
        // $this->call(HistoryTableSeeder::class);

        // Create 10 records of customers
        factory(App\Shipment::class, 10)->create()->each(function ($shipment) {
            // Seed the relation with one address
            $history = factory(App\History::class)->make();
            $shipment->history()->save($history);

        });
    }
}
