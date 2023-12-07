<?php

namespace Database\Seeders;

use App\Models\Comedi02;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Comedi02Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comedi02::factory()->count(700)->create();
    }
}
