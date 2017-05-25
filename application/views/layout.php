<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php echo base_url('templates/css/principal/layout.css'); ?>">
        <link rel="stylesheet" href="<?php echo base_url('templates/jquery/jquery.min.js'); ?>">
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
        <title>Home</title>
    </head>
    <body>
        <div class="container-fluid " style="margin-top: 1%;margin-bottom: 1%;">
            <nav class="navbar" style="background-color: #663300; border-color: #422700;">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="<?php echo base_url('home');?>"><img src="<?php echo base_url('templates/imagens/ded.png'); ?> " style="height: 50px; padding-bottom: 20px;"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a id="fichas" href="<?php echo base_url('Fichas') ?>">Fichas</a></li>
                            <li><a id="livros" href="#">Livros</a></li>
                            <li><a id="jogo" href="#">O Jogo</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <?php 
            if($this->uri->segment(1) == 'Fichas'){
                $this->load->view('fichas');
            }elseif($this->uri->segment(1) == 'home'){
                $this->load->view('home');
            }
        ?>
            <div class="col-sm-12" style="border: 1px black solid; text-align: center; margin-top: 1%;">
                DESENVOLVIDO POR ERBON
            </div>
        </div>
        
    </body>
</html>