<?php

namespace Database\Seeders;

use App\Models\Conference\ThematicArea;
use Illuminate\Database\Seeder;

class ThematicAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ThematicArea::create(['name' => 'None']);
        ThematicArea::create(['name' => 'Policies, strategies, leadership']);
        ThematicArea::create(['name' => 'Research, analysis, forecasts']);
        ThematicArea::create(['name' => 'Operational compatibility']);
    }
}
