<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\PharmaceuticalProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Boukary',
            'email' => 'hello@boukary.dev',
            'role' => 'admin'
        ]);

        $this->call([
            CategorySeeder::class,
            PharmaceuticalProductSeeder::class,
        ]);
    }
}
