<?php

require_once 'sm.php';
//require_once 'pagina_restrita.php';
require_once 'core/Plantonistas.php';
require_once 'core/Folga.php';

$c = new Plantonistas();
$f = new Folga();

$c->setId($_GET['edit']);
$c->load();

$f->setId($_GET['edit']);
$f->load();


if (isset($_POST['data'], $_POST['analista'], $_POST['tecnicovix'], $_POST['tecnicoacz'])) {
    if ($_POST['data'] != '' and $_POST['analista'] != '' and $_POST['tecnicovix'] != '' and $_POST['tecnicoacz'] != '') {

        $c->setData($_POST['data']);
        $c->setAnalista($_POST['analista']);
        $c->setTecnicovix($_POST['tecnicovix']);
        $c->setTecnicoacz($_POST['tecnicoacz']);
        $c->update();

        $sm->assign("done", true);
    }//fim do preenchido ok
}//fim do esta setado os campos



$dados = array('data' => $c->getData(),
    'analista' => $c->getAnalista(),
    'tecnicovix' => $c->getTecnicovix(),
    'tecnicoacz' => $c->getTecnicoacz());

$sm->assign('e', $dados);


if (isset($_POST['data'], $_POST['analista'], $_POST['tecnico'])) {
    if ($_POST['data'] != '') {

        $f->setData($_POST['data']);
        $f->setAnalista($_POST['analista']);
        $f->setTecnico($_POST['tecnico']);
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