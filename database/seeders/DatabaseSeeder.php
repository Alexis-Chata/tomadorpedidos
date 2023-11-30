<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Golomix Sistemas',
            'email' => 'sistemas.golomix@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Alexis Sistemas',
            'email' => 'alexis.golomix@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
        $this->call([
            Comedi10Seeder::class,
            Comedi01Seeder::class,
        ]);
    }
}
