<?php

namespace Database\Seeders;

use App\Models\Comedi01;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Comedi01Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comedi01::factory()->count(700)->create();
    }
}
