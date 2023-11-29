<?php

namespace Database\Seeders;

use App\Models\Comedi10;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Comedi10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comedi10::factory()->count(10)->hasComedi31s(10)->create();
    }
}
