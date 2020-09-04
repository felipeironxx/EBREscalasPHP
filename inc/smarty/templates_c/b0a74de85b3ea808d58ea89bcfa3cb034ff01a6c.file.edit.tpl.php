<?php /* Smarty version Smarty-3.1.13, created on 2020-05-04 11:01:24
         compiled from "view/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12237251225ea71fa329bca7-84607556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0a74de85b3ea808d58ea89bcfa3cb034ff01a6c' => 
    array (
      0 => 'view/edit.tpl',
      1 => 1588600879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12237251225ea71fa329bca7-84607556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ea71fa32b1341_14180256',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea71fa32b1341_14180256')) {function content_5ea71fa32b1341_14180256($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("view/inicio.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<input type="button" href="#" onclick="win('editEscala.php',640,360)" value="Editar"/>

<?php echo $_smarty_tpl->getSubTemplate ("view/fim.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>