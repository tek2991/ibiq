<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = \App\Models\Attribute\Division::defaultDivisions();

        foreach ($data as $circle => $divisions) {
            foreach ($divisions as $division) {
                \App\Models\Attribute\Division::firstOrCreate(['name' => $division, 'circle' => $circle]);
            }
        }

        $this->command->info('Default Divisions added.');
    }
}
