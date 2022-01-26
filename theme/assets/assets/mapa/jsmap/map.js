$(function () {
    $(".mapcontainer").mapael({
        map: {
            name: "angola",
            defaultArea: {
                attrs: {
                    stroke: "#fff",
                    "stroke-width": 1
                }
            }
        },
        areas: {

            "AO-BGO": {
                "value": "2",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Rua Direita da Açucareira, junto do Tribunal da Comarca do Dande.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 234 281 194 / 922 755 000
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> bengo@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Bengo",
                    "margin": {
                        "x": -10,
                        "y": 20
                    }
                }
            },
            "AO-BGU": {
                "value": "3",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Rua Sacadura Cabral n° 57, edifício n° 76.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 272 235 977 / 272 233 521
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> benguela@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Benguela"
                }
            },

            "AO-BIE": {
                "value": "1",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Entrocamento entre as Avenidas Teófilo Braga e Miguel Bombarde- Cuito.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> +244 248 202 198 / 929 138 149 / 925 627 985
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> bie@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Bié"
                }
            },
            "AO-CAB": {
                "value": "5",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Bairro Resistência, largo Pedro Benge.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 231222415
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> cabiinda@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "position": "right",
                    "content": "Cabinda",
                    "attrs": {
                        "fill": "rgba(9,9,16,0.7)",
                        "font-weight": "bold"
                    },
                    "attrsHover": {
                        "fill": "#D94814",
                        "animDuration": 300
                    }
                }
            },
            "AO-CCU": {
                "value": "10",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div>  Rua Académica - Palácio da Justiça - Menongue.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 940 322 277 / 939 511 555 / 940 320 777
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> cuando.cubango@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Cuando-Cubango"
                }
            },
            "AO-CNO": {
                "value": "21",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Rua de Ndalatando, n•31 Cidade de Ndalatando.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 235 284 020
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> cuanza.norte@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Cuanza Norte"
                }
            },
            "AO-CUS": {
                "value": "6",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Zona- 1, Rua do Payol, Edifício da Loja de Registos, 1* andar.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 236 230 655
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> cuanza.sul@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Cuanza Sul"
                }
            },
            "AO-CNN": {
                "value": "100",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Rua Avenida  11 de Novembro cidade de Ondjiva-Municipio do Cuanhama- Edificio do Tribunal da Comarca do Cuanhama.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 933 131 290
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> cunene@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Cunene"
                }
            },
            "AO-HUA": {
                "value": "4",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Edifício 3AAA Rua Garcia da horta, cidade baixa, junto ao Comando Provincial da Proteção Civil e bombeiros.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 241 220 176
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> huambo@pgr.ao 
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Huambo"
                }
            },
            "AO-HUI": {
                "value": "1",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Rua do Mukufi, Bairro Comercial, Edifício do Tribunal- AAA,  segundo andar.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 945 032 903
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div>  huila@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Huíla"
                }
            },
            "AO-LUA": {
                "value": "15",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Rua Major Kanhangulo (Palácio Ana Joaquina-Tribunal Provincial de Luanda)
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 944 046 600
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div>  procuradoria.luanda@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "position": "left",
                    "content": "Luanda",
                    "attrs": {
                        "fill": "rgba(9,9,16,0.7)",
                        "font-weight": "bold"
                    },
                    "attrsHover": {
                        "fill": "#D94814",
                        "animDuration": 300
                    }
                }
            },
            "AO-LNO": {
                "value": "9",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Rua 28 de Agosto, largo Dr António Agostinho Neto, Dundo.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 252 264 132
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div>  lunda.norte@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Lunda Norte"
                }
            },
            "AO-LSU": {
                "value": "7",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Edifício do Tribunal Provincial da Lunda-Sul, sito na Avenida 4 de Fevereiro, Município de Saurimo.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 935 270 600 
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div>  lunda.sul@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Lunda Sul",
                    "margin": {
                        "x": 10,
                        "y": 10
                    }
                }
            },
            "AO-MAL": {
                "value": "8",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Rua Comandante Dangereux, S/N Estrada Nacional 230,  1. Andar ( Ex-Tribunal Provincial de Malanje )
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 251 202 080 
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div>  malanje@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Malanje",
                    "margin": {
                        "x": -10,
                        "y": 0
                    }
                }
            },
            "AO-MOX": {
                "value": "0",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Bairro Santa Rosa, Rua S/N, Casa S/N, Luena.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 932 810 555
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div>  moxico@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Moxico"
                }
            },
            "AO-NAM": {
                "value": "0",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Rua Eduardo Mondelaine, Moçâmedes.
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 927 873 13
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> namibe@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Namibe"
                }
            },
            "AO-UIG": {
                "value": "0",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Centro da cidade, Rua Dr. António Agostinho Neto, edifício Palácio da Justiça 
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> 923 321 183 / 233 235 160 / 923 321 183
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> uige@pgr.ao 
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Uíge"
                }
            },
            "AO-ZAI": {
                "value": "0",
                "href": "#",
                "tooltip": {
                    "content": 
                    `
                        <div>
                            <span>
                                <div style=\"font-weight:bold;\">Sede:<\/div> Bairro 11 de Novembro, zona n.° 6, Rua do Luvo, 2º andar do Tribunal da Comarca de Mbanza Congo - Mbanza Congo
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">Contactos:<\/div> -
                            </span>
                            
                            <br/>
                            
                            <span>
                                <div style=\"font-weight:bold;\">E-mail:<\/div> zaire@pgr.ao
                            </span>
                        </div>
                    `
                },
                "text": {
                    "content": "Zaire",
                    "margin": {
                        "x": -10,
                        "y": -5
                    }
                }
            }
        }
    });
});