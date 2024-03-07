<?php

namespace Database\Seeders;

use App\Models\Conference\ParticipantType;
use Illuminate\Database\Seeder;

class ParticipantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ParticipantType::create(['name' => 'Author/co-author']);
        ParticipantType::create(['name' => 'Participant without a presentation']);
        ParticipantType::create(['name' => 'Trainee']);
    }
}
