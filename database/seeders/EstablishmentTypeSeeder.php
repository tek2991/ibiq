<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstablishmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $establishmentTypes = \App\Models\Attribute\EstablishmentType::defaultEstablishmentTypes();

        foreach ($establishmentTypes as $establishmentType) {
            \App\Models\Attribute\EstablishmentType::firstOrCreate(['name' => $establishmentType]);
        }

        $this->command->info('Default Establishment Types added.');
    }
}
