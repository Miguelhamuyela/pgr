
<h3 class="margin-bottom-25 text-center titulo-quem-e-quem-departamento uppertext ng-binding" style="border-bottom: 1px solid #eee;padding:20px;">
    Direcção Central
</h3>
<div>
<?php if (is_array($membros)) foreach ($membros as $key => $membro) : 
        if ($membro->cargo === "Procurador Geral da República") :
    ?>
    <div class="row" style="margin: 30px auto 30px auto;">

        <div class="col-md-6 first" style="
                                        transition: box-shadow .25s;
                                        border-radius: 2px;
                                        background-color: #fff; 
                                        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);    
                                        margin: 30px auto 30px auto;
                                    ">
            <div class="row" style="display: flex !important;">
                <div class="col-md-6" style="padding: 0!important;">
                    <img style="height: 200px !important;" src="<?= URL_BASE_FILES . $membro->fotografia?>" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 25px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 12px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                    <?= $membro->nome ?>
                    </h4>
                    <div><span style="font-weight: 700;display: block;clear: both;">Procurador Geral da República</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; endforeach; ?>

    <div class="row" style="margin: 30px auto 30px auto;">
        <?php if (is_array($membros)) foreach ($membros as $key => $membro) : 
            if ($membro->cargo === "Vice-Procurador Geral da República") :
        ?>
        <div class="col-md-5 first" style="
                                        transition: box-shadow .25s;
                                        border-radius: 2px;
                                        background-color: #fff; 
                                        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                                        margin: 30px auto 30px auto;
                                    ">
            <div class="row" style="display: flex !important;">
                <div class="col-md-6" style="padding: 0!important;">
                    <img style="height: 165px !important;" src="<?= URL_BASE_FILES . $membro->fotografia?>" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                    <?= $membro->nome ?>
                    </h4>
                    <div><span style="font-weight: 700;display: block;clear: both;">Vice-Procurador Geral da República</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; endforeach; ?>
        <?php if (is_array($membros)) foreach ($membros as $key => $membro) : 
            if ($membro->cargo === "Vice-Procurador Geral da República, Procurador Militar") :
        ?>
        <div class="col-md-5 first" style="
                                            transition: box-shadow .25s;
                                            border-radius: 2px;
                                            background-color: #fff; 
                                            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                                            margin: 30px auto 30px auto;
                                        ">
            <div class="row" style="display: flex !important;">
                <div class="col-md-6" style="padding: 0!important;">
                    <img style="height: 165px !important;" src="<?= URL_BASE_FILES . $membro->fotografia?>" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                        <?= $membro->nome ?>
                    </h4>
                    <div><span style="font-weight: 700;display: block;clear: both;">Vice-Procurador Geral da República, Procurador Militar</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; endforeach; ?>
    </div>

    <?php if (is_array($membros)) for ($i=0; $i < count($membros); $i+=2) : 
        if ($membros[$i]->categoria == "Direcção") :
    ?>
    <div class="row" style="margin: 30px auto 30px auto;">

        <div class="col-md-5 first" style="
                                                        transition: box-shadow .25s;
                                                        border-radius: 2px;
                                                        background-color: #fff; 
                                                        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                                                        margin: 30px auto 30px auto;
                                                    ">
            <div class="row" style="display: flex !important;">
                <div class="col-md-6" style="padding: 0!important;">
                    <img style="height: 165px !important;" src="<?= URL_BASE_FILES . $membros[$i]->fotografia?>" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                        <?= $membros[$i]->nome ?>
                    </h4>
                    <div><span style="font-weight: 700;display: block;clear: both;"><?= $membros[$i]->cargo ?></span>
                    </div>
                </div>
            </div>
        </div>

        <?php if (($i + 1) < count($membros)) : ?>
        <div class="col-md-5 first" style="
                                            transition: box-shadow .25s;
                                            border-radius: 2px;
                                            background-color: #fff; 
                                            box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                                            margin: 30px auto 30px auto;
                                    ">
            <div class="row" style="display: flex !important;">
                <div class="col-md-6" style="padding: 0!important;">
                    <img style="height: 165px !important;" src="<?= URL_BASE_FILES . $membros[$i+1]->fotografia?>" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                        <?= $membros[$i+1]->nome ?>
                    </h4>
                    <div><span style="font-weight: 700;display: block;clear: both;"><?= $membros[$i+1]->cargo ?></span>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
    </div>
    <?php endif; endfor; ?>


<h3 class="margin-bottom-25 text-center titulo-quem-e-quem-departamento uppertext ng-binding" style="border-bottom: 1px solid #eee;padding:20px;">
    Órgãos Nacionais
</h3>
<div>
    <?php if (is_array($membros)) for ($i=0; $i < count($membros); $i+=2) : 
        if ($membros[$i]->categoria == "Órgãos Nacionais") :
    ?>
    <div class="row" style="margin: 30px auto 30px auto;">
     
        <div class="col-md-5 first" style="
                                        transition: box-shadow .25s;
                                        border-radius: 2px;
                                        background-color: #fff; 
                                        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                                        margin: 30px auto 30px auto;
                                    ">
              <div class="row" style="">
                <div class="col-md-6" style="padding: 0!important; display: flex !important;justify-content:center !important;align-items:center !important;">
                    <img style="width: 200px;height: 165px !important;" src="<?= URL_BASE_FILES . $membros[$i]->fotografia?>" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                    <?= $membros[$i]->nome ?>
                    </h4>
                    <div><span style="font-weight: 700;display: block;clear: both;"><?= $membros[$i]->cargo ?></span>
                    <div style="color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;margin-top:10px;">
                                Gabinete de Inspeção
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (($i + 1) < count($membros)) : ?>
          <div class="col-md-5 first" style="
                                                        transition: box-shadow .25s;
                                                        border-radius: 2px;
                                                        background-color: #fff; 
                                                        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                                                        margin: 30px auto 30px auto;
                                                    ">
              <div class="row" style="">
                <div class="col-md-6" style="padding: 0!important; display: flex !important;justify-content:center !important;align-items:center !important;">
                    <img style="width: 200px;height: 165px !important;" src="<?= URL_BASE_FILES . $membros[$i+1]->fotografia?>" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                    <?= $membros[$i+1]->nome ?>
                    </h4>
                    <div><span style="font-weight: 700;display: block;clear: both;"><?= $membros[$i+1]->cargo ?></span>
                    <div style="color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;margin-top:10px;">
                                Direcção Nacional de Prevenção e Combate à Corrupção
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
    </div>
    <?php endif; endfor; ?>
</div>

<h3 class="margin-bottom-25 text-center titulo-quem-e-quem-departamento uppertext ng-binding" style="border-bottom: 1px solid #eee;padding:20px;">
    Órgãos Regionais
</h3>
    <?php if (is_array($membros)) for ($i=0; $i < count($membros); $i+=2) : 
        if ($membros[$i]->categoria == "Órgãos Regionais") :
    ?>
    <div  class="row" style="margin: 30px auto 30px auto;">
      
        <div class="col-md-5 first" style="
                                        transition: box-shadow .25s;
                                        border-radius: 2px;
                                        background-color: #fff; 
                                        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                                        margin: 30px auto 30px auto;
                                        ">
            <div class="row" style="">
                <div class="col-md-6" style="padding: 0!important; display: flex !important;justify-content:center !important;align-items:center !important;">
                    <img style="width: 200px;height: 200px !important;" src="<?= URL_BASE_FILES . $membros[$i]->fotografia?>" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                         <?= $membros[$i]->nome ?>
                    </h4>
                    <div>
                        <span style="font-weight: 700;display: block;clear: both;"> <?= $membros[$i]->cargo ?></span>
                        <br>
                        <div style="display: flex !important;">
                            <div style="color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;">
                                Região Norte
                            </div>
                            <!--<div  id="Malange" style="margin-left:5px;color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;">-->
                            <!--    Bengo, Cabinda, Cuanza Norte, Malanje , Uíge e Zaire-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (($i + 1) < count($membros)) : ?>
        <div class="col-md-5 first" style="
                                        transition: box-shadow .25s;
                                        border-radius: 2px;
                                        background-color: #fff; 
                                        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                                        margin: 30px auto 30px auto;
                                        ">
            <div class="row" style="">
                <div class="col-md-6" style="padding: 0!important; display: flex !important;justify-content:center !important;align-items:center !important;">
                    <img style="width: 200px;height: 200px !important;" src="<?= URL_BASE_FILES . $membros[$i+1]->fotografia?>" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                    <?= $membros[$i+1]->nome ?>
                    </h4>
                    <div>
                        <span style="font-weight: 700;display: block;clear: both;">Sub-procurador-Geral da República</span>
                        <br>
                        <div style="display: flex !important;">
                            <div style="color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;">
                                Região Sul 
                            </div>
                            <!--<div style="margin-left:5px;color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;">-->
                            <!--    Benguela-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
    </div>
    <?php endif; endfor; ?>

</div>

<div id="Benguela" id="sub-p">
    <h3 class="margin-bottom-25 text-center titulo-quem-e-quem-departamento uppertext ng-binding" style="border-bottom: 1px solid #eee;padding:20px;">
        Orgãos Provinciais
    </h3>
<div>
    <?php if (is_array($membros)) for ($i=0; $i < count($membros); $i+=2) : 
        if ($membros[$i]->categoria == "Orgãos Provinciais") :
    ?>
    <div  class="row" style="margin: 30px auto 30px auto;">

        <div class="col-md-5 first" style="
                                        transition: box-shadow .25s;
                                        border-radius: 2px;
                                        background-color: #fff; 
                                        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                                        margin: 30px auto 30px auto;
                                        ">
            <div class="row" style="display: flex !important;">
                <div class="col-md-6" style="padding: 0!important;">
                    <img style="width: 100% !important;height: 200px !important;" src="<?= URL_BASE_FILES . $membros[$i]->fotografia?>" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                    <?= $membros[$i]->nome ?>
                    </h4>
                    <div>
                        <span style="font-weight: 700;display: block;clear: both;"> <?= $membros[$i]->cargo ?> </span>
                        <br>
                        <div style="display: flex !important;">
                            <div style="line-height: 110%;font-weight: 400;font-size: 15px;">
                                Província:
                            </div>
                            <div  id="Malange" style="margin-left:5px;color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;">
                                Luanda
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if (($i + 1) < count($membros)) : ?>
        <div class="col-md-5 first" style="
                                        transition: box-shadow .25s;
                                        border-radius: 2px;
                                        background-color: #fff; 
                                        box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12);
                                        margin: 30px auto 30px auto;
                                        ">
            <div class="row" style="display: flex !important;">
                <div class="col-md-6" style="padding: 0!important;">
                    <img style="width: 100% !important;height: 200px !important;" src="<?= URL_BASE_FILES . $membros[$i+1]->fotografia?>" alt="">
                </div>
                <div class=" col-md-5">
                    <h4 style="font-size: 20px !important;line-height: 110%;margin: 1.14rem 0 0.912rem;padding-bottom: 3px;border-bottom: 1px solid #800000;font-weight: 400;font-size: 18px;">
                    <?= $membros[$i+1]->nome ?>
                    </h4>
                    <div>
                        <span style="font-weight: 700;display: block;clear: both;"><?= $membros[$i+1]->cargo ?></span>
                        <br>
                        <div style="display: flex !important;">
                            <div style="line-height: 110%;font-weight: 400;font-size: 15px;">
                                Província:
                            </div>
                            <div style="margin-left:5px;color: #800000;line-height: 110%;font-weight: 400;font-size: 15px;">
                                Benguela
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
    </div>
    <?php endif; endfor; ?>
</div>
