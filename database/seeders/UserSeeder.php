<?php

namespace Database\Seeders;

use App\Models\Sale;
use App\Models\Seller;
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
        // User::factory()->count(100)
        //     ->has(Seller::factory()->has(Sale::factory()->count(30), 'sales'))
        //     ->create();


        User::factory()
            ->count(100)
            ->has(Seller::factory()->hasSales(30))
            ->create();
    }
}
