<?php

namespace Database\Factories;

use App\Models\Senra;
use Illuminate\Database\Eloquent\Factories\Factory;

class SenraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Senra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'initials' => "SENRA",
            'title' => "Serviço Nacional de Recuperação de Activos",
            'description' => "Serviço Nacional de Recuperação de Activos
            A Lei 15/18, de 26 de Dezembro, Lei sobre o Repatriamento Coercivo e a Perda Alargada de Bens instituiu o Serviço Nacional de Recuperação de Activos (SENRA) atribuindo-lhe como principal missão no art.13.º proceder à localização, à identificação e à apreensão dos bens, activos financeiros e não financeiros ou produtos relacionados com o crime, quer esses bens estejam em Angola quer estejam no exterior do país. Atribuiu-lhe ainda competência para assegurar a cooperação internacional entre as suas congéneres, bem como exercer as demais atribuições conferidas por lei e neste particular ressaltamos a instauração de qualquer acção cível, administrativa ou fiscal com o intuito de se recuperar os activos retirados ilicitamente do Estado (de acordo com o n.º1 do art.13.º do Decreto Presidencial n.º 289/18, de 30 de Novembro, art.26º da Constituição da República conjugado com os artigos 35º , 43.º e 53.º da Convenção das Nações Unidas contra a Corrupção aprovada e ratificada pelo Estado Angolano).
            
            Por isso, o Serviço Nacional de Recuperação de Activos (SENRA) no âmbito do processo crime que corre nos órgãos de investigação criminal (DNIAP, PGR/SIC), abre uma investigação patrimonial e, portanto, um apenso, com vista a realizar uma investigação patrimonial visando a identificação e localização dos activos susceptíveis de serem objecto de uma decisão de perda e a adoptação das medidas necessárias à sua recuperação. O SENRA auxilia quer a DNIAP, quer os outros órgãos de investigação criminal existentes na Procuradoria-Geral da República, realizando no âmbito dos processos-crime em curso a investigação patrimonial e financeira tomando todas medidas necessárias (envio de cartas rogatórias a suas congéneres, ordenar apreensões e requerer arrestos) para garantir que os activos não se dissipem. Portanto, há uma necessidade imperiosa de coordenação de ambas as investigações e intervenção simultânea. Claro que o processo principal é o processo crime propriamente dito, onde quer que corra. O processo do SENRA é um apenso que integra, portanto, o processo principal do qual ele é parte."
        ];
    }
}
