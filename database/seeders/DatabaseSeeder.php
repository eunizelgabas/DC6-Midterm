<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Sales;
use App\Models\SoldItem;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password123')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test Supervisor',
            'email' => 'supervisor@example.com',
            'password' => bcrypt('password123')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test Cashier',
            'email' => 'cashier@example.com',
            'password' => bcrypt('password123')
        ]);

        $this->call(ProductSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(RolesSeeder::class);

        Sales::factory(100)->create();
        SoldItem::factory(300)->create();
    }
}
