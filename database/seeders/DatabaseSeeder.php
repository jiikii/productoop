<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\staff;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $users = User::factory(1)->create();
        $product = Product::factory(10)->create();
        
        foreach ($users as $user) {
            staff::factory()->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
