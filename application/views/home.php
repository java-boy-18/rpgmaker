<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<?php
if(isset($_SESSION['mensagem'])){
$mensagem = $_SESSION['mensagem'];
}
if(!isset($_SESSION['logged_in'])){
  $array_items = array('class','mensagem');
  $this->session->unset_userdata($array_items);
}
 ?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="<?php echo base_url('templates/css/principal/layout.css'); ?>">
        <script type="text/javascript" src="<?php echo base_url('templates/jquery/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('templates/jquery/bootstrap.js'); ?>"></script>
        <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

        <title>Home</title>
    </head>
    <?php if(isset($mensagem)){?>
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Erro no login:</strong><?php echo $mensagem; ?>
      </div>
     <?php } ?>
 </body>
    <body onLoad="slide1()">
        <img id="id" height="650px" width="100%" style="padding-top:1%;padding-bottom: 1%;">
        <script type="text/javascript" src="<?php echo base_url('templates/jquery/js.js'); ?>"></script>
    </body>
</html>
