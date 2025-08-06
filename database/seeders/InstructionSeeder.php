<?php

namespace Database\Seeders;

use App\Models\Instruction;
use Illuminate\Database\Seeder;

class InstructionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Instruction::factory()
            ->count(5)
            ->create();
    }
}
