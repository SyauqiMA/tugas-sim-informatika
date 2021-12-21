<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        // User
        \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'Syauqi M Abrar',
            'username' => 'syauqiabrar',
            'birthday' => '2001-08-05',
            'gender' => 'L',
            'phone' => '085252225222',
            'email' => 'syauqiabrar@gmail.com',
            'role' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);

        // ProductCategory
        ProductCategory::create([
            'name' => 'sembako'
        ]);
        ProductCategory::create([
            'name' => 'alat dapur'
        ]);
        ProductCategory::create([
            'name' => 'snack'
        ]);
        
        // Product
        \App\Models\Product::factory(20)->create();

        // // ProductGallery
        \App\Models\ProductGallery::factory(60)->create();

        // // Transaction
        \App\Models\Transaction::factory(40)->create();

        // // Transaction Details
        // \App\Models\TransactionDetail::factory(200)->create();

        // // Shipping Info
        \App\Models\ShippingInfo::factory(10)
            ->sequence(fn ($seq) => ['user_id' => $seq->index+1])
            ->create();
    }
}
