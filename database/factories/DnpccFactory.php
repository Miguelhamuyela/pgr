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
            'description' => "Competências

            a) Realizar acções de reforço, da moralidade e da protecção do interesse público;
            
            b) Desenvolver acções de prevenção e combate aos actos de corrupção ou de fraude com medidas eficazes de luta contra esses fenómenos;
            
            c) Promover a transparência da gestão pública, realizando acções de fiscalização e controlo de eventuais actos de improbidade pública, passíveis de prejudicar o património público;
            
            d) Prevenir acções ou omissões, negligentes ou culposas, passíveis de provocar perdas patrimoniais, desvio, apropriação, esbanjamento ou delapidação dos bens públicos;
            
            e) Investigar, através de inquéritos, actos de corrupção ou de fraude praticados por agentes públicos, visando confirmar actos de improbidade pública;
            
            f) Cooperar estreitamente com a Direcção Nacional de Investigação e Acção Penal, municiando-lhe com todo o tipo de informações, registos de sons e imagens recolhidos sobre eventuais práticas criminosas;
            
            g) Cooperar com a Direcção Nacional dos Registos e Informações do Comando Geral da Polícia Nacional e com os órgãos afins de polícia criminal para a partilha e troca de dados, informações e cadastros;
            
            h) Dinamizar os processos de acompanhamento, controlo e auditoria;
            
            i) Colaborar com na tarefa de divulgação das leis e propaganda jurídica;
            
            j) Colaborar nas tarefas de implementação de medidas de natureza preventiva e repressiva de combate ao branqueamento de vantagens de proveniência ilícita e ao financiamento do terrorismo;
            
            k) Prestar assessoria técnica e jurídica aos órgãos com atribuições de controlo e defesa de património público;
            
            l) Solicitar, quando necessário, relatórios de auditorias dos movimentos financeiros que envolvam despesas suportadas pelo Estado;
            
            m) Colaborar com outras instituições que concorram para a prevenção e combate da criminalidade;
            
            n) Realizar outras atividades determinadas superiormente."
        ];
    }
}
