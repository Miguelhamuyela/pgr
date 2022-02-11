<?php

namespace Database\Factories;

use App\Models\Dniap;
use Illuminate\Database\Eloquent\Factories\Factory;

class DniapFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dniap::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'initials' => "DNIAP",
            'title' => "Direcção Nacional de Investigação e Acção Penal",
            'description' => "<p>
            A Direcção Nacional de Investigação e Acção Penal (DNIAP) é um órgão da Procuradoria-Geral da República, criado à luz da lei n.º 22/12, de 14 de Agosto, em substituição do Departamento de Investigação e Instrução Criminal da Procuradoria-Geral da República – DIIC/PGR. </p>
        <p>
            Trata-se de uma Direcção de âmbito Nacional com competência para dirigir, investigar, instruir, bem como exercer a acção penal nos processos criminais, em que sejam arguidos Magistrados do Ministério Público, Magistrados Judiciais, Deputados à Assembleia Nacional, assim como entidades de nomeação presidencial. </p>
        <p>
            Tem ainda competência para instruir processos-crime de manifesta gravidade e especial complexidade, quando se justifique uma direcção concentrada da investigação e processos que o Procurador-Geral da República determinar.
        </p>
        <p>
            Na sua estrutura orgânica, a DNIAP comporta três Departamentos, designadamente: o Departamento de Investigação Criminal, Departamento de Instrução Processual e Departamento de Informação, Registos e Cadastro.
        </p>
        <p>
            É chefiada por um Sub-Procurador-Geral da República, que dirige e fiscaliza os actos processuais aí praticados, tem ao seu serviço doze (12) Procuradores, seis (6) Investigadores e trinta e nove (39) Técnicos de Justiça.
        </p>
        <p>
            No exercício da sua actividade e sempre que se reporta imprescindível, a DNIAP requisita peritos das mais variadas áreas, segundo o caso. concreto.
        </p>"
        ];
    }
}
