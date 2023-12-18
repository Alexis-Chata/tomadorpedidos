<?php

namespace Database\Seeders;

use App\Models\Comedi10;
use App\Models\Comedi31;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Comedi10Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comedi10::factory()->has(
            Comedi31::factory()->count(15)->hasComedi07()
            )->create();
    }
}
