<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?php echo base_url('templates/css/principal/layout.css'); ?>">
        <!--<link rel="stylesheet" href="<?php echo base_url('templates/css/principal/fichas.css'); ?>">-->
        <link rel="stylesheet" href="<?php echo base_url('templates/jquery/jquery.min.js'); ?>">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

        <title>Fichas</title>
    </head>
    <body>
        <fieldset style="border: 1px solid black">
            <div class="form-horizontal">
                <form method="post" action="<?php echo base_url('fichas/save') ?>">
                    <div class="col-sm-6" style="text-align: center;">
                        <br>
                        F&Iacute;SICO
                        <div class="form-group"style="margin-top: 1%;">
                            <label for="jogador" class="col-sm-3 control-label">Jogador</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="jogador" id="jogador" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="personagem" class="col-sm-3 control-label"> Personagem</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="personagem" id="personagem" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="classe" class="col-sm-3 control-label">Classe</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="classe">
                                    <option value="barbaro">B&aacute;rbaro</option>
                                    <option value="bardo">Bardo</option>
                                    <option value="clerigo">Cl&eacute;rigo</option>
                                    <option value="druida">Druida</option>
                                    <option value="feiticeiro">Feiticeiro</option>
                                    <option value="guerreiro">Guerreiro</option>
                                    <option value="ladino">Ladino</option>
                                    <option value="mago">Mago</option>
                                    <option value="monge">Monge</option>
                                    <option value="paladino">Paladino</option>
                                    <option value="ranger">Ranger</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="raca" class="col-sm-3 control-label">Ra&ccedil;a</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="raca">
                                    <option value="humano">Humano</option>
                                    <option value="anao">Anão</option>
                                    <option value="elfo">Elfo</option>
                                    <option value="gnomo">Gnomo</option>
                                    <option value="melfo">Meio-Elfo</option>
                                    <option value="morc">Meio-Orc</option>
                                    <option value="halfling">Halfling</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="classe" class="col-sm-3 control-label">Tend&ecirc;ncia</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="tendencia">
                                    <option value="LB">LB (Leal e Bom)</option>
                                    <option value="LN">LN (Leal e Neutro)</option>
                                    <option value="LM">LM (Leal e Mal)</option>
                                    <option value="NB">NB (Neutro e Bom)</option>
                                    <option value="NN">NN (Neutro)</option>
                                    <option value="NM">NM (Neutro e Mal)</option>
                                    <option value="CB">CB (Ca&oacute;tico e Bom)</option>
                                    <option value="CN">CN (Ca&oacute;tico e Neutro)</option>
                                    <option value="CM">CM (Ca&oacute;tico e Mal)</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="classe" class="col-sm-3 control-label">Divindade</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="divindade">
                                    <option value="">Boccob</option>
                                    <option value="">Corellon Larethian</option>
                                    <option value="">Ehlonna</option>
                                    <option value="">Gruumsh</option>
                                    <option value="">Erythnul</option>
                                    <option value="">Heironeous</option>
                                    <option value="">Hextor</option>
                                    <option value="">Fharlanghn</option>
                                    <option value="">Kord</option>
                                    <option value="">Gari Glittergold</option>
                                    <option value="">Moradin</option>
                                    <option value="">Nerull</option>
                                    <option value="">St. Cuthbert</option>
                                    <option value="">Vecna</option>
                                    <option value="">Obad-Hai</option>
                                    <option value="">Wee Jas</option>
                                    <option value="">Olidammara</option>
                                    <option value="">Pelar</option>
                                    <option value="">Yondalla</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="classe" class="col-sm-3 control-label">Tamanho</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="tamanho">
                                    <option value="P">P</option>
                                    <option value="M">M</option>
                                    <option value="G">G</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="idade" class="col-sm-3 control-label">Idade</label>
                            <div class="col-sm-7">
                                <input type="text" name="idade" class="form-control" id="idade" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="classe" class="col-sm-3 control-label">Sexo</label>
                            <div class="col-sm-7">
                                <select class="form-control" name="sexo">
                                    <option value="m">Masculino</option>
                                    <option value="f">Feminino</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jogador" class="col-sm-3 control-label">Altura</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="altura" id="jogador" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jogador" class="col-sm-3 control-label">Peso</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="peso" id="jogador" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jogador" class="col-sm-3 control-label">Olhos</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="olhos" id="jogador" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jogador" class="col-sm-3 control-label">Cabelos</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="cabelos" id="jogador" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jogador" class="col-sm-3 control-label">Pele</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="pele" id="jogador" >
                            </div>
                        </div>
                    </div>



                    <!-- HABILIDADES-->



                    <div class="col-sm-6" style="text-align: center;">
                        <br>
                        HABILIDADES
                        <div class="form-group" style="margin-top: 1%;">
                            <label for="forca" class="col-sm-3 control-label">For&ccedil;a</label>
                            <div class="col-sm-7">
                                <input type="number" min="4" max="24" class="form-control" name="forca" id="forca" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="destreza" class="col-sm-3 control-label"> Destreza</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="destreza" id="destreza" min="4" max="24" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inteligencia" class="col-sm-3 control-label"> Intelig&ecirc;ncia</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="inteligencia" id="inteligencia" min="4" max="24" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sabedoria" class="col-sm-3 control-label"> Sabedoria</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="sabedoria" id="sabedoria" min="4" max="24" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="carisma" class="col-sm-3 control-label"> Carisma</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="carisma" id="carisma" min="4" max="24">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fortitude" class="col-sm-3 control-label"> Fortitude</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="fortidude" id="fortitude" min="4" max="24">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="reflexos" class="col-sm-3 control-label"> Reflexos</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="reflexos" id="reflexos" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vontade" class="col-sm-3 control-label"> Vontade</label>
                            <div class="col-sm-7">
                                <input type="number" class="form-control" name="vontade" id="vontade" >
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <br>
                        </div>
                        <div class="col-sm-12">
                            <br>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <center><button type="submit" style="background-color: #422700; border: none;padding: 15px 32px;border-radius: 5px;box-shadow: -5px 5px 5px #381200; ">SALVAR</button></center>
                            </div>
                        </div>  
                    </div>
                </form>
            </div>
        </fieldset>
    </body>
</html>