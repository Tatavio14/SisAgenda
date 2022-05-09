<?php include "./database/db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisAgenda - Gerenciar agenda</title>
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
<h2>Formulário: contato</h2>

        <form action="adicionar_agenda.php" method="GET" class="col">
            <div class="row">
                <div class="col-md-8">
                    <label for="titulo" class="form-label">Título</label>
                    <input name="titulo" id="titulo" type="text" class="form-control" placeholder="Reunião..." required
                        value="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="data_inicio" class="form-label">Data início</label>
                    <input name="data_inicio" id="data_inicio" type="date" class="form-control" placeholder="Data de inicio" required
                        value="">
                </div>
                <div class="col-md-4">
                    <label for="hora_inicio" class="form-label">Hora início</label>
                    <input name="hora_inicio" id="hora_inicio" type="time" class="form-control" placeholder="Hora de início" required
                        value="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="data_fim" class="form-label">Data início</label>
                    <input name="data_fim" id="data_fim" type="date" class="form-control" placeholder="Data final" required
                        value="">
                </div>
                <div class="col-md-4">
                    <label for="hora_fim" class="form-label">Hora início</label>
                    <input name="hora_fim" id="hora_fim" type="time" class="form-control" placeholder="Horario final" required
                        value="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="agenda_local" class="form-label">Local</label>
                    <input name="agenda_local" id="agenda_local" type="text" class="form-control" placeholder="Local" required
                        value="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="convidado_id" class="form-label">Convidado</label>
                    <input name="convidado_id" id="convidado_id" type="text" class="form-control" placeholder="Local" required
                        value="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea name="descricao" id="descricao" cols="30" rows="4" class="form-control" placeholder="Nome" required></textarea>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-auto" style="margin-top: 10px;">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
                <div class="col-md-auto" style="margin-top: 10px;">
                        <a class="btn btn-primary"
                            href="contatos.php">Voltar</a>
                </div>
            </div>
        </form>
</div>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>