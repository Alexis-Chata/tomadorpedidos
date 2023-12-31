<?php

namespace Database\Factories;

use App\Models\Comedi01;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comedi01>
 */
class Comedi01Factory extends Factory
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
            $cequiv = str_pad(rand(1, 999), 3, '0', STR_PAD_LEFT);
            $ccodart = str_pad($cequiv, 10, '0', STR_PAD_LEFT);
        } while (Comedi01::where('cequiv', $cequiv)->exists());

        return [
            'ccia' => '11',
            'cdivi' => '11',
            'ccendis' => '07',
            'cequiv' => $cequiv,
            'ccodart' => $ccodart,
            'tcor' => Str::limit($this->faker->sentence(4), 40, ''),
            'qfaccon' => rand(1, 30),
            'flagcre' => $this->faker->randomElement([' ', '1']),
            'cuni' => '09',
            'cpreuni' => '00',
            'qpisc' => '0.00',
            'qpigv' => '18.00',
            'cuser' => 'SISTEMA1',
            'cidpr' => 'FMUEV01    I',
            'fupgr' => $date,
            'tupgr' => $date->format('H:i:s'),
        ];
    }
}
