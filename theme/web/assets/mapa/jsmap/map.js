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
                "href": "quem.php?sub_id=1",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Procuradora Provincial: Carla Patrícia Pelinganga B. A M. Correia<\/span>"
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
                "href": "quem.php?sub_id=2",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Carlos Manuel dos  Santos<\/span>"
                },
                "text": {
                    "content": "Benguela"
                }
            },

            "AO-BIE": {
                "value": "1",
                "href": "quem.php?sub_id=3",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Jaime Inácio Sebastião Prata<\/span>"
                },
                "text": {
                    "content": "Bié"
                }
            },
            "AO-CAB": {
                "value": "5",
                "href": "quem.php?sub_id=4",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Miguel Janota<\/span>"
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
                "href": "quem.php?sub_id=5",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Nilton Eliazer Muaca<\/span>"
                },
                "text": {
                    "content": "Cuando-Cubango"
                }
            },
            "AO-CNO": {
                "value": "21",
                "href": "quem.php?sub_id=6",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Maria Joaquina Matias<\/span>"
                },
                "text": {
                    "content": "Cuanza Norte"
                }
            },
            "AO-CUS": {
                "value": "6",
                "href": "quem.php?sub_id=7",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Simão João Cafala<\/span>"
                },
                "text": {
                    "content": "Cuanza Sul"
                }
            },
            "AO-CNN": {
                "value": "100",
                "href": "quem.php?sub_id=8",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Américo Rodrigues Francisco Cassoma<\/span>"
                },
                "text": {
                    "content": "Cunene"
                }
            },
            "AO-HUA": {
                "value": "4",
                "href": "quem.php?sub_id=9",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: José Maria Gomes da Silva Gustavo<\/span>"
                },
                "text": {
                    "content": "Huambo"
                }
            },
            "AO-HUI": {
                "value": "1",
                "href": "quem.php?sub_id=10",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Gabriel Figueiredo Satumbo Custódio<\/span>"
                },
                "text": {
                    "content": "Huíla"
                }
            },
            "AO-LUA": {
                "value": "15",
                "href": "quem.php?sub_id=11",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Maria Eugénia dos Santos<\/span>"
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
                "href": "quem.php?sub_id=12",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: António Domingos Espanhol<\/span>"
                },
                "text": {
                    "content": "Lunda Norte"
                }
            },
            "AO-LSU": {
                "value": "7",
                "href": "quem.php?sub_id=13",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Liliana Pascoal Vieira Dias Camuamba<\/span>"
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
                "href": "quem.php?sub_id=14",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Francisca do Rosário Rasgado<\/span>"
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
                "href": "quem.php?sub_id=15",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Adão do Nascimento Domingos<\/span>"
                },
                "text": {
                    "content": "Moxico"
                }
            },
            "AO-NAM": {
                "value": "0",
                "href": "quem.php?sub_id=16",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Eugénio Sonehã Cassandi<\/span>"
                },
                "text": {
                    "content": "Namibe"
                }
            },
            "AO-UIG": {
                "value": "0",
                "href": "quem.php?sub_id=17",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Celestino António Mucuta<\/span>"
                },
                "text": {
                    "content": "Uíge"
                }
            },
            "AO-ZAI": {
                "value": "0",
                "href": "quem.php?sub_id=18",
                "tooltip": {
                    "content": "<span style=\"font-weight:bold;\">Sup-Procurador Provincial: Francisco Martins<\/span>"
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