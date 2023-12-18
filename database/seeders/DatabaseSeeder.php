<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Comedi01;
use App\Models\Comedi10;
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
            'name' => 'Alexis Sistemas',
            'email' => 'alexis.golomix@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Golomix Sistemas',
            'email' => 'sistemas.golomix@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        for ($i=0; $i < 10; $i++) {
            $this->call([
                Comedi10Seeder::class,
            ]);
        }

        for ($i=0; $i < 70; $i++) {
            $this->call([
                Comedi01Seeder::class,
            ]);
        }
    }
}
