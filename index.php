<?php
require_once 'sm.php';
require_once 'core/Plantonistas.php';
require_once 'core/Folga.php';

$c = new Plantonistas();
$sm->assign('listaP', $c->select());

$e = new Folga();
$sm->assign('listaF', $e->select());
 
$sm->display("index.tpl")
?>
