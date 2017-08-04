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
      <div class="col-sm-6" >
        <table class="table table-condensed"  >
          <thead>
            <td>Nome</td>
            <td>Edi&ccedil;&atilde;o</td>
            <td>Download</td>
          </thead>
          <tr>
            <td>Livro do Jogador</td>
            <td>3.5</td>
            <td><a class="btn btn-default" target="_blank" href="<?php echo base_url('templates/livros/Jogador 3.5.pdf') ?>">Download</a></td>
          </tr>
          <tr>
            <td>Livro do Mestre</td>
            <td>3.5</td>
            <td><a class="btn btn-default" target="_blank" href="<?php echo base_url('templates/livros/Jogador 3.5.pdf') ?>">Download</a></td>
          </tr>
          <tr>
            <td>Comp&ecirc;ndio dos Monstros</td>
            <td>3.5</td>
            <td><a class="btn btn-default" target="_blank" href="<?php echo base_url('templates/livros/Jogador 3.5.pdf') ?>">Download</a></td>
          </tr>
        </table>
      </div>
    </body>
</html>
