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

        <title>Cadastro</title>
    </head>
    <body>
        <fieldset style="border: 1px solid black">
            <div class="form-horizontal" style="margin-right:15%;">
                <form method="post" action="<?php echo base_url('Home/save') ?>">
                        <br>
                        <div class="form-group"style="margin-top: 1%;">
                            <label for="jogador" class="col-sm-3 control-label">Nome</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="nome" id="nome" >
                            </div>
                        </div>
                        <div class="form-group"style="margin-top: 1%;">
                            <label for="personagem" class="col-sm-3 control-label">Nome de usu&aacute;rio</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="user" id="user" >
                            </div>
                        </div>
                        <div class="form-group"style="margin-top: 1%;">
                            <label for="jogador" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-3">
                                <input type="email" class="form-control" name="email" id="email" >
                            </div>
                        </div>
                        <div class="form-group"style="margin-top: 1%;">
                            <label for="personagem" class="col-sm-3 control-label">Senha</label>
                            <div class="col-sm-3">
                                <input type="password" class="form-control" name="senha" id="senha" >
                            </div>
                        </div>
                        <div class="form-group"style="margin-top: 1%;">
                            <label for="personagem" class="col-sm-3 control-label">Confirmar Senha</label>
                            <div class="col-sm-3">
                                <input type="password" class="form-control" name="senhaconf" id="senhaconf" >
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-6">
                                <center><button type="submit" style="background-color: #422700; border: none;padding: 15px 32px;border-radius: 5px;box-shadow: -5px 5px 5px #381200;">SALVAR</button></center>
                            </div>
                        </div>
                </form>
        </fieldset>
    </body>
</html>
