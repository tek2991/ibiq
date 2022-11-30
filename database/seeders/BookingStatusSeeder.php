<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bookingStatuses = \App\Models\Attribute\BookingStatus::defaultBookingStatuses();

        foreach ($bookingStatuses as $bookingStatus) {
            \App\Models\Attribute\BookingStatus::firstOrCreate(['name' => $bookingStatus]);
        }

        $this->command->info('Default Booking Statuses added.');
    }
}
