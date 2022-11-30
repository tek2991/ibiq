<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            RolePermissionSeeder::class,
            EstablishmentTypeSeeder::class,
            RoomTypeSeeder::class,
            AllotmentStatusSeeder::class,
            BookingStatusSeeder::class,
            DivisionSeeder::class,
        ]);
    }
}
