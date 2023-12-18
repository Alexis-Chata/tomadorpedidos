<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comedi31>
 */
class Comedi31Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = now()->subDays(rand(1, 7));
        return [
            'ccia' => '11',
            'cdivi' => '11',
            'ccendis' => '07',
            'ccli' => '070' . str_pad(rand(1, 99999), 5, '0', STR_PAD_LEFT),
            'crut' => str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT),
            'nsecprev' => str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT),
            'cven' => str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT),
            'cdiavis' => rand(1, 7),
            'ctipmod' => '00037',
            'tdestmod' => 'Descripción tipo de módulo',
            'cmod' => '00037',
            'tdesmod' => 'Descripción módulo',
            'nsecmod' => '00037',
            'ctipfv' => rand(1, 7),
            'qimpvta' => number_format(rand(1, 9999), 2, '.', ''),
            'femi' => $date,
            'cmrp' => '00',
            'cuser' => 'SICSOFT',
            'cidpr' => 'BATCH',
            'fupgr' => $date,
            'tupgr' => $date->format('H:i:s'),
        ];
    }
}
