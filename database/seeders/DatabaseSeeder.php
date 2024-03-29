<?php

namespace Database\Seeders;
use \App\Models\Producto;
use \App\Models\Rol;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Rol::factory(3)->create();
        \App\Models\User::factory(5)->create();
        Producto::factory(20)->create();
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
