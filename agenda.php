<?php include "./database/db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisAgenda - Minha agenda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Sis Agenda</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="agenda.php">Minha Agenda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contatos.php">Meus Contatos</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container" style="margin-top:30px">
<h4>Listagem de Agendas</h4>
<div class="row">
    <form action="agenda.php" class="form-inline" method="post">
        <input name="pesquisa"  type="search" placeholder="Pesquisar" class="form-control"  style="margin-right:5px;">
        <select name="tipo" id="tipo" class="form-control"  style="margin-right:5px;">
            <option selected value="nome">Nome</option>
            <option value="sobrenome">Sobrenome</option>
            <option value="telefone">Telefone</option>
        </select>
        <button class="btn btn-outline-success" type="submit"  style="margin-right:5px;">Pesquisar</button>
        <a class="btn btn-outline-primary" href="formularioagenda.php" role="button">Cadastrar</a>
    </form>
</div>

<table class="table table-hover" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Data de ínicio</th>
                    <th scope="col">Hora de ínicio</th>
                    <th scope="col">Data final</th>
                    <th scope="col">Hora final</th>
                    <th scope="col">Local</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Convidado</th>
                    <th scope="col">Ação</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "SELECT * FROM Agenda left outer JOIN Contato ON Agenda.convidado_id = Contato.id";
                    $result = $conexao->query($sql);
                    while($row = $result->fetch_assoc()){
                        echo "<tr>".
                        "<th scope=\"row\">".$row['id'].
                        
                        "<td>".(is_null($row['titulo']) || $row['titulo'] == 'null' ? "-" : $row['titulo'])."</td>".
                        "<td>".(is_null($row['data_inicio']) || $row['data_inicio'] == 'null' ? "-" : $row['data_inicio'])."</td>".
                        "<td>".(is_null($row['hora_inicio']) || $row['hora_inicio'] == 'null' ? "-" : $row['hora_inicio'])."</td>".
                        "<td>".(is_null($row['data_fim']) || $row['data_fim'] == 'null' ? "-" : $row['data_fim'])."</td>".
                        "<td>".(is_null($row['hora_fim']) || $row['hora_fim'] == 'null' ? "-" : $row['hora_fim'])."</td>".
                        "<td>".(is_null($row['agenda_local']) || $row['agenda_local'] == 'null' ? "-" : $row['agenda_local'])."</td>".
                        "<td>".(is_null($row['descricao']) || $row['descricao'] == 'null' ? "-" : $row['descricao'])."</td>".
                        "<td>".(is_null($row['nome']) || $row['nome'] == 'null' ? "-" : $row['nome'])."</td>".
                        "<td><a class=\"btn btn-outline-primary\" href=\"formularioagenda.php?id=".$row['id']."\" role=\"button\">EDITAR</a></td>".
                        "<td><a class=\"btn btn-outline-danger\" href=\"excluiragenda.php?id=".$row['id']."\" role=\"button\">EXCLUIR</a></td>".
                        "</th></tr>";
                    }
                ?>
            </tbody>
        </table>

</div>



</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>