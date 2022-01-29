<?php

namespace Database\Factories;

use App\Models\Dnpcc;
use Illuminate\Database\Eloquent\Factories\Factory;

class DnpccFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dnpcc::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'initials' => "DNPCC",
            'title' => "Direcção Nacional do Plano de Combate a Corrupção",
            'description' => " <p>
            Competências
        </p>
        <p>
            a) Realizar acções de reforço, da moralidade e da protecção do interesse público;
        </p>
        <p>
        b) Desenvolver acções de prevenção e combate aos actos de corrupção ou de fraude com medidas eficazes de luta contra esses fenómenos;
        </p>
        <p>
        c) Promover a transparência da gestão pública, realizando acções de fiscalização e controlo de eventuais actos de improbidade pública, passíveis de prejudicar o património público;
        </p>
        <p>
        d) Prevenir acções ou omissões, negligentes ou culposas, passíveis de provocar perdas patrimoniais, desvio, apropriação, esbanjamento ou delapidação dos bens públicos;
        </p>
        <p>
        e) Investigar, através de inquéritos, actos de corrupção ou  de fraude praticados por agentes públicos, visando confirmar actos de improbidade pública;
        </p>
        <p>
        f) Cooperar estreitamente com a Direcção Nacional de Investigação e Acção Penal, municiando-lhe com todo o tipo de informações, registos de sons e imagens recolhidos sobre eventuais práticas criminosas;
        </p>
        <p>
        g) Cooperar com a Direcção Nacional dos Registos e Informações do Comando Geral da Polícia Nacional e com os órgãos afins de polícia criminal para a partilha e troca de dados, informações e cadastros;
        </p>
        <p>
        h) Dinamizar os processos de acompanhamento, controlo e auditoria;
        </p>
        <p>
        i) Colaborar com na tarefa de divulgação das leis e propaganda jurídica;
        </p>
        <p>
        j) Colaborar nas tarefas de implementação de medidas de natureza preventiva e repressiva de combate ao branqueamento de vantagens de proveniência ilícita e ao financiamento do terrorismo;
        </p>
        <p>
        k) Prestar assessoria técnica e jurídica aos órgãos com atribuições de controlo e defesa de património público;
        </p>
        <p>
        l) Solicitar, quando necessário, relatórios de auditorias dos movimentos financeiros que envolvam despesas suportadas pelo Estado;
        </p>
        <p>
        m) Colaborar com outras instituições que concorram para a prevenção e combate da criminalidade;
        </p>
        <p>
        n) Realizar outras atividades determinadas superiormente.
        </p>"
        ];
    }
}
