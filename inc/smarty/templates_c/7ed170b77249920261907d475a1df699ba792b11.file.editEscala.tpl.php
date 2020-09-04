<?php /* Smarty version Smarty-3.1.13, created on 2020-09-04 17:08:10
         compiled from "view/editEscala.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7839370045ea6f07456c7e1-73053595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ed170b77249920261907d475a1df699ba792b11' => 
    array (
      0 => 'view/editEscala.tpl',
      1 => 1599250066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7839370045ea6f07456c7e1-73053595',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ea6f074574228_49281482',
  'variables' => 
  array (
    'e' => 0,
    'fo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea6f074574228_49281482')) {function content_5ea6f074574228_49281482($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="formEditEscala">


    <form name="editP" id="editP" method="post">

        <h3>Edição de Platonistas</h3>

        Data:              <input type="text" name="data" id="data" size="40" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['data'];?>
"><br>
        Analista:          <input type="text" name="analista" id="analista" size="16" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['analista'];?>
">
        Técnico Vix:       <input type="text" name="tecnicovix" id="tecnicovix" size="18" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['tecnicovix'];?>
"><br>
        Técnico ACZ:       <input type="text" name="tecnicoacz" id="tecnicoacz" size="40" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['tecnicoacz'];?>
">

        <h3>Edição de Folga</h3>

        Data:              <input type="text" name="dataF" id="dataF" size="40" value="<?php echo $_smarty_tpl->tpl_vars['fo']->value['data'];?>
"><br>
        Analista:          <input type="text" name="analistaF" id="analistaF" size="16" value="<?php echo $_smarty_tpl->tpl_vars['fo']->value['analista'];?>
">
        Técnico:           <input type="text" name="tecnicoF" id="tecnicoF" size="18" value="<?php echo $_smarty_tpl->tpl_vars['fo']->value['tecnico'];?>
"><br>

        <input type="submit" value="Salvar"/>
    </form>

</div>

<?php echo $_smarty_tpl->getSubTemplate ("view/fim_edit.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>