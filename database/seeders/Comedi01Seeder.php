<?php

namespace Database\Seeders;

use App\Models\Comedi01;
use App\Models\Comedi02;
use App\Models\Comedilp;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Comedi01Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comedi01::factory()->count(700)->hasComedi02()->has(
            Comedilp::factory()->count(2)->sequence(
                ['clistpr' => '001'],
                ['clistpr' => '002'],
            )
        )->create();
    }
}
