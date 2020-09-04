{include file="view/inicio_edit.tpl"}

<div id="formEditEscala">


    <form name="editP" id="editP" method="post">

        <h3>Edição de Platonistas</h3>

        Data:              <input type="text" name="data" id="data" size="40" value="{$e.data}"><br>
        Analista:          <input type="text" name="analista" id="analista" size="16" value="{$e.analista}">
        Técnico Vix:       <input type="text" name="tecnicovix" id="tecnicovix" size="18" value="{$e.tecnicovix}"><br>
        Técnico ACZ:       <input type="text" name="tecnicoacz" id="tecnicoacz" size="40" value="{$e.tecnicoacz}">

        <h3>Edição de Folga</h3>

        Data:              <input type="text" name="dataF" id="dataF" size="40" value="{$fo.data}"><br>
        Analista:          <input type="text" name="analistaF" id="analistaF" size="16" value="{$fo.analista}">
        Técnico:           <input type="text" name="tecnicoF" id="tecnicoF" size="18" value="{$fo.tecnico}"><br>

        <input type="submit" value="Salvar"/>
    </form>

</div>

{include file="view/fim_edit.tpl"}