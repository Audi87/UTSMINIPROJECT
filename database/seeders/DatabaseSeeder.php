<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\UnitSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Membuat user
        User::factory()->create([
            'name' => 'audi',
            'email' => 'audi@gmail.com',
        ]);

        // Memanggil seeder ProductSeeder
        $this->call(ProductSeeder::class);

        // Memanggil seeder UnitSeeder
        $this->call(UnitSeeder::class);
    }
}

