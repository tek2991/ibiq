<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllotmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allotmentStatuses = \App\Models\Attribute\AllotmentStatus::defaultAllotmentStatuses();

        foreach ($allotmentStatuses as $allotmentStatus) {
            \App\Models\Attribute\AllotmentStatus::firstOrCreate(['name' => $allotmentStatus]);
        }

        $this->command->info('Default Allotment Statuses added.');
    }
}
