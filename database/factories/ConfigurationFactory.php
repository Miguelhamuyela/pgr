<?php

namespace Database\Factories;

use App\Models\Configuration;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ConfigurationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Configuration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'facebook' => "Aqui vai o link do facebook",
            'youtube' => "Aqui vai o link do Youtube",
            'instagram' => "Aqui vai o link do instagram",
            'email' => "procuradoriageraldarepublica@pgr.ao",
            'twitter' => "Aqui vai o link do instagram twitter",
            'telefone' => "+244 222 333 172 / +244 222 333 170",
            'adress' => "Rua 17 de Setembro, Palácio da Justiça, 4°, 5° e 6º andares."
        ];
    }
}
