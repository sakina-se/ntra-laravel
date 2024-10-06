<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Branch;
use App\Models\Status;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Status::factory()->create(['name' => 'active']);
        Status::factory()->create(['name' => 'inactive']);

        Branch::factory(5)->create();

        User::factory(50)->create()->each(function ($user) {
            Ad::factory(random_int(0, 7))->create(['user_id' => $user->id]);

            $ads = Ad::inRandomOrder()->take(random_int(0, 10))->pluck('id');
            $user->bookmarks()->attach($ads);
        });

        Branch::all()->each(function ($branch) {
            Ad::factory(random_int(0, 20))->create(['branch_id' => $branch->id]);
        });
    }
}
