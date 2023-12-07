<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comedilp>
 */
class ComedilpFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = now()->subDays(rand(1, 7));
        $cequiv = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
        return [
            'ccia' => '11',
            'cdivi' => '11',
            'ccendis' => '07',
            'clistpr' => $this->faker->randomElement(['001', '002']),
            'ccodart' => str_pad($cequiv, 10, '0', STR_PAD_LEFT),
            'qprecio' => rand(1, 999),
            'cuser' => 'SISTEMA1',
            'cidpr' => 'FMUEV01    I',
            'fupgr' => $date,
            'tupgr' => $date->format('H:i:s'),
        ];
    }
}
