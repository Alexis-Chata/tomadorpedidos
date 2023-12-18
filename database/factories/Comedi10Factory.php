<?php

namespace Database\Factories;

use App\Models\Comedi10;
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
        do {
            $cven = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
        } while (Comedi10::where('cven', $cven)->exists());

        return [
            'ccia' => '11',
            'cdivi' => '11',
            'ccendis' => '07',
            'cven' => $cven,
            'tven' => $this->faker->name(),
            'passven' => '123456',
            'userrel' => 'SICSOFT',
            'nfon' => '999777999',
            'clin' => '03',
            'tdesclin'=> 'descripción línea preventista',
            'ccargo' => '1',
            'tdescarg' => 'Prevendedor',
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
