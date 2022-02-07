<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = About::class;
    public function definition()
    {
        return [
            'title' => "Acerca da PGR",
            'aboute' => ' <p style="text-align: justify;">
A que vai informações da PRG
                                        </p>
            '
        ];
    }
}
