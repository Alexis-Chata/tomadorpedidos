<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comedi22>
 */
class Comedi22Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = now();

        return [
            'ccia' => '11',
            'ctipcorr' => '088',
            'tdescorr' => '088',
            'ndoc' => '0',
            'cuser' => 'Golomix',
            'cidpr' => 'Golomix',
            'fupgr' => $date,
            'tupgr' => $date->format('H:i:s'),
        ];
    }
}
