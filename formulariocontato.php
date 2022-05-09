<?php include "./database/db.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisAgenda - Gerenciar contato</title>
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
      <li class="nav-item">
        <a class="nav-link" href="agenda.php">Minha Agenda</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contatos.php">Meus Contatos</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container" style="margin-top:30px">
<h2>Formulário: contato</h2>

        <form action="adicionar_contato.php" method="GET" class="col">
            <div class="row justify-content-between">
                <div class="col">
                    <label for="nome" class="form-label">Nome</label>
                    <input name="nome" id="nome" type="text" class="form-control" placeholder="Nome" required
                        value="">
                </div>
                <div class="col">
                    <label for="sobrenome" class="form-label">Sobrenome</label>
                    <input name="sobrenome" id="sobrenome" type="text" class="form-control" placeholder="Sobrenome" required
                        value="">
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-3">
                    <label for="telefone1" class="form-label">Telefone 1</label>
                    <input name="telefone1" id="telefone1" type="number" class="form-control" placeholder="Telefone 1" required
                        value="">
                </div>
                <div class="col-md-3">
                <label for="tipo_telefone1" class="form-label">Tipo telefone 1</label>
                <select name="tipo_telefone1" id="tipo_telefone1" class="form-control">
                        <option value="null" selected>Primário</option>
                        <option value="null">Casa</option>
                        <option value="null">Celular</option>
                        <option value="null">Comercial</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input name="email" id="email" type="text" class="form-control" placeholder="E-mail" required
                        value="">
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-3">
                    <label for="telefone2" class="form-label">Telefone 2</label>
                    <input name="telefone2" id="telefone2" type="number" class="form-control" placeholder="Telefone 2" required
                        value="">
                </div>
                <div class="col-md-3">
                <label for="tipo_telefone2" class="form-label">Tipo telefone 1</label>
                <select name="tipo_telefone2" id="tipo_telefone2" class="form-control">
                        <option value="Primário" selected>Primário</option>
                        <option value="Casa">Casa</option>
                        <option value="Celular">Celular</option>
                        <option value="Comercial">Comercial</option>
                    </select>
                </div>
                <div class="col-md-6"></div>
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