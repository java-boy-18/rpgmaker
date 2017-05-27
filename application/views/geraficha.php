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
        <div class="all" style="margin-top: 2%;">
          <!--- - - - - - - - - - - - - - - - - - - - - - - - - - - - CABEÇALHO - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
          <table style="width:100%;">
            <tr>
              <td colspan="4"></td>
              <td colspan="4"></td>
            </tr>
            <tr>
              <td colspan="4" class="jogador">NOME DO JOGADOR</td>
              <td colspan="4" class="jogador">NOME DO PERSONAGEM</td>
            </tr>
            <tr>
              <td colspan="4"></td>
              <td colspan="2"></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td class="jogador" colspan="4">CLASSE E N&Iacute;VEL</td>
              <td class="jogador" colspan="2">RA&Ccedil;A</td>
              <td class="jogador">TEND&Ecirc;NCIA</td>
              <td class="jogador">DIVINDADE</td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
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
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
            </tr>
            <tr>
              <td  class="hab">CON<br>CONSTITUI&Ccedil;&Atilde;O</td>
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
            </tr>
            <tr>
              <td  class="hab">DES<br>DESTREZA</td>
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
            </tr>
            <tr>
              <td  class="hab">INT<br>INTELIG&Ecirc;NCIA</td>
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
            </tr>
            <tr>
              <td  class="hab">SAB<br>SABEDORIA</td>
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
            </tr>
            <tr>
              <td  class="hab">CAR<br>CARISMA</td>
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
              <td class="border"></td>
            </tr>
          </table>
        </div>
    </body>
</html>
