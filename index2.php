<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/css.css" media="screen"/>
        <script type="text/javascript" src="view/javascript/general_1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <title>***EBRNET***</title>
    </head>
    <body onload="mueveReloj()">
        <div id="corpo" onload="setTime()">
            <div id="plantonistas" class="margem4">
                <h1>PLANTONISTAS</h1>
            </div>

            <div id="tabela1">
                <table>
                    <tr>
                        <td class="tabelaTD1"><img src="view/img/EBR/Data.png"></td>
                        <td class="tabelaTD1"><img src="view/img/EBR/analista.png"></td>
                        <td class="tabelaTD1"><img src="view/img/EBR/vix.png"></td>
                        <td class="tabelaTD1"><img src="view/img/EBR/acz.png"></td>

                    </tr>
                    <tr>
                        <td class="tabelaTD2">28/03</td>
                        <td class="tabelaTD2">Renan</td>
                        <td class="tabelaTD2">Whesley</td>
                        <td class="tabelaTD2">Alex Sandro</td>
                    </tr>
                </table>
            </div>

            <div id="folga" class="margem4">
                <h1>FOLGA</h1>
            </div>

            <div id="tabela2">
                <table>
                    <tr>
                        <td class="tabelaTD1"><img src="view/img/EBR/Data.png"></td>
                        <td class="tabelaTD1"><img src="view/img/EBR/analista.png"></td>
                        <td class="tabelaTD1"><img src="view/img/EBR/vix.png"></td>

                    </tr>
                    <tr>
                        <td class="tabelaTD2">25/04</td>
                        <td class="tabelaTD2">Emanoel</td>
                        <td class="tabelaTD2">Felipe</td>
                    </tr>

                </table>
            </div>
            <!--<div id="ferias">
                <br>
                <center>
                    <font color=red face=arial size=80>
                    <b><i> Analista Welignton: Ferias 19/02 ate 20/03 </i></b>
                    </font>
                </center>
            </div>-->
        </div>
        <div id="relogio">

            <form name="form_reloj">
                <input type="text" name="reloj" size="10" style="background-color : Black; color : White; font-family : Verdana, Arial, Helvetica; font-size : 50pt; text-align : center;" onfocus="window.document.form_reloj.reloj.blur()">
            </form>
        </div>
        <img src="view/img/EBR/ebr.JPG">
    </body>
</html>
