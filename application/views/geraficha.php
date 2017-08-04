<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="<?php echo base_url('templates/css/principal/ficha'); ?>">
        <title>Ficha</title>
    </head>
    <body>
      <div class="all">
        <div style="page-break-after:always">
        <!--- - - - - - - - - - - - - - - - - - - - - - - - - - - - CABEÇALHO - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <table style="width:100%;margin-top:5%;font-size:02px;">
          <tr>
            <td colspan="4" style="font-size:12px;"><?php echo $this->input->post('jogador');?></td>
            <td colspan="4" style="font-size:12px;"><?php echo $this->input->post('personagem');?></td>
          </tr>
          <tr>
            <td colspan="4" class="jogador">NOME DO JOGADOR</td>
            <td colspan="4" class="jogador">NOME DO PERSONAGEM</td>
          </tr>
          <tr>
            <td colspan="4" style="font-size:12px;"><?php echo $this->input->post('classe');?><br></td>
            <td colspan="2" style="font-size:12px;"><?php echo $this->input->post('raca');?></td>
            <td style="font-size:12px;"><?php echo $this->input->post('tendencia');?></td>
            <td style="font-size:12px;"><?php echo $this->input->post('divindade');?></td>
          </tr>
          <tr>
            <td class="jogador" colspan="4">CLASSE E N&Iacute;VEL</td>
            <td class="jogador" colspan="2">RA&Ccedil;A</td>
            <td class="jogador">TEND&Ecirc;NCIA</td>
            <td class="jogador">DIVINDADE</td>
          </tr>
          <tr>
            <td style="font-size:12px;"><?php echo $this->input->post('tamanho');?></td>
            <td style="font-size:12px;"><?php echo $this->input->post('idade');?></td>
            <td style="font-size:12px;"><?php echo $this->input->post('sexo');?></td>
            <td style="font-size:12px;"><?php echo $this->input->post('altura');?></td>
            <td style="font-size:12px;"><?php echo $this->input->post('peso');?></td>
            <td style="font-size:12px;"><?php echo $this->input->post('olhos');?></td>
            <td style="font-size:12px;"><?php echo $this->input->post('cabelos');?></td>
            <td style="font-size:12px;"><?php echo $this->input->post('pele');?></td>
          </tr>
          <tr>
            <td class="jogador">TAMANHO</td>
            <td class="jogador">IDADE</td>
            <td class="jogador">SEXO</td>
            <td class="jogador">ALTURA</td>
            <td class="jogador">PESO</td>
            <td class="jogador">OLHOS</td>
            <td class="jogador">CABELOS</td>
            <td class="jogador">PELE</td>
          </tr>
        </table>
        <!--- - - - - - - - - - - - - - - - - - - - - - - - - - - - PV - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <table class="pv">
          <tr>
            <td></td>
            <td>TOTAL</td>
            <td>FERIMENTOS/PV's ATUAIS</td>
            <td>DANO POR CONTUS&Atilde;O</td>
            <td>DESLOCAMENTO</td>
          </tr>
          <tr>
            <td class="hab" style="width:19%; font-size:7px;"><font size="2">PV</font><br>PONTOS DE VIDA</td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
        </table>
        <!--- - - - - - - - - - - - - - - - - - - - - - - - - - - - CA - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <table class="ca">
          <tr>
            <td class="hab" style="width:20%;font-size:7px"><font size="2">CA</font><br>CLASSE ARMADURA</td>
            <td class="border"></td>
            <td style="width:1%;">=10+</td>
            <td class="border" style="width:6%;"></td>
            <td>+</td>
            <td class="border" style="width:6%;"></td>
            <td>+</td>
            <td class="border" style="width:6%;"></td>
            <td>+</td>
            <td class="border" style="width:6%;"></td>
            <td>+</td>
            <td class="border" style="width:6%;"></td>
            <td>+</td>
            <td class="border" style="width:6%;"></td>
            <td>+</td>
            <td class="border" style="width:6%;"></td>
          </tr>
          <tr>
            <td></td>
            <td style="font-size:8px">TOTAL</td>
            <td></td>
            <td style="font-size:5px">B&Ocirc;NUS<br>ARMADURA</td>
            <td></td>
            <td style="font-size:5px">B&Ocirc;NUS<br>ESCUDO</td>
            <td></td>
            <td style="font-size:5px">MOD<br>DESTREZA</td>
            <td></td>
            <td style="font-size:5px">MOD<br>TAMANHO</td>
            <td></td>
            <td style="font-size:5px">ARMADURA<br>NATURAL</td>
            <td></td>
            <td style="font-size:5px">MOD<br>DEFLEX&Atilde;O</td>
            <td></td>
            <td style="font-size:5px">OUTROS</td>
          </tr>
        </table>
        <!--- - - - - - - - - - - - - - - - - - - - - - - - - - - - PERICIAS - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <table class="pericias">
          <tr class="hab">
            <td style="border:1px solid black;"colspan="4">PER&Iacute;CIAS</td>
            <td style="font-size:6px;border:1px solid black;">GRADUA&Ccedil;&Atilde;O M&Aacute;XIMA</td>
            <td style="border:1px solid black;text-align:center; background-color:white;color:black;">/</td>
          </tr>
          <tr>
            <td style="border:1px solid black;">NOME DA PER&Iacute;CIA</td>
            <td style="border:1px solid black;">HABILIDADE<br>CHAVE</td>
            <td style="border:1px solid black;">MOD<br>PER&Iacute;CIAS</td>
            <td style="border:1px solid black;">MOD<br>HABILIDADE</td>
            <td style="border:1px solid black;">GRADUA&Ccedil;&Atilde;O</td>
            <td style="border:1px solid black;">OUTROS</td>
          </tr>
          <tr>
            <td>ABRIR FECHADURA</td>
            <td style="text-align:center;">DES</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>ACROBACIA</td>
            <td style="text-align:center;">DES</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>ADESTRAR ANIMAIS</td>
            <td style="text-align:center;">CAR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>ARTE DA FUGA</td>
            <td style="text-align:center;">DES</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>ATUA&Ccedil;&Atilde;O</td>
            <td style="text-align:center;">CAR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>ATUA&Ccedil;&Atilde;O</td>
            <td style="text-align:center;">CAR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>ATUA&Ccedil;&Atilde;O</td>
            <td style="text-align:center;">CAR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>AVALIA&Ccedil;&Atilde;O</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>BLEFAR</td>
            <td style="text-align:center;">CAR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>CAVALGAR</td>
            <td style="text-align:center;">DES</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>CONCENTRA&Ccedil;&Atilde;O</td>
            <td style="text-align:center;">CON</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>CONHECIMENTO</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>CONHECIMENTO</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>CONHECIMENTO</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>CONHECIMENTO</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>CONHECIMENTO</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>CURA</td>
            <td style="text-align:center;">SAB</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>DECIFRAR ESCRITA</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>DIPLOMACIA</td>
            <td style="text-align:center;">CAR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>DISFARCE</td>
            <td style="text-align:center;">CAR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>EQUIL&Iacute;BRIO</td>
            <td style="text-align:center;">DES</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>ESCALAR</td>
            <td style="text-align:center;">FOR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>ESCONDER-SE</td>
            <td style="text-align:center;">DES</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>FALSIFICA&Ccedil;&Atilde;O</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>FURTIVIDADE</td>
            <td style="text-align:center;">DES</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>IDENTIFICAR M&Aacute;GIA</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>INTIMIDAR</td>
            <td style="text-align:center;">CAR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>NATA&Ccedil;&Atilde;O</td>
            <td style="text-align:center;">FOR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>OBSERVAR</td>
            <td style="text-align:center;">SAB</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>OBTER INFORMA&Ccedil;&Atilde;O</td>
            <td style="text-align:center;">CAR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>OF&Iacute;CIOS</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>OF&Iacute;CIOS</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>OF&Iacute;CIOS</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>OPERAR MECANISMO</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>OUVIR</td>
            <td style="text-align:center;">SAB</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>PROCURAR</td>
            <td style="text-align:center;">INT</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>PROFISS&Atilde;O</td>
            <td style="text-align:center;">SAB</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>PROFISS&Atilde;O</td>
            <td style="text-align:center;">SAB</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>PRESTIDIGITA&Ccedil;&Atilde;O</td>
            <td style="text-align:center;">DES</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>SALTAR</td>
            <td style="text-align:center;">FOR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>SENTIR MOTIVA&Ccedil;&Atilde;O</td>
            <td style="text-align:center;">SAB</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>SOBREVIV&Ecirc;NCIA</td>
            <td style="text-align:center;">SAB</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>USAR CORDAS</td>
            <td style="text-align:center;">DES</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
          <tr>
            <td>USAR INSTRUMENTO M&Aacute;GICO</td>
            <td style="text-align:center;">CAR</td>
            <td class="border"></td>
            <td style="border-bottom:1px solid black;font-size:12px;">=</td>
            <td style="border-bottom:1px solid black;font-size:12px;">+</td>
            <td style="border-bottom:1px solid black;border-right:1px solid black;font-size:12px;">+</td>
          </tr>
        </table>
        <!--- - - - - - - - - - - - - - - - - - - - - - - - - - - - HABILIDADES - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <table>
          <tr>
            <td style="font-size:8px">HABILIDADE</td>
            <td style="font-size:8px;width:17%;">VALOR</td>
            <td style="font-size:8px">MOD DE.<br>HABILIDADE</td>
            <td style="font-size:8px">VALOR <br>TEMPOR&Aacute;RIO</td>
            <td style="font-size:8px">MOD.<br>TEMPOR&Aacute;RIO</td>
          </tr>
          <tr>
            <td class="hab">FOR<br>FOR&Ccedil;A</td>
            <td class="border"><?php echo $this->input->post('forca'); ?></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
          <tr>
            <td  class="hab">CON<br>CONSTITUI&Ccedil;&Atilde;O</td>
            <td class="border"><?php echo $this->input->post('constituicao'); ?></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
          <tr>
            <td  class="hab">DES<br>DESTREZA</td>
            <td class="border"><?php echo $this->input->post('destreza'); ?></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
          <tr>
            <td  class="hab">INT<br>INTELIG&Ecirc;NCIA</td>
            <td class="border"><?php echo $this->input->post('inteligencia'); ?></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
          <tr>
            <td  class="hab">SAB<br>SABEDORIA</td>
            <td class="border"><?php echo $this->input->post('sabedoria'); ?></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
          <tr>
            <td  class="hab">CAR<br>CARISMA</td>
            <td class="border"><?php echo $this->input->post('carisma'); ?></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
        </table>
        <!--- - - - - - - - - - - - - - - - - - - - - - - - - - - - RESISTENCIA - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <table class="resistencia" style="text-align:center;">
          <tr>
            <td style="font-size:12px">RESIST&Ecirc;NCIA</td>
            <td style="font-size:08px">TOTAL</td>
            <td></td>
            <td style="font-size:08px">B&Ocirc;NUS<br>BASE</td>
            <td></td>
            <td style="font-size:08px;">MOD <br>HABIL</td>
            <td></td>
            <td style="font-size:08px">MOD<br>M&Aacute;GICO</td>
            <td></td>
            <td style="font-size:08px">OUTROS</td>
            <td></td>
            <td style="font-size:08px">MOD<br>TEMP</td>
          </tr>
          <tr>
            <td class="hab">FORTITUDE<BR>(CONSTITUI&Ccedil;&Atilde;O)</td>
            <td class="border"></td>
            <td style="width:1%">=</td>
            <td class="border"></td>
            <td style="width:1%">+</td>
            <td class="border"></td>
            <td style="width:1%">+</td>
            <td class="border"></td>
            <td style="width:1%">+</td>
            <td class="border"></td>
            <td style="width:1%">+</td>
            <td class="border"></td>
          </tr>
          <tr>
            <td class="hab">REFLEXOS<br>(DESTREZA)</td>
            <td class="border"></td>
            <td style="width:1%">=</td>
            <td class="border"></td>
            <td class="">+</td>
            <td class="border"></td>
            <td class="">+</td>
            <td class="border"></td>
            <td class="">+</td>
            <td class="border"></td>
            <td class="">+</td>
            <td class="border"></td>
          </tr>
          <tr>
            <td class="hab">VONTADE<br>(SABEDORIA)</td>
            <td class="border"></td>
            <td style="width:1%">=</td>
            <td class="border"></td>
            <td class="">+</td>
            <td class="border"></td>
            <td class="">+</td>
            <td class="border"></td>
            <td class="">+</td>
            <td class="border"></td>
            <td class="">+</td>
            <td class="border"></td>
          </tr>
        </table>
        <!--- - - - - - - - - - - - - - - - - - - - - - - - - - - - BONUS - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <table>
          <tr>
            <td class="hab">B&Ocirc;NUS BASE DE ATAQUE</td>
            <td class="border" style="width:19%"></td>
            <td class="hab">RESIST&Ecirc;NCIA<br>MAGIA</td>
            <td class="border" style="width:19%"></td>
          </tr>
        </table>
        <table style="width:45%;font-size:8px;">
          <tr>
            <td class="hab" style="width:1%;">AGARRAR</td>
            <td class="border"></td>
            <td style="width:1%;">=</td>
            <td class="border"></td>
            <td style="width:1%;">+</td>
            <td class="border"></td>
            <td style="width:1%;">+</td>
            <td class="border"></td>
            <td style="width:1%;">+</td>
            <td class="border"></td>
          </tr>
          <tr>
            <td></td>
            <td>TOTAL</td>
            <td></td>
            <td>B&Ocirc;NUS BASE</td>
            <td></td>
            <td>MOD.<br>FOR&Ccedil;A</td>
            <td></td>
            <td>MOD.<br>TAMANHO</td>
            <td></td>
            <td>OUTROS</td>
          </tr>
        </table>
        <!--- - - - - - - - - - - - - - - - - - - - - - - - - - - - ATAQUE - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
        <table style="font-size:8px;width:45%;border-collapse:collapse;">
          <tr>
            <td class="hab" style="width:30%;">ATAQUE</td>
            <td class="hab">B&Ocirc;NUS ATAQUE</td>
            <td class="hab">DANO</td>
            <td class="hab">SUCESSO DECISIVO</td>
          </tr>
          <tr>
            <td class="border"><br><br></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
          <tr>
            <td class="hab">ALCANCE</td>
            <td class="hab">TIPO</td>
            <td class="hab" colspan="2">OBSERVA&Ccedil;&Otilde;ES</td>
          </tr>
          <tr>
            <td class="border"><br><br></td>
            <td class="border"></td>
            <td class="border" colspan="2"></td>
          </tr>
        </table>
        <table style="font-size:8px;">
          <tr>
            <td>MUNI&Ccedil;&Atilde;O</td>
            <td>_________________________</td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
        </table>
        <table style="font-size:8px;width:45%;border-collapse:collapse;">
          <tr>
            <td class="hab" style="width:30%;">ATAQUE</td>
            <td class="hab">B&Ocirc;NUS ATAQUE</td>
            <td class="hab">DANO</td>
            <td class="hab">SUCESSO DECISIVO</td>
          </tr>
          <tr>
            <td class="border"><br><br></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
          <tr>
            <td class="hab">ALCANCE</td>
            <td class="hab">TIPO</td>
            <td class="hab" colspan="2">OBSERVA&Ccedil;&Otilde;ES</td>
          </tr>
          <tr>
            <td class="border"><br><br></td>
            <td class="border"></td>
            <td class="border" colspan="2"></td>
          </tr>
        </table>
        <table style="font-size:8px;">
          <tr>
            <td>MUNI&Ccedil;&Atilde;O</td>
            <td>_________________________</td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
        </table>
        <table style="font-size:8px;width:45%;border-collapse:collapse;">
          <tr>
            <td class="hab" style="width:30%;">ATAQUE</td>
            <td class="hab">B&Ocirc;NUS ATAQUE</td>
            <td class="hab">DANO</td>
            <td class="hab">SUCESSO DECISIVO</td>
          </tr>
          <tr>
            <td class="border"><br><br></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
          <tr>
            <td class="hab">ALCANCE</td>
            <td class="hab">TIPO</td>
            <td class="hab" colspan="2">OBSERVA&Ccedil;&Otilde;ES</td>
          </tr>
          <tr>
            <td class="border"><br><br></td>
            <td class="border"></td>
            <td class="border" colspan="2"></td>
          </tr>
        </table>
        <table style="font-size:8px;">
          <tr>
            <td>MUNI&Ccedil;&Atilde;O</td>
            <td>_________________________</td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
        </table>
        <table style="font-size:8px;width:45%;border-collapse:collapse;">
          <tr>
            <td class="hab" style="width:30%;">ATAQUE</td>
            <td class="hab">B&Ocirc;NUS ATAQUE</td>
            <td class="hab">DANO</td>
            <td class="hab">SUCESSO DECISIVO</td>
          </tr>
          <tr>
            <td class="border"><br><br></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
          <tr>
            <td class="hab">ALCANCE</td>
            <td class="hab">TIPO</td>
            <td class="hab" colspan="2">OBSERVA&Ccedil;&Otilde;ES</td>
          </tr>
          <tr>
            <td class="border"><br><br></td>
            <td class="border"></td>
            <td class="border" colspan="2"></td>
          </tr>
        </table>
        <table style="font-size:8px;">
          <tr>
            <td>MUNI&Ccedil;&Atilde;O</td>
            <td>_________________________</td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
        </table>
        <table style="font-size:8px;width:45%;border-collapse:collapse;">
          <tr>
            <td class="hab" style="width:30%;">ATAQUE</td>
            <td class="hab">B&Ocirc;NUS ATAQUE</td>
            <td class="hab">DANO</td>
            <td class="hab">SUCESSO DECISIVO</td>
          </tr>
          <tr>
            <td class="border"><br><br></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
          <tr>
            <td class="hab">ALCANCE</td>
            <td class="hab">TIPO</td>
            <td class="hab" colspan="2">OBSERVA&Ccedil;&Otilde;ES</td>
          </tr>
          <tr>
            <td class="border"><br><br></td>
            <td class="border"></td>
            <td class="border" colspan="2"></td>
          </tr>
        </table>
        <table style="font-size:8px;">
          <tr>
            <td>MUNI&Ccedil;&Atilde;O</td>
            <td>_________________________</td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
            <td class="border"></td>
          </tr>
        </table>
      </div>
<!--- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - PAGINA 2 - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->

      <br><br>
      <table style="margin-top:5%;font-size:10px; width:31%;"  class="meio">
        <tr>
          <td class="hab">MAGIAS</td>
        </tr>
        <tr>
          <td class="talentos">0&deg;</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos">1&deg;</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos">2&deg;</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos">3&deg;</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos">4&deg;</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos">5&deg;</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos">6&deg;</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos">7&deg;</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos">8&deg;</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos">9&deg;</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
      </table>
      <table style="margin-top:5%; width:25%;" class="meio">
        <tr>
          <td class="hab">TALENTOS</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
      </table>
      <br><br>
      <table width="40%" class="jogador">
          <tr>
            <td>CAMPANHA</td>
          </tr>
      </table>
      <table width="40%">
        <tr>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td>PONTOS DE EPERI&Ecirc;NCIA</td>
        </tr>
      </table>
      <table style="width:40%;font-size:8px;border-collapse:collapse;margin-bottom:5px;">
        <tr>
          <td class="hab">EQUIPAMENTO</td>
        </tr>
      </table>
      <table style="width:40%;font-size:8px;border-collapse:collapse;">
        <tr>
          <td class="hab" colspan="2" width="1">ARMADURA</td>
          <td class="hab" width="1">TIPO</td>
          <td class="hab" width="1">B&Ocirc;NUS</td>
          <td class="hab" width="1">DES MAX</td>
        </tr>
        <tr>
          <td class="border" colspan="2"><br><br></td>
          <td class="border"></td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
        <tr>
          <td class="hab">PENALIDADE ARMADURA</td>
          <td class="hab">FALHA MAGIA</td>
          <td class="hab">DESLOC </td>
          <td class="hab">PESO</td>
          <td class="hab">PROP ESPECIAIS</td>
        </tr>
        <tr>
          <td class="border"><br><br></td>
          <td class="border"></td>
          <td class="border"></td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
      </table>
      <br>
      <table style="width:40%;font-size:8px;border-collapse:collapse;">
        <tr>
          <td colspan="1" class="hab" width="1">ESCUDO</td>
          <td class="hab" width="1">B&Ocirc;NUS</td>
          <td class="hab" width="1">PESO</td>
          <td class="hab" width="1">DES MAX</td>
        </tr>
        <tr>
          <td colspan="1" class="border"><br><br></td>
          <td class="border"></td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
        <tr>
          <td class="hab">FALHA MAGIA</td>
          <td class="hab" colspan="4">PROPRIEDADES ESPECIAIS</td>
        </tr>
        <tr>
          <td class="border"><br><br></td>
          <td class="border" colspan="4"></td>
        </tr>
      </table>
      <br>
      <table style="width:40%;font-size:8px;border-collapse:collapse;">
        <tr>
          <td colspan="1" class="hab" width="1">PROTE&Ccedil;&Atilde;O</td>
          <td class="hab" width="1">B&Ocirc;NUS</td>
          <td class="hab" width="1">PESO</td>
          <td class="hab" width="1">PROP ESPECIAIS</td>
        </tr>
        <tr>
          <td colspan="1" class="border"><br><br></td>
          <td class="border"></td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
      </table>
      <table  class="meio">
        <tr>
          <td class="magias">MAG<br>CONHECIDAS</td>
          <td class="magias">CD<br>TRM</td>
          <td class="magias">NIVEL</td>
          <td class="magias">MAG/DIA</td>
          <td class="magias">MAG<br>ADICIONAIS</td>
        </tr>
        <tr>
          <td class="border"></td>
          <td class="border"></td>
          <td style="text-align:center;">0</td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
        <tr>
          <td class="border"></td>
          <td class="border"></td>
          <td style="text-align:center;">1</td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
        <tr>
          <td class="border"></td>
          <td class="border"></td>
          <td style="text-align:center;">2</td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
        <tr>
          <td class="border"></td>
          <td class="border"></td>
          <td style="text-align:center;">3</td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
        <tr>
          <td class="border"></td>
          <td class="border"></td>
          <td style="text-align:center;">4</td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
        <tr>
          <td class="border"></td>
          <td class="border"></td>
          <td style="text-align:center;">5</td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
        <tr>
          <td class="border"></td>
          <td class="border"></td>
          <td style="text-align:center;">6</td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
        <tr>
          <td class="border"></td>
          <td class="border"></td>
          <td style="text-align:center;">7</td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
        <tr>
          <td class="border"></td>
          <td class="border"></td>
          <td style="text-align:center;">8</td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
        <tr>
          <td class="border"></td>
          <td class="border"></td>
          <td style="text-align:center;">9</td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>

      </table>
      <table class="meio">
        <tr>
          <td class="hab">HABILIDADES ESPECIAIS</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
      </table>
      <br>
      <table style="width:40%;font-size:8px;border-collapse:collapse;">
        <tr>
          <td colspan="1" class="hab" width="1">PROTE&Ccedil;&Atilde;O</td>
          <td class="hab" width="1">B&Ocirc;NUS</td>
          <td class="hab" width="1">PESO</td>
          <td class="hab" width="1">PROP ESPECIAIS</td>
        </tr>
        <tr>
          <td colspan="1" class="border"><br><br></td>
          <td class="border"></td>
          <td class="border"></td>
          <td class="border"></td>
        </tr>
      </table>
      <br>
      <table  style="width:40%;font-size:8px;border-collapse:collapse;">
        <tr>
          <td colspan="6" class="hab">OUTROS ITENS</td>
        </tr>
        <tr>
          <td class="border" style="width:40%">ITEM</td>
          <td class="border">PAG</td>
          <td class="border">PESO</td>
          <td class="border" style="width:40%">ITEM</td>
          <td class="border">PAG</td>
          <td class="border">PESO</td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
        </tr>
        <tr>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border"><br></td>
          <td class="border">TOTAL PESO CARREGADO</td>
          <td style="border:2px solid" colspan="2"><br></td>
        </tr>
        <tr>
          <td colspan="6" class="hab">DINHEIRO</td>
        </tr>
          <tr>
            <td class="border" colspan="6">PC - </td>
          </tr>
          <tr>
            <td class="border" colspan="6">PP - </td>
          </tr>
          <tr>
            <td class="border" colspan="6">PO - </td>
          </tr>
          <tr>
            <td class="border" colspan="6">PL - </td>
          </tr>
      </table>
      <table style="visibility: hidden;" class="meio">
        <tr>
          <td class="hab">TALENTOS</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
      </table>
      <table class="meio" style="margin-right:56px">
        <tr>
          <td class="hab">IDIOMAS</td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
        <tr>
          <td class="talentos"><br></td>
        </tr>
      </table>
    </div>
    </body>
</html>
