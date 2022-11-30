<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roomTypes = \App\Models\Attribute\RoomType::defaultRoomTypes();

        foreach ($roomTypes as $roomType) {
            \App\Models\Attribute\RoomType::firstOrCreate(['name' => $roomType]);
        }

        $this->command->info('Default Room Types added.');
    }
}
