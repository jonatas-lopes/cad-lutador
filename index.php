<?php
    include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Formulário de inscrição</title>
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
    <?php
       
       
    $valida = obterMensagemErro();

    if(!empty($valida)){
        echo $valida;
    }

    $sucesso = obterMensagemSucesso();

    if(!empty($sucesso)){
        echo $sucesso;
    }
 
    session_destroy();  

    ?>
    <p>Seu nome: <input type="text" name="nome" /></p>
    <p>Seu peso: <input type="text" name="peso" /></p>
    <p>Seu sexo: <input type="text" name="sexo" /></p>
    <p><input type="submit" value="Enviar dados do competidor"/></p>
</form>

</body>

</html>