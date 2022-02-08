<?php

namespace Database\Factories;

use App\Models\AttorneyGeneral;
use Illuminate\Database\Eloquent\Factories\Factory;

class AttorneyGeneralFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = AttorneyGeneral::class;
    public function definition()
    {
        return [
            'description' => ' <p style="text-align: justify;">
            Em Democracia, as instituições públicas exercem as suas funções norteadas pela
            prossecução do interesse público, pela transparência e pela prestação de contas
            à
            sociedade do cumprimento das suas atribuições constitucionais e legais, na
            medida em
            que é em nome e em prol dos cidadãos que se estruturam e organizam os poderes
            públicos. <br><br>
            A Procuradoria-Geral da República, o fiscal mor da legalidade democrática,
            obriga-se à
            criação de canais de comunicação e de interacção com os cidadãos, de modo a
            permitir
            o escrutínio da sua acção e a obter dos destinatários finais do seu papel social
            o retorno
            necessário ao aprimoramento e melhoria dos seus procedimentos. <br><br>
            Nesta era digital, a inauguração do presente portal da Procuradoria-Geral da
            República
            visa impulsionar e dinamizar o fornecimento de informações sobre o funcionamento
            desta Instituição, a sua composição em matéria de magistrados do Ministério
            Público,
            técnicos de justiça e outros servidores, bem como a divulgação de toda a
            actividade
            quotidiana com valor noticioso ou de interesse público. <br><br>
            Um recurso extremamente útil e de reforço ao exercício da cidadania é o espaço
            para a
            apresentação de denúncias públicas, cuja confidencialidade a anonimização dos
            denunciantes é garantida pelo sistema informático e por técnicos especializados
            da
            Procuradoria-Geral da República, permitindo ainda que o interessado faça o
            acompanhamento do tratamento dado à sua denúncia por via do portal. <br><br>
            Eis mais um passo no sentido da promoção do exercício da cidadania plena e na
            optimização das iniciativas comunicacionais da Procuradoria-Geral da República.
                                        </p>
            '
        ];
    }
}
