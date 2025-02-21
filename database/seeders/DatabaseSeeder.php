<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Pet;
use App\Models\Product;
use App\Models\Sale;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Pet::factory(10)->create();
        Product::factory(50)->create();
        // $sales = Sale::factory(10)->create();

        // $sale = $sales[7];

        // for($i = 0; $i < 5; $i++) {
        //     $randomProduct = $products->random();
        //     $sale->products()->attach($randomProduct, [
        //         'quantity' => rand(1, 10),
        //     ]);
        // }

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
