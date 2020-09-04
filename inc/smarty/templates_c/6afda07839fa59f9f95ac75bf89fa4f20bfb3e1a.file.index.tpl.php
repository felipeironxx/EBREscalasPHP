<?php /* Smarty version Smarty-3.1.13, created on 2020-04-30 16:42:43
         compiled from "view/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13550446515ea32eaa467be7-02900739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6afda07839fa59f9f95ac75bf89fa4f20bfb3e1a' => 
    array (
      0 => 'view/index.tpl',
      1 => 1588270935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13550446515ea32eaa467be7-02900739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ea32eaa46ae08_61525387',
  'variables' => 
  array (
    'listaP' => 0,
    'row' => 0,
    'listaF' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea32eaa46ae08_61525387')) {function content_5ea32eaa46ae08_61525387($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


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
                <td class="tabelaTD1"><img id="img1" src="view/img/EBR/Data.png"></td>
                <td class="tabelaTD1"><img id="img1" src="view/img/EBR/analista.png"></td>
                <td class="tabelaTD1"><img id="img1" src="view/img/EBR/vix.png"></td>
                <td class="tabelaTD1"><img id="img1" src="view/img/EBR/acz.png"></td>

            </tr>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaP']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <tr>
                    <td class="tabelaTD2"><?php echo $_smarty_tpl->tpl_vars['row']->value['data'];?>
</td>
                    <td class="tabelaTD2"><?php echo $_smarty_tpl->tpl_vars['row']->value['analista'];?>
</td>
                    <td class="tabelaTD2"><?php echo $_smarty_tpl->tpl_vars['row']->value['tecnicovix'];?>
</td>
                    <td class="tabelaTD2"><?php echo $_smarty_tpl->tpl_vars['row']->value['tecnicoacz'];?>
</td>
                </tr>
            <?php } ?>
        </table>


        <h1>FOLGA</h1>


        <table>
            <tr>
                <td class="tabelaTD1"><img id="img1" src="view/img/EBR/Data.png"></td>
                <td class="tabelaTD1"><img id="img1" src="view/img/EBR/analista.png"></td>
                <td class="tabelaTD1"><img id="img1" src="view/img/EBR/vix.png"></td>

            </tr>
            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['listaF']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                <tr>
                    <td class="tabelaTD2"><?php echo $_smarty_tpl->tpl_vars['row']->value['data'];?>
</td>
                    <td class="tabelaTD2"><?php echo $_smarty_tpl->tpl_vars['row']->value['analista'];?>
</td>
                    <td class="tabelaTD2"><?php echo $_smarty_tpl->tpl_vars['row']->value['tecnico'];?>
</td>
                </tr>
            <?php } ?>

        </table>
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

    <?php echo $_smarty_tpl->getSubTemplate ("view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>