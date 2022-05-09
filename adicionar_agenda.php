<?php

    include "./database/db.php";

    $titulo = $_GET['titulo'];
    $data_inicio = date('Y-m-d', strtotime($_GET["data_inicio"]));
    $hora_inicio = date('H:i:s', strtotime($_GET["hora_inicio"]));
    $data_fim = date('Y-m-d', strtotime($_GET["data_fim"]));
    $hora_fim = date('H:i:s', strtotime($_GET["hora_fim"]));
    $agenda_local = $_GET['agenda_local'];
    $descricao = $_GET['descricao'];
    $convidado_id = $_GET['convidado_id'];

    $sql = "INSERT INTO Agenda(titulo,agenda_local,convidado_id,descricao) values ('".
    $titulo."','".$agenda_local."',".$convidado_id.",'".$descricao."');";
    $result=$conexao->query($sql);
    var_dump($result);
    //header('Location:agenda.php');
?>