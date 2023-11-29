<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comedi10>
 */
class Comedi10Factory extends Factory
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
            'cven' => str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT),
            'tven' => $this->faker->name(),
            'password' => '123456',
            'user' => 'SICSOFT',
            'nfon' => '999777999',
            'clin' => '03',
            'ccargo' => '1',
            'csup' => '088',
            'csisven' => '100',
            'cind' => ' ',
            'cjefv' => '089',
            'cadm' => '090',
            'cuser' => 'SICSOFT',
            'cidpr' => 'FGRMODIF   M',
            'fupgr' => $date,
            'tupgr' => $date->format('H:i:s'),
        ];
    }
}
