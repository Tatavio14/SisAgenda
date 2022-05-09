<?php

include "./database/db.php";

    $sql = "DELETE FROM agenda WHERE id=".$_GET['id'];
    $result = $conexao->query($sql);
    header("Location:agenda.php");
?>