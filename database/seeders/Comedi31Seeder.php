<?php

namespace Database\Seeders;

use App\Models\Comedi31;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Comedi31Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comedi31::factory()->count(10)->create();
    }
}
