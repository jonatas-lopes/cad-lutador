<?php
 
include "servicos/servicoMensagemSessao.php";
include "servicos/servicosCategoriaCompetidor.php";
include "servicos/servicoValidaCampos.php";




$nome = $_POST['nome'];
$peso = $_POST['peso'];
$sexo = $_POST['sexo'];



defineCategoriaCompetidor($nome,$peso,$sexo);
header('location:index.php');

