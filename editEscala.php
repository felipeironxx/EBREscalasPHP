<?php

require_once 'sm.php';
//require_once 'pagina_restrita.php';
require_once 'core/Plantonistas.php';
require_once 'core/Folga.php';

$c = new Plantonistas();
$f = new Folga();

$c->setId($_GET['edit']);
$c->load();

if (isset($_POST['data'], $_POST['analista'], $_POST['tecnicovix'], $_POST['tecnicoacz'], $_POST['suporte'])) {
    if ($_POST['data'] != '' and $_POST['analista'] != '' and $_POST['tecnicovix'] != '' and $_POST['tecnicoacz'] != '' and $_POST['suporte'] != '') {

        $c->setData($_POST['data']);
        $c->setAnalista($_POST['analista']);
        $c->setTecnicovix($_POST['tecnicovix']);
        $c->setTecnicoacz($_POST['tecnicoacz']);
        $c->setSuporte($_POST['suporte']);
        $c->update();

        $sm->assign("done", true);
    }//fim do preenchido ok
}//fim do esta setado os campos



$dados = array('data' => $c->getData(),
    'analista' => $c->getAnalista(),
    'tecnicovix' => $c->getTecnicovix(),
    'tecnicoacz' => $c->getTecnicoacz(),
    'suporte' => $c->getSuporte());

$sm->assign('e', $dados);


$f->setId($_GET['edit']);
$f->load();

if (isset($_POST['dataF'], $_POST['analistaF'], $_POST['tecnicoF'])) {
    if ($_POST['dataF'] != '' and $_POST['analistaF'] != '' and $_POST['tecnicoF'] != '') {

        $f->setData($_POST['dataF']);
        $f->setAnalista($_POST['analistaF']);
        $f->setTecnico($_POST['tecnicoF']);
        $f->update();

        $sm->assign("done", true);
    }//fim do preenchido ok
}//fim do esta setado os campos



$dadosF = array('data' => $f->getData(),
    'analista' => $f->getAnalista(),
    'tecnico' => $f->getTecnico());

$sm->assign('fo', $dadosF);


$sm->display("editEscala.tpl");
?>