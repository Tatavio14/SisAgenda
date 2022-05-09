<?php

    include "./database/db.php";

    $nome = $_GET['nome'];
    $sobrenome = $_GET['sobrenome'];
    $telefone1 = $_GET['telefone1'];
    $tipo_telefone1 = $_GET['tipo_telefone1'];
    $telefone2 = $_GET['telefone2'];
    $tipo_telefone2 = $_GET['tipo_telefone2'];
    $email = $_GET['email'];

    $sql = "INSERT INTO Contato(nome,sobrenome,telefone1,tipo_telefone1,telefone2,tipo_telefone2,email) values ('".
    $nome."','".$sobrenome."',".$telefone1.",'".$tipo_telefone1."',".$telefone2.",'".$tipo_telefone2."','".$email."');";
    $result=$conexao->query($sql);
    header('Location:contatos.php');
?>