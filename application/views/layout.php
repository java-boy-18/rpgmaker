<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!$_SESSION){
  $session = array(
    'logged_in' => FALSE
  );
  $this->session->set_userdata($session);
}
if(!isset($alerta)){
  $alerta = null;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Site para quem gosta de RPG">
    <meta name="author" content="Tiago Miranda">
    <link href="./templates/css/bootstrap.css" rel="stylesheet">
    <link href="./templates/css/principal/layout.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png">
    <link rel="manifest" href="./manifest.json">
    <link rel="mask-icon" href="./safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body style=" background-image: url('https://s-media-cache-ak0.pinimg.com/originals/84/22/5a/84225aded2689e9a30c88382641fe6cd.jpg');">
    <div class="container" style="margin-top:1%;" >
      <nav class="navbar navbar-default" style="background-color:#343A40;border-color:#343A40;">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="color:#FFFFFF" href="<?php echo base_url('home');?>">Erbonia</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a id="fichas" style="color:#FFFFFF" href="<?php echo base_url('Fichas') ?>">Fichas</a></li>
              <li><a id="livros" style="color:#FFFFFF" href="<?php echo base_url('Livros') ?>">Livros</a></li>
              <?php
                if(isset($_SESSION['logged_in'])){
              ?>
              <div class="dropdown navbar-right">
                 <button class="dropbtn"><?php echo $_SESSION['usuario'] ?><span class="caret"></span></button>
                 <div class="dropdown-content">
                   <a href="#">Editar Perfil</a>
                   <a href="<?php echo base_url('Fichas/minhasfichas') ?>">Minhas Fichas</a>
                   <a href="<?php echo base_url('Home/sair') ?>">Sair</a>
                 </div>
               </div>
            <?php }else{ ?>
            </ul>
            <form class="navbar-form navbar-right" action="<?php echo base_url('Home/login') ?>" method="post">
             <div class="form-group">
               <input type="text" name="user" id="user" class="form-control" required='true' placeholder="Usu&aacute;rio">
             </div>
             <div class="form-group">
               <input type="password" name="senha" id="senha" class="form-control" required='true' placeholder="Senha">
             </div>
             <button type="submit" onsubmit="valida()" class="btn btn-default">Login</button>
             <div class="form-group">
               <a class="btn btn-default"  href="<?php echo base_url('Cadastro') ?>">Cadastrar-se</a>
             </div>
           </form>
          <?php } ?>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div style="min-height:610px;background-color:#343A40;opacity:0.9;">
        <?php
        if($this->uri->segment(2) == 'minhasfichas'){
          $this->load->view('minhasfichas');
        }elseif($this->uri->segment(1) == 'Cadastro'){
          $this->load->view('cadastro');
        }elseif($this->uri->segment(1) == 'Fichas'){
          $this->load->view('fichas');
        }elseif($this->uri->segment(1) == 'home'){
          $this->load->view('home');
        }elseif($this->uri->segment(1) == 'Home'){
          $this->load->view('home');
        }elseif($this->uri->segment(1) == 'Livros'){
          $this->load->view('livros');
        }elseif($this->uri->segment(1) == 'Jogo'){
          $this->load->view('jogo');
        }
        ?>
        <div class="push"></div>
      </div>
      <footer class="panel-body footer" style="background-color:#343A40;border-color:#343A40;color:#FFFFFF">Desenvolvido por ERBON</p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="./templates/jquery/bootstrap.js"></script>
  </body>
</html>
