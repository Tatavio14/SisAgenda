<?php

include "./database/db.php";

    $sql = "DELETE FROM contato WHERE id=".$_GET['id'];
    $result = $conexao->query($sql);
    header("Location:contatos.php");
?>