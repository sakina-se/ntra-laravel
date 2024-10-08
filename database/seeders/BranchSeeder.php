<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::factory()
            ->has(Ad::factory()->count(20), 'ads')
            ->count(5)
            ->create();
    }
}
