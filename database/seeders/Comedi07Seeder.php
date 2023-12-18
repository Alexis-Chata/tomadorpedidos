<?php

namespace Database\Seeders;

use App\Models\Comedi07;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Comedi07Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comedi07::factory()->create();
    }
}
