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
      <div class="col-sm-12" style="text-align:center;" >
        <?php if (sizeof($data) > 0) {?>
        <table class="table table-condensed" >
          <thead>
            <td>Personagem</td>
            <td>Ra&ccedil;a</td>
            <td>Classe</td>
            <td>Imprimir/excluir</td>
          </thead>
          <?php foreach($data as $_data){ ?>
          <form method="post" action="<?php echo base_url('fichas/geraficha') ?>">
            <input type="hidden" id="jogador" name="jogador" value="<?php echo $_data['jogador'] ?>">
            <input type="hidden" id="classe" name="classe" value="<?php echo $_data['classe'] ?>">
            <input type="hidden" id="tendencia" name="tendencia" value="<?php echo $_data['tendencia'] ?>">
            <input type="hidden" id="tamanho" name="tamanho" value="<?php echo $_data['tamanho'] ?>">
            <input type="hidden" id="sexo" name="sexo" value="<?php echo $_data['sexo'] ?>">
            <input type="hidden" id="peso" name="peso" value="<?php echo $_data['peso'] ?>">
            <input type="hidden" id="cabelos" name="cabelos" value="<?php echo $_data['cabelos'] ?>">
            <input type="hidden" id="personagem" name="personagem" value="<?php echo $_data['personagem'] ?>">
            <input type="hidden" id="raca" name="raca" value="<?php echo $_data['raca'] ?>">
            <input type="hidden" id="divinidade" name="divinidade" value="<?php echo $_data['divindade'] ?>">
            <input type="hidden" id="idade" name="idade" value="<?php echo $_data['idade'] ?>">
            <input type="hidden" id="altura" name="altura" value="<?php echo $_data['altura'] ?>">
            <input type="hidden" id="olhos" name="olhos" value="<?php echo $_data['olhos'] ?>">
            <input type="hidden" id="pele" name="pele" value="<?php echo $_data['pele'] ?>">
          <tr>
            <td><?php echo $_data['personagem'] ?></td>
            <td><?php echo $_data['raca'] ?></td>
            <td><?php echo $_data['classe'] ?></td>
            <td>
              <button class="btn btn-primary glyphicon glyphicon-print" style="backgorund-color:#422700" type="submit"> Imprimir</button>
              <a class="btn btn-danger glyphicon glyphicon-trash" style="backgorund-color:#422700" href="excluir/<?php echo $_data['id'] ?>"> Excluir</a>
            </td>
          </tr>
          </form>
        <?php } ?>
        </table>
      <?php }else{
                echo 'N&atilde;o h&aacute; fichas para este usu&aacute;rio';
            }
      ?>
      </div>
    </body>
</html>