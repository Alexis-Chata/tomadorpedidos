<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comedi26>
 */
class Comedi26Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = now()->subDays(rand(1, 7));
        $cprom = str_pad(rand(1, 99), 3, '0', STR_PAD_LEFT);

        return [
            'ccia' => '11',
            'cdivi' => '11',
            'ccendis' => '07',
            'cprom' => $cprom,
            'tprom' => Str::limit($this->faker->sentence(4), 50, ''),
            'clin' => '03',
            'tdesclin' => 'descripción línea preventista.',
            'qprecio' => '0.01',
            'qpordes' => '100.00',
            'finipro' => $date,
            'ffinpro' => $date->addDays(rand(7, 10)),
            'ctipneg' => null,
            'tdestneg' => 'descripción tipo de negocio.',
            'ctipro' => '02',
            'tdestpro' => 'bonificación horizontal.',
            'ccodart1' => str_pad(rand(1, 999), 10, '0', STR_PAD_LEFT),
            'qprod1' => '1',
            'cescom' => '2',
            'tdesccom' => 'no comisionable.',
            'ccodart2' => str_pad(rand(1, 999), 10, '0', STR_PAD_LEFT),
            'qprod2' => '1',
            'cuser' => 'SICSOFT',
            'cidpr' => 'FGRMODIF   M',
            'fupgr' => $date,
            'tupgr' => $date->format('H:i:s'),
        ];
    }
}
