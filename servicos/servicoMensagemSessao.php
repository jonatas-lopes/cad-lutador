<?php

session_start();

function setarMensagemSucesso(string $mensagem) : void {

    $_SESSION['sucesso'] = $mensagem;


}

function obterMensagemSucesso() : ?string{


    if(isset($_SESSION['sucesso']))
        return $_SESSION['sucesso'];

    return null;


}

function removerMensagemSucesso() : void {

    if(isset($_SESSION['sucesso']))
   unset($_SESSION['sucesso']);


}

function setarMensagemErro(string $mensagem) : void {

    $_SESSION['valida'] = $mensagem;


}

function obterMensagemErro() : ?string{


    if(isset($_SESSION['valida']))
        return $_SESSION['valida'];

    return null;


}

function removerMensagemErro() : void {

   if(isset($_SESSION['valida']))
    unset($_SESSION['valida']);


}















?>