<?php


function validaCampo(string $nome,string $sexo, string $peso) : bool {

    if(empty($nome) OR empty($peso) OR empty($sexo)){

        $_SESSION['valida'] =  "Por favor preencha todos os campos";
        header('location:index.php');
        return false;
    }
    
    if(strlen($nome) <= 2 OR strlen($nome) >= 50){
    
        setarMensagemErro("O campo nome não atende os requisitos minimos");
        header('location:index.php');
        return false;
    }
    
    if(is_numeric($nome) OR is_numeric($sexo)){
    
        setarMensagemErro("Campo nome ou sexo não pode ser numerico");  
        header('location:index.php');
        return false;
    }
    
    if(!is_numeric($peso)){
    
        setarMensagemErro("O campo peso não pode conter letras");
        header('location:index.php');
        return false;
    }


    return true;
}









?>