{include file="view/inicio.tpl"}

<script>

    $(function () {
        setTimeout(function () {
            location.reload();
        }, 3000); // 3 * 60 * 1000
    });

</script>

<body onload="mueveReloj();">
    <div id="corpo" >

        <h1>PLANTONISTAS</h1>
        <table>
            <tr>
                <td class="tabelaTD1"><img src="view/img/EBR/Data.png"></td>
                <td class="tabelaTD1"><img src="view/img/EBR/analista.png"></td>
                <td class="tabelaTD1"><img src="view/img/EBR/vix.png"></td>
                <td class="tabelaTD1"><img src="view/img/EBR/acz.png"></td>

            </tr>
            {foreach from=$listaP item=row}
                <tr>
                    <td class="tabelaTD2">{$row.data}</td>
                    <td class="tabelaTD2">{$row.analista}</td>
                    <td class="tabelaTD2">{$row.tecnicovix}</td>
                    <td class="tabelaTD2">{$row.tecnicoacz}</td>
                </tr>
            {/foreach}
        </table>


        <h1>FOLGA</h1>


        <div id="tabela2">
            <table>
                <tr>
                    <td class="tabelaTD1"><img src="view/img/EBR/Data.png"></td>
                    <td class="tabelaTD1"><img src="view/img/EBR/analista.png"></td>
                    <td class="tabelaTD1"><img src="view/img/EBR/vix.png"></td>

                </tr>
                {foreach from=$listaF item=row}
                    <tr>
                        <td class="tabelaTD2">{$row.data}</td>
                        <td class="tabelaTD2">{$row.analista}</td>
                        <td class="tabelaTD2">{$row.tecnico}</td>
                    </tr>
                {/foreach}

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

    {include file="view/fim.tpl"}