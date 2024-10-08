<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->has(Ad::factory()->count(4), 'ads')
            ->count(50)
            ->create();
    }
}
