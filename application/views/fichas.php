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
            <div class="form-horizontal" style="margin-right:15%;">
                <form method="post" action="<?php echo base_url('fichas/save') ?>">
                        <br>
                        <div class="col-sm-12" style="text-align:center;">
                          INFORMA&Ccedil;&Otilde;ES B&Aacute;SICAS
                        </div>
                        <br>
                        <div class="form-group"style="margin-top: 1%;">
                            <label for="jogador" class="col-sm-3 control-label">Jogador</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="jogador" id="jogador" >
                            </div>
                            <label for="personagem" class="col-sm-3 control-label"> Personagem</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="personagem" id="personagem" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="classe" class="col-sm-3 control-label">Classe</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="classe">
                                    <option value="B&aacute;rbaro">B&aacute;rbaro</option>
                                    <option value="Bardo">Bardo</option>
                                    <option value="Cl&eacute;rigo">Cl&eacute;rigo</option>
                                    <option value="Druida">Druida</option>
                                    <option value="Feiticeiro">Feiticeiro</option>
                                    <option value="Guerreiro">Guerreiro</option>
                                    <option value="Ladino">Ladino</option>
                                    <option value="Mago">Mago</option>
                                    <option value="Monge">Monge</option>
                                    <option value="Paladino">Paladino</option>
                                    <option value="Ranger">Ranger</option>
                                </select>
                            </div>
                            <label for="raca" class="col-sm-3 control-label">Ra&ccedil;a</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="raca">
                                    <option value="Humano">Humano</option>
                                    <option value="An&atilde;o">An&atilde;o</option>
                                    <option value="Elfo">Elfo</option>
                                    <option value="Gnomo">Gnomo</option>
                                    <option value="Meio-Elfo">Meio-Elfo</option>
                                    <option value="Meio-Orc">Meio-Orc</option>
                                    <option value="Halfling">Halfling</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="classe" class="col-sm-3 control-label">Tend&ecirc;ncia</label>
                            <div class="col-sm-3">
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
                            <label for="classe" class="col-sm-3 control-label">Divindade</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="divindade">
                                    <option value="Boccob">Boccob</option>
                                    <option value="Corellon Larethian">Corellon Larethian</option>
                                    <option value="Ehlonna">Ehlonna</option>
                                    <option value="Gruumsh">Gruumsh</option>
                                    <option value="Erythnul">Erythnul</option>
                                    <option value="Heironeous">Heironeous</option>
                                    <option value="Hextor">Hextor</option>
                                    <option value="Fharlanghn">Fharlanghn</option>
                                    <option value="Kord">Kord</option>
                                    <option value="Gari Glittergold">Gari Glittergold</option>
                                    <option value="Moradin">Moradin</option>
                                    <option value="Nerull">Nerull</option>
                                    <option value="St. Cuthbert">St. Cuthbert</option>
                                    <option value="Vecna">Vecna</option>
                                    <option value="Obad-Hai">Obad-Hai</option>
                                    <option value="Wee Jas">Wee Jas</option>
                                    <option value="Olidammara">Olidammara</option>
                                    <option value="Pelor">Pelor</option>
                                    <option value="Yondalla">Yondalla</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="classe" class="col-sm-3 control-label">Tamanho</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="tamanho">
                                    <option value="P">P</option>
                                    <option value="M">M</option>
                                    <option value="G">G</option>
                                </select>
                            </div>
                            <label for="idade" class="col-sm-3 control-label">Idade</label>
                            <div class="col-sm-3">
                                <input type="text" name="idade" class="form-control" id="idade" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="classe" class="col-sm-3 control-label">Sexo</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="sexo">
                                    <option value="m">Masculino</option>
                                    <option value="f">Feminino</option>
                                </select>
                            </div>
                            <label for="jogador" class="col-sm-3 control-label">Altura</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="altura" id="jogador" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jogador" class="col-sm-3 control-label">Peso</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="peso" id="jogador" >
                            </div>

                            <label for="jogador" class="col-sm-3 control-label">Olhos</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="olhos" id="jogador" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jogador" class="col-sm-3 control-label">Cabelos</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="cabelos" id="jogador" >
                            </div>
                            <label for="jogador" class="col-sm-3 control-label">Pele</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="pele" id="jogador" >
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                <center><button type="submit" style="background-color: #422700; border: none;padding: 15px 32px;border-radius: 5px;box-shadow: -5px 5px 5px #381200; ">SALVAR</button></center>
                            </div>
                        </div>
                </form>
        </fieldset>
    </body>
</html>
