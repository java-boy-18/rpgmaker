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
        <?php
        //$jogador = $_POST['jogador'];
        //$personagem = $_POST['personagem']
        ?>
        <div class="all" style="margin-top: 2%;">
            <table id="table" >
                <tr class="head">
                    <td colspan="4"><?php //echo $personagem; ?></td>
                    <td colspan="4"><?php //echo $jogador; ?></td>
                </tr>
                <tr>
                    <td class="table" colspan="4">NOME DO PERSONAGEM</td>
                    <td class="table" colspan="4">JOGADOR</td>
                    <td id="logo "rowspan="4"></td>
                </tr>
                <!--<tr><td><br></td></tr>-->
                <tr>
                    <td></td>
                    <td colspan="2"></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td class="table" colspan="4">CLASSE E NIVEL</td>
                    <td class="table" colspan="2">RA&Ccedil;A</td>
                    <td class="table" >TEND&Ecirc;NCIA</td>
                    <td class="table" >DIVINDADE</td>
                </tr>
                <!--<tr><td><br></td></tr>-->
                <tr>
                    <td style="border-bottom: 1px solid black"></td>
                    <td style="border-bottom: 1px solid black"></td>
                    <td style="border-bottom: 1px solid black"></td>
                    <td style="border-bottom: 1px solid black"></td>
                    <td style="border-bottom: 1px solid black"></td>
                    <td style="border-bottom: 1px solid black"></td>
                    <td style="border-bottom: 1px solid black"></td>
                    <td style="border-bottom: 1px solid black"></td>
                </tr>
                <tr>
                    <td>TAMANHO</td>
                    <td>IDADE</td>
                    <td>SEXO</td>
                    <td>ALTURA</td>
                    <td>PESO</td>
                    <td>OLHOS</td>
                    <td>CABELOS</td>
                    <td>PELE</td>
                    <td style="text-align: center" >PLANILHA DE PERSONAGEM</td>
                </tr>
            </table>
            <div id="pv">
                <table class="PV">
                    <tr>
                        <td><br></td>
                        <td>TOTAL</td>
                        <td>FERIMENTOS/PVs ATUAIS</td>
                        <td>DANO<br>POR CONTUS&Atilde;O</td>
                        <td>DESLOCAMENTO</td>
                    </tr>
                    <tr>
                        <td style="width: 14.5%; text-align: center;" class="hab"><font size="4"><strong>PV</strong></font><br><font size="1" >PONTOS DE VIDA</td>
                        <td style="width: 10%;" class="valores"></td>
                        <td style="width: 40%;" class="valores"></td>
                        <td style="width: 20%;" class="valores"></td>
                        <td class="valores"></td>
                    </tr>
                    <tr></tr>
                </table>
            </div>
            <div id="ca">
                <table class="CA">
                    <tr>
                        <td style=" width: 16%; text-align: center;" class="hab"><font size="4"><strong>CA</strong></font><br><font size="1" >CLASSE DA ARMADURA</td>
                        <td class="valores" style="width: 5%"></td>
                        <td style="width: 10% ">= 10 +</td>
                        <td class="valores" style="width: 1%"></td>
                        <td>+</td>
                        <td class="valores" style="width: 1%"></td>
                        <td>+</td>
                        <td class="valores" style="width: 1%"></td>
                        <td>+</td>
                        <td class="valores" style="width: 1%"></td>
                        <td>+</td>
                        <td class="valores" style="width: 1%"></td>
                        <td>+</td>
                        <td class="valores" style="width: 1%"></td>
                        <td>+</td>
                        <td class="valores" style="width: 1%"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>TOTAL</td>
                        <td></td>
                        <td>B&Ocirc;NUS DE<br>ARMADURA</td>
                        <td></td>
                        <td>B&Ocirc;NUS DE<br>ESCUDO</td>
                        <td></td>
                        <td>MOD. DE<br>DESTREZA</td>
                        <td></td>
                        <td>MOD. DE<br>TAMANHO</td>
                        <td></td>
                        <td>ARMADURA<br>NATURAL</td>
                        <td></td>
                        <td>MOD. DE<br>DEFLEX&Atilde;O</td>
                        <td></td>
                        <td>OUTROS</td>
                    </tr>
                    <tr></tr>
                </table>
            </div>
            <div id="direita">
                <table width="100%;" style="border-collapse: collapse;">
                    <tr >
                        <td colspan="3" class="pericias" width="60%" style="text-indent: 50px;border: 1px solid black;" >PER&Iacute;CIAS</td>
                        <td colspan="2" class="pericias" style=" line-height: 0.5; text-align: right;border: 1px solid black;"><font size="1">GRADUA&Ccedil;&Atilde;O M&Aacute;XIMA<br>(CLASSE/OUTRA CLASSE)</font></td>
                        <td  style="width: 10%;border: 1px solid black;"> / </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid black; width: 100%">NOME DA PER&Iacute;CIA</td>
                        <td style="border: 1px solid black;"><font size="1">HABILIDADE CHAVE</font></td>
                        <td style="border: 1px solid black;"><font size="1">MOD. DE<br>PER&Iacute;CIAS</font></td>
                        <td style="border: 1px solid black;"><font size="1">MOD. DE<br>HABILIDADE</font></td>
                        <td style="border: 1px solid black;"><font size="1">GRADUA&Ccedil;&Atilde;O</font></td>
                        <td style="border: 1px solid black;"><font size="1">OUTROS</font></td>
                    </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">ABRIR FECHADURA</td>
                       <td class="pericia">DES</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">ACROBACIA</td>
                       <td class="pericia">DES</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">ADESTRAR ANIMAIS</td>
                       <td class="pericia">CAR</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">ARTE DA FUGA</td>
                       <td class="pericia">DES*</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">ATUA&Ccedil;&Atilde;O(________________)</td>
                       <td class="pericia">CAR</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">ATUA&Ccedil;&Atilde;O(________________)</td>
                       <td class="pericia">CAR</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">ATUA&Ccedil;&Atilde;O(_________________)</td>
                       <td class="pericia">CAR</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">AVALIA&Ccedil;&Atilde;O</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">BLEFAR</td>
                       <td class="pericia">CAR</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">CAVALGAR(__________)</td>
                       <td class="pericia">DES</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">CONCENTRA&Ccedil;&Atilde;O</td>
                       <td class="pericia">CON</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">CONHECIMENTO(___________)</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">CONHECIMENTO(___________)</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">CONHECIMENTO(___________)</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">CONHECIMENTO(___________)</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">CONHECIMENTO(___________)</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">CURA</td>
                       <td class="pericia">SAB</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">DECIFRAR ESCRITA</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">DIPLOMACIA</td>
                       <td class="pericia">CAR</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">DISFARCE</td>
                       <td class="pericia">CAR</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">EQUIL&Iacute;BRIO</td>
                       <td class="pericia">DES*</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">ESCALAR</td>
                       <td class="pericia">FOR*</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">ESCONDER-SE</td>
                       <td class="pericia">DES*</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">FALSIFICA&Ccedil;&Atilde;O</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">FURTIVIDADE</td>
                       <td class="pericia">CAR</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">IDENTIFICAR MAGIA</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">INTIMIDAR</td>
                       <td class="pericia">CAR</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">NATA&Ccedil;&Atilde;O</td>
                       <td class="pericia">FOR*</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">OBSERVAR</td>
                       <td class="pericia">SAB</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">OBTER INFORMA&Ccedil;&Atilde;O</td>
                       <td class="pericia">CAR</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">OF&Iacute;CIO(___________________)</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">OF&Iacute;CIO(___________________)</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">OF&Iacute;CIO(___________________)</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">OPERAR MECANISMO</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">OUVIR</td>
                       <td class="pericia">SAB</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">PROCURAR</td>
                       <td class="pericia">INT</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">PROFISS&Atilde;O(_______________)</td>
                       <td class="pericia">SAB</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">PROFISS&Atilde;O(_______________)</td>
                       <td class="pericia">SAB</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">PRESTIDIGITA&Ccedil;&Atilde;O</td>
                       <td class="pericia">DES*</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">SALTAR</td>
                       <td class="pericia">FOR*</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">SENTIR MOVIMENTA&Ccedil;&Atilde;O</td>
                       <td class="pericia">SAB</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">SOBREVIV&Ecirc;NCIA</td>
                       <td class="pericia">SAB</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">USAR CORDAS</td>
                       <td class="pericia">DES</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">USAR INSTRUMENTO M&Aacute;GICO</td>
                       <td class="pericia">CAR</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">__________________________</td>
                       <td class="pericia">_________</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">__________________________</td>
                       <td class="pericia">_________</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                   <tr>
                       <td class="pericia"><input type="checkbox">__________________________</td>
                       <td class="pericia">_________</td>
                       <td style="border: 1px solid black" class="pericia"></td>
                       <td class="pericia">=_________</td>
                       <td class="pericia">+_________</td>
                       <td class="pericia">+_________</td>
                   </tr>
                </table>
            </div>
            <div id="direita" style="margin-right: 0px;" >
                <table class="direita" >
                    <tr>
                        <td class="hab" style=" border:1px solid black;width: 130px;"><font size="4"><strong>TOQUE</strong></font><br><font size="1" >CLASSE DE ARAMADURA</font></td>
                        <td style=" width: 50px;border:1px solid black;"> </td>
                        <td class="hab" style="width: 130px;border:1px solid black;"><font size="4"><strong>SURPRESA</strong></font><br><font size="1" >CLASSE DE ARAMADURA</font></td>
                        <td style="border:1px solid black; width: 50px"></td>
                    </tr>
                </table>
                <table class="direita">
                    <tr>
                        <td class="hab" style=" border:1px solid black;width: 130px;"><font size="4"><strong>INICIATIVA</strong></font><br><font size="1" >MODIFICADOR</font></td>
                        <td style=" width: 50px;border:1px solid black;"> </td>
                        <td>=</td>
                        <td style="width: 80px;border:1px solid black;"></td>
                        <td>+</td>
                        <td style="width: 80px;border:1px solid black;"></td>
                    </tr>
                    <tr>
                        <td style="width: 130px;"></td>
                        <td style=" width: 50px;">TOTAL</td>
                        <td></td>
                        <td >MOD. DE<br>DESTREZA</td>
                        <td></td>
                        <td>OUTROS</td>
                    </tr>
                </table>
            </div>
            <table class="habilidades">
                <tr>
                    <td><center><font size="1">HABILIDADE</font></center></td>
                    <td><center><font size="1">VALOR</font></center></td>
                    <td><center><font size="1">MOD.DE<br>HABILIDADE</font></center></td>
                    <td><center><font size="1">VALOR<br>TEMPOR&Aacute;RIO</font></center></td>
                    <td><center><font size="1">MOD.<br>TEMPOR&Aacute;RIO</font></center></td>
                </tr>
                <tr>
                    <td class="hab"><strong><font size="4">FOR</strong></font><br><font size="1" >FOR&Ccedil;A</font></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                </tr>
                <tr>
                    <td class="hab"><font size="4"><strong>DES</strong></font><br><font size="1" >DESTREZA</td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                </tr>
                <tr>
                    <td class="hab"><font size="4"><strong>CON</strong></font><br><font size="1" >CONSTITUI&Ccedil;&Atilde;O</td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                </tr>
                <tr>
                    <td class="hab" ><font size="4"><strong>INT</strong></font><br><font size="1" >INTELIG&Ecirc;NCIA</td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                </tr>
                <tr>
                    <td class="hab"><font size="4"><strong>SAB</strong></font><br><font size="1" >SABEDORIA</td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                </tr>
                <tr>
                    <td class="hab"><font size="4"><strong>CAR</strong></font><br><font size="1" >CARISMA</td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                    <td class="valores"></td>
                </tr>
            </table>
              <table style="width: 65%;">
                <tr>
                  <td colspan="2" width="22%">TESTE DE RESIST&Ecirc;NCIA</td>
                  <td>TOTAL</td>
                  <td></td>
                  <td>B&Ocirc;NUS<br>BASE</td>
                  <td></td>
                  <td>MOD.DE<br>HABILIDADE</td>
                  <td></td>
                  <td>MOD.<br>M&Aacute;GICO</td>
                  <td></td>
                  <td>OUTROS</td>
                  <td></td>
                  <td>MOD.<br>TEMPOR&Aacute;RIO</td>
                  <td rowspan="4" style="vertical-align: text-top; text-align: center;border: 1px solid black;"><font size="1">MOD. CONDICIONAIS</font></td>
                </tr>
                <tr>
                  <td colspan="2" class="pericias" style="width: 5%;text-align: center;"><strong>FORTITUDE</strong><br><font size="1">(CONSTITUI&Ccedil;&Atilde;O)</font></td>
                  <td style="border: 1px solid black"></td>
                  <td>=</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td colspan="2" class="pericias" style="text-align: center;"><strong>REFLEXOS</strong><br><font size="1">(DESTREZA)</font></td>
                  <td style="border: 1px solid black"></td>
                  <td>=</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td colspan="2" class="pericias" style="text-align: center;"><strong>VONTADE</strong><br><font size="1">(SABEDORIA)</font></td>
                  <td style="border: 1px solid black"></td>
                  <td>=</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                  <td>+</td>
                  <td style="border: 1px solid black"></td>
                </tr>
              </table>
              <table width="60%" style="margin-top: 1%">
                <tr>
                  <td class="pericias"><strong>B&Ocirc;NUS BASE DE ATAQUE</strong></td>
                  <td width="10%" style="border: 1px solid black"></td>
                  <td class="pericias"><strong>RESIST&Ecirc;NCIA<br> &Agrave; MAGIA</strong></td>
                  <td width="10%" style="border: 1px solid black"></td>
                </tr>
              </table>
              <table width="60%">
                <tr>
                  <td class="pericias" style="text-align: center;">AGARRAR<br><font size="1">MODIFICADOR</font></td>
                  <td style="border: 1px solid black"></td>
                  <td style="text-align: center;">=</td>
                  <td style="border: 1px solid black"></td>
                  <td style="text-align: center;">+</td>
                  <td style="border: 1px solid black"></td>
                  <td style="text-align: center;">+</td>
                  <td style="border: 1px solid black"></td>
                  <td style="text-align: center;">+</td>
                  <td style="border: 1px solid black"></td>
                </tr>
                <tr>
                  <td></td>
                  <td style="text-align: center;">TOTAL</td>
                  <td></td>
                  <td style="text-align: center;">B&Ocirc;NUS<br>BASE</td>
                  <td></td>
                  <td style="text-align: center;">MOD. DE<br>FOR&Ccedil;A</td>
                  <td></td>
                  <td style="text-align: center;">MOD. DE<br>TAMANHO</td>
                  <td></td>
                  <td style="text-align: center;">OUTROS</td>
                </tr>
              </table>
              <table  width="65%" style="border-collapse: collapse;">
                <tr>
                  <td class="pericias" style="border: 1px solid white">ATAQUE</td>
                  <td class="pericias" style="border: 1px solid white">B&Ocirc;NUS DE ATAQUE</td>
                  <td class="pericias" style="border: 1px solid white">DANO</td>
                  <td class="pericias" style="border: 1px solid white">SUCESSO DECISIVO</td>
                </tr>
                <tr>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                </tr>
                <tr>
                  <td class="pericias" style="border: 1px solid white">ALCANCE</td>
                  <td class="pericias" style="border: 1px solid white">TIPO</td>
                  <td class="pericias" style="border: 1px solid white" colspan="2">OBSERVA&Ccedil;&Otilde;ES</td>
                  <td></td>
                </tr>
                <tr>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black" colspan="2"><br></td>
                  <td height="1%"><br></td>
                </tr>
                <tr>
                  <td colspan="4">MUNI&Ccedil;&Atilde;O ________________________________ [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ][ ]</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
              <table  width="65%" style="border-collapse: collapse;">
                <tr>
                  <td class="pericias" style="border: 1px solid white">ATAQUE</td>
                  <td class="pericias" style="border: 1px solid white">B&Ocirc;NUS DE ATAQUE</td>
                  <td class="pericias" style="border: 1px solid white">DANO</td>
                  <td class="pericias" style="border: 1px solid white">SUCESSO DECISIVO</td>
                </tr>
                <tr>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                </tr>
                <tr>
                  <td class="pericias" style="border: 1px solid white">ALCANCE</td>
                  <td class="pericias" style="border: 1px solid white">TIPO</td>
                  <td class="pericias" style="border: 1px solid white" colspan="2">OBSERVA&Ccedil;&Otilde;ES</td>
                  <td></td>
                </tr>
                <tr>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black" colspan="2"><br></td>
                  <td height="1%"><br></td>
                </tr>
                <tr>
                  <td colspan="4">MUNI&Ccedil;&Atilde;O ________________________________ [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ][ ]</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
              <table  width="65%" style="border-collapse: collapse;">
                <tr>
                  <td class="pericias" style="border: 1px solid white">ATAQUE</td>
                  <td class="pericias" style="border: 1px solid white">B&Ocirc;NUS DE ATAQUE</td>
                  <td class="pericias" style="border: 1px solid white">DANO</td>
                  <td class="pericias" style="border: 1px solid white">SUCESSO DECISIVO</td>
                </tr>
                <tr>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                </tr>
                <tr>
                  <td class="pericias" style="border: 1px solid white">ALCANCE</td>
                  <td class="pericias" style="border: 1px solid white">TIPO</td>
                  <td class="pericias" style="border: 1px solid white" colspan="2">OBSERVA&Ccedil;&Otilde;ES</td>
                  <td></td>
                </tr>
                <tr>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black" colspan="2"><br></td>
                  <td height="1%"><br></td>
                </tr>
                <tr>
                  <td colspan="4">MUNI&Ccedil;&Atilde;O ________________________________ [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ][ ]</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
              <table  width="65%" style="border-collapse: collapse;">
                <tr>
                  <td class="pericias" style="border: 1px solid white">ATAQUE</td>
                  <td class="pericias" style="border: 1px solid white">B&Ocirc;NUS DE ATAQUE</td>
                  <td class="pericias" style="border: 1px solid white">DANO</td>
                  <td class="pericias" style="border: 1px solid white">SUCESSO DECISIVO</td>
                </tr>
                <tr>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                </tr>
                <tr>
                  <td class="pericias" style="border: 1px solid white">ALCANCE</td>
                  <td class="pericias" style="border: 1px solid white">TIPO</td>
                  <td class="pericias" style="border: 1px solid white" colspan="2">OBSERVA&Ccedil;&Otilde;ES</td>
                  <td></td>
                </tr>
                <tr>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black" colspan="2"><br></td>
                  <td height="1%"><br></td>
                </tr>
                <tr>
                  <td colspan="4">MUNI&Ccedil;&Atilde;O ________________________________ [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ][ ]</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>
              <table  width="65%" style="border-collapse: collapse;">
                <tr>
                  <td class="pericias" style="border: 1px solid white">ATAQUE</td>
                  <td class="pericias" style="border: 1px solid white">B&Ocirc;NUS DE ATAQUE</td>
                  <td class="pericias" style="border: 1px solid white">DANO</td>
                  <td class="pericias" style="border: 1px solid white">SUCESSO DECISIVO</td>
                </tr>
                <tr>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                </tr>
                <tr>
                  <td class="pericias" style="border: 1px solid white">ALCANCE</td>
                  <td class="pericias" style="border: 1px solid white">TIPO</td>
                  <td class="pericias" style="border: 1px solid white" colspan="2">OBSERVA&Ccedil;&Otilde;ES</td>
                  <td></td>
                </tr>
                <tr>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black"><br></td>
                  <td height="1%" style="border: 1px solid black" colspan="2"><br></td>
                  <td height="1%"><br></td>
                </tr>
                <tr>
                  <td colspan="4">MUNI&Ccedil;&Atilde;O ________________________________ [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ][ ]  [ ][ ][ ][ ][ ][ ]</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </table>

                  <!-- ------------------------------------------------------------- PAGIINA 2 ------------------------------------------ -->
              <div style="margin-top: 3%;" class="page2">
                <table style="border-collapse: collapse;line-height: 0.65;" class="page2">
                  <tr>
                    <td class="pericias" style="line-height: 1.5;">MAGIAS</td>
                  </tr>
                  <tr>
                    <td style="line-height: 1.5;">DOM&Iacute;NIOS/ESCOLA ESPECIALIZADA</td>
                  </tr>
                  <tr>
                    <td>0:______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br></td>
                  </tr>
                  <tr>
                    <td>1:______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br></td>
                  </tr>
                  <tr>
                    <td>2:______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br></td>
                  </tr>
                  <tr>
                    <td>3:______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br></td>
                  </tr>
                  <tr>
                    <td>4:______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br></td>
                  </tr>
                  <tr>
                    <td>5:______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br></td>
                  </tr>
                  <tr>
                    <td>6:______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br></td>
                  </tr>
                  <tr>
                    <td>7:______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br></td>
                  </tr>
                  <tr>
                    <td>8:______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br></td>
                  </tr>
                  <tr>
                    <td>9:______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br>______________________________________<br></td>
                  </tr>
                </table>
                <table class="page2" style="border-collapse: collapse;margin-top: 4%; width: 50%;">
                  <tr>
                    <td class="pericias" width="100%">TESTE DE RESIST&Ecirc;NCIA &Agrave; MAGIA</td>
                    <td></td>
                    <td class="border"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>MOD.CD</td>
                  </tr>
                </table>
                <table class="page2" style="border-collapse: collapse;width: 50%;">
                  <tr>
                    <td class="pericias" width="100%">CHANCE DE FALHA ARCANA</td>
                    <td></td>
                    <td class="border"></td>
                    <td>%</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td>MOD.CD</td>
                  </tr>
                </table>
                <table class="page2" style="border-collapse: collapse;width: 51%;border:1px solid black;">
                  <tr>
                    <td style="text-align: left;"><font size="1">MODIFICADORES CONDICIONAIS</font></td>
                  </tr>
                  <tr>
                    <td><br></td>
                  </tr>
                  <tr>
                    <td><br></td>
                  </tr>
                  <tr>
                    <td><br></td>
                  </tr>
                </table>
                <table class="page2" style="margin-top: 5%;border-collapse: separate;">
                  <tr>
                    <td width="1%"><font size="1">MAGIAS<br>CONHECIDAS</font></td>
                    <td><font size="1">CD DO<br>TRM</font></td>
                    <td><font size="1">N&Iacute;VEL</font></td>
                    <td><font size="1">MAGIAS<br>POR DIA</font></td>
                    <td><font size="1">MAGIAS<br>ADICIONAIS</font></td>
                  </tr>
                  <tr>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                    <td>0<br></td>
                    <td class="border"><br></td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                    <td>1°<br></td>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                  </tr>
                  <tr>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                    <td>2°<br></td>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                  </tr>
                  <tr>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                    <td>3°<br></td>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                  </tr>
                  <tr>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                    <td>4°<br></td>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                  </tr>
                  <tr>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                    <td>5°<br></td>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                  </tr>
                  <tr>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                    <td>6°<br></td>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                  </tr>
                  <tr>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                    <td>7°<br></td>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                  </tr>
                  <tr>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                    <td>8°<br></td>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                  </tr>
                  <tr>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                    <td>9°<br></td>
                    <td class="border"><br></td>
                    <td class="border"><br></td>
                  </tr>
                </table>
                <table width="45%">
                  <tr>
                    <td class="pericias">TALENTOS</td>
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
                <table style="margin-top: 6%;" width="45%">
                  <tr>
                    <td class="pericias">HABILIDADES ESPECIAIS</td>
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
                <table style="margin-top: 4%" width="45%">
                  <tr>
                    <td class="pericias">IDIOMAS</td>
                  </tr>
                  <tr>
                    <td>Idiomas iniciais = Comum + idioma racial + uma por ponto de b&ocirc;nus de INT.</td>
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
              </div>
              <table width="50%" style="margin-top: 4%;">
                <tr>
                  <td style="border-bottom: 1px solid black;"></td>
                </tr>
                <tr>
                  <td>CAMPANHA</td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td style="border:1px solid black"><br></td>
                </tr>
                <tr>
                  <td>PONTOS DE EXPERI&Ecirc;NCIA</td>
                </tr>
              </table>
              <table width="50%" border="1" style="border-collapse: collapse;text-align: center;">
                <tr>
                  <td colspan="5" class="pericias" style="text-align: center;"><strong>EQUIPAMENTO</strong></td>
                </tr>
                <tr>
                  <td colspan="5"><br></td>
                </tr>
                <tr>
                  <td colspan="2" class="pericias" width="37%">ARMADURA/ITEM DE PROTE&Ccedil;&Atilde;O</td>
                  <td class="pericias" style="text-align: center;">TIPO</td>
                  <td width="17%" class="pericias" style="text-align: center;">B&Ocirc;NUS NA CA</td>
                  <td class="pericias" style="text-align: center;">DES MAX</td>
                </tr>
                <tr>
                  <td colspan="2"><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td width="22%" class="pericias"><font size="1">PENALIDADE DE ARMADURA</font></td>
                  <td width="22%" class="pericias"><font size="1">CHANCE DE FALHA DE MAGIA</font></td>
                  <td class="pericias"><font size="1">DESLOCAMENTO</font></td>
                  <td width="10%" class="pericias"><font size="1">PESO</font></td>
                  <td class="pericias"><font size="1">PROPRIEDADES ESPECIAIS</font></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td colspan="2" class="pericias" width="37%">ESCUDO/ITEM DE PROTE&Ccedil;&Atilde;O</td>
                  <td class="pericias" style="text-align: center;">PESO</td>
                  <td class="pericias" style="text-align: center;">B&Ocirc;NUS NA CA</td>
                  <td class="pericias" style="text-align: center;">PEN. DE ARMADURA</td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td class="pericias"><font size="1">CHANCE DE FALHA DE MAGIA</font></td>
                  <td colspan="4" class="pericias">PROPRIEDADES ESPECIAIS</td>
                </tr>
                <tr>
                  <td><br></td>
                  <td colspan="4"><br></td>
                </tr>
                <tr>
                  <td colspan="2" class="pericias">ITEM DE PROTE&Ccedil;&Atilde;O</td>
                  <td class="pericias"><font size="2">B&Ocirc;NUS NA CA</font></td>
                  <td class="pericias">PESO</td>
                  <td class="pericias"><font size="1">PROPRIEDADES ESPECIAIS</font></td>
                </tr>
                <tr>
                  <td colspan="2"><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td colspan="2" class="pericias">ITEM DE PROTE&Ccedil;&Atilde;O</td>
                  <td class="pericias"><font size="2">B&Ocirc;NUS NA CA</font></td>
                  <td class="pericias">PESO</td>
                  <td class="pericias"><font size="1">PROPRIEDADES ESPECIAIS</font></td>
                </tr>
                <tr>
                  <td colspan="2"><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                </table>
                <table width="50%" border="1" style="border-collapse: collapse; margin-top: 1%;">
                <tr>
                  <td colspan="6" class="pericias"><center><strong>OUTROS ITENS</strong></center></td>
                </tr>
                <tr>
                  <td>ITEM</td>
                  <td width="1%">PAG.</td>
                  <td width="1%">PESO</td>
                  <td width="38%">ITEM</td>
                  <td width="1%">PAG</td>
                  <td width="1%">PESO</td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><center>TOTAL DE PESO CARREGADO</center></td>
                  <td colspan="2"><br></td>
                </tr>
              </table>
              <table width="50%" style="border: 1px solid black;" style="border-collapse: collapse;">
                <tr>
                  <td colspan="13"><br></td>
                </tr>
                <tr>
                  <td><br></td>
                  <td style="border:1px solid black"><br></td>
                  <td width="1%"><br></td>
                  <td style="border:1px solid black"><br></td>
                  <td width="1%"><br></td>
                  <td style="border:1px solid black"><br></td>
                  <td width="1%"><br></td>
                  <td style="border:1px solid black"><br></td>
                  <td width="1%"><br></td>
                  <td style="border:1px solid black"><br></td>
                  <td width="1%"><br></td>
                  <td style="border:1px solid black"><br></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr style="text-align: center;">
                  <td><br></td>
                  <td width="13%"><strong><font size="1">CARGA<br>LEVE</strong></td>
                  <td><br></td>
                  <td width="13%"><strong><font size="1">CARGA<br>M&Eacute;DIA</strong></td>
                  <td><br></td>
                  <td width="13%"><strong><font size="1">CARGA<br>PESADA</strong></td>
                  <td><br></td>
                  <td width="13%"><strong><font size="1">ERGUER SOBRE<br>A CABE&Ccedil;A</font></strong></td>
                  <td><br></td>
                  <td width="13%"><strong><font size="1">ERGUER<br>DO CH&Atilde;O</strong></td>
                  <td><br></td>
                  <td width="13%"><strong><font size="1">EMPURRAR<br>OU ARRASTAR</strong></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
                <tr style="text-align: center;">
                  <td><br></td>
                  <td><br></td>
                  <td><br></td>
                  <td><br><td>
                  <td><br></td>
                  <td><br></td>
                  <td><font size="1">IGUAL A<br>CARGA MAX</font></td>
                  <td><br></td>
                  <td><font size="1">2x<br>CARGA MAX</font></td>
                  <td><br></td>
                  <td><font size="1">5x<br>CARGA MAX</font></td>
                  <td><br></td>
                  <td><br></td>
                </tr>
              </table>
              <table width="50%" style="border-collapse: collapse; border:1px solid black">
                <tr>
                  <td class="pericias"><strong><center>DINEHEIRO</center><strong></td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td>PC -</td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td>PP -</td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td>PO -</td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
                <tr>
                  <td>PL -</td>
                </tr>
                <tr>
                  <td><br></td>
                </tr>
              </table>
        </div>
    </body>
</html>