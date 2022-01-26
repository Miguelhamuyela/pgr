<?php

function getSubProcuradorById($sub_id)
{

    $procuradores = (object)[
        [
            'id' => 1,
            'nome' => "Carla Patrícia Pelinganga B. A M. Correia",
            'provincia' => "Bengo",
            'photo' => 'CarlaBengo.jpg'
        ],
        [
            'id' => 2,
            'nome' => "Carlos Manuel dos  Santo",
            'provincia' => "Benguela",
            'photo' => 'CarlosBenguela.jpg'
        ],
        [
            'id' => 3,
            'nome' => "Jaime Inácio Sebastião Prata",
            'provincia' => "Bié",
            'photo' => 'JaimeBie.jpg'
        ],
        [
            'id' => 4,
            'nome' => "Miguel Janota",
            'provincia' => "Cabinda",
            'photo' => 'MiguelCabinda.jpg'
        ],
        [
            'id' => 5,
            'nome' => "Nilton Eliazer Muaca",
            'provincia' => "Cuando-Cubango",
            'photo' => 'NiltonCuandoCubango.jpg'
        ],
        [
            'id' => 6,
            'nome' => "Maria Joaquina Matias",
            'provincia' =>  "Cuanza Norte",
            'photo' => 'MariaCuanzaNorte.jpg'
        ],
        [
            'id' => 7,
            'nome' => "Simão João Cafala",
            'provincia' => "Cuanza Sul",
            'photo' => 'SimaoCuanzaSul.jpg'
        ],
        [
            'id' => 8,
            'nome' => "Américo Rodrigues Francisco Cassoma",
            'provincia' => "Cunene",
            'photo' => 'AmericoCunene.jpg'
        ],
        [
            'id' => 9,
            'nome' => "José Maria Gomes da Silva Gustavo",
            'provincia' => "Huambo",
            'photo' => 'JoseHuambo.jpg'
        ],
        [
            'id' => 10,
            'nome' => "Gabriel Figueiredo Satumbo Custódio",
            'provincia' => "Huíla",
            'photo' => 'GabrielHuila.jpg'
        ],
        [
            'id' => 11,
            'nome' => "Maria Eugénia dos Santos",
            'provincia' => "Luanda",
            'photo' => 'MariaLuanda.jpg'
        ],
        [
            'id' => 12,
            'nome' => "António Domingos Espanhol",
            'provincia' => "Lunda Norte",
            'photo' => 'AntonioLundaNorte.jpg'
        ],
        [
            'id' => 13,
            'nome' => "Liliana Pascoal Vieira Dias Camuamba",
            'provincia' => "Lunda Sul",
            'photo' => 'LilianaLundaSul.jpg'
        ],
        [
            'id' => 14,
            'nome' => "Francisca do Rosário Rasgado",
            'provincia' => "Malanje",
            'photo' => 'FranciscaMalange.jpg'
        ],
        [
            'id' => 15,
            'nome' => "Adão do Nascimento Domingos",
            'provincia' => "Moxico",
            'photo' => 'AdaoMoxico.jpg'
        ],
        [
            'id' => 16,
            'nome' => "Eugénio Sonehã Cassandi",
            'provincia' => "Namibe",
            'photo' => 'EugenioNamibe.jpg'
        ],
        [
            'id' => 17,
            'nome' => "Celestino António Mucuta",
            'provincia' => "Uíge",
            'photo' => 'CelestinoUige.jpg'
        ],
        [
            'id' => 18,
            'nome' => "Francisco Martins",
            'provincia' => "Zaire",
            'photo' => 'FranciscoZaire.jpg'
        ]
    ];

    foreach ($procuradores as $procurador) {
        if ($procurador['id'] == $sub_id) {
            return '<div class="col-md-5 first" style="
            transition: box-shadow .25s;
            border-radius: 2px;
            background-color: #fff; 
            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
            margin: 30px auto 30px auto;
            ">
            <div class="row" style="display: flex !important;">
                <div class="col-md-6" style="padding: 0!important;">
                    <img style="width: 100% !important;height: 200px !important;" src="assets/img/team/spp/' . $procurador['photo'] . '" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                    ' . $procurador['nome'] . '
                    </h4>
                    <div>
                        <span style="font-weight: 700;display: block;clear: both;">Sub-Procurador Geral da República</span>
                        <br>
                        <div style="display: flex !important;">
                            <div style="line-height: 110%;font-weight: 400;font-size: 15px;">
                                Província:
                            </div>
                            <div style="margin-left:5px;color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;">
                            ' . $procurador['provincia'] . '
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
        }
    }

    return '<div class="alert alert-danger text-center p-20">Perfil não encontrado</div>';
}
