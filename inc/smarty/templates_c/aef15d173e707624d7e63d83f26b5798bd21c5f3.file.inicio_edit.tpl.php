<?php /* Smarty version Smarty-3.1.13, created on 2020-05-04 10:33:35
         compiled from "view/inicio_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21361731815ea6f0745776e9-89619847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aef15d173e707624d7e63d83f26b5798bd21c5f3' => 
    array (
      0 => 'view/inicio_edit.tpl',
      1 => 1588270935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21361731815ea6f0745776e9-89619847',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5ea6f0745c00f0_29064077',
  'variables' => 
  array (
    'done' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ea6f0745c00f0_29064077')) {function content_5ea6f0745c00f0_29064077($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>Servisos Web</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="view/css/inicio.css" media="screen"/>
        <script type="text/javascript" src="view/javascript/jGeneral.js"></script>
        
        <!-- Biblioteca Ajax -->
        <script type="text/javascript" src="view/javascript/bibliotecaAjax.js"></script>
    </head>
    <body>

        <?php if (isset($_smarty_tpl->tpl_vars['done']->value)){?>
        <script type="text/javascript">
            parent.location.reload(true); 
        </script>
        <?php }?><?php }} ?>