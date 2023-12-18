<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comedi07>
 */
class Comedi07Factory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = now()->subYears(rand(20, 35));
        $cliente = Str::limit($this->faker->name(), 40, '');
        return [
            "cter" => "00",
            "creg" => "00",
            "ccia" => "07",
            "cdivi" => "00",
            "ccendis" => "00",
            "ccli" => '070' . str_pad(rand(1, 99999), 5, '0', STR_PAD_LEFT),
            "tnomrep" => $cliente,
            "tdir" => Str::limit($this->faker->address(), 40, ''),
            "tcli" => $cliente,
            "ntel" => null,
            "le" => str_pad(rand(1, 99999999), 8, '0', STR_PAD_LEFT),
            "ctipneg" => "013",
            "tdestneg" => "descripción tipo de negocio.",
            "ctipcli" => "2",
            "tdestcli" => "exclusivo",
            "ctipseg" => "021",
            "tdestseg" => "descripción segmento de mercado.",
            "flagact" => "1",
            "tdesescl" => "activo",
            "cruc" => null,
            "fnac" => $date,
            "crub" => "49",
            "tdesrubr" => "descripción rubro de negocio.",
            "crutd" => "97",
            "tdesrutd" => "descripción tipo agente Sunat.",
            "ctipco" => "83",
            "tdestico" => Str::limit("descripción Tipo documento Contribuyente.", 40, ""),
            "fligv" => "2",
            "tdesfigv" => "no exonerado de IGV.",
            "tdocid" => "01",
            "tdestdoc" => "persona natural",
            "clistpr" => "001",
            "tdeslpre" => "precios bodega",
            "cuser" => 'SISTEMA1',
            "cidpr" => 'FMUEV01    I',
            "fupgr" => $date,
            "tupgr" => $date->format('H:i:s'),
        ];
    }
}
