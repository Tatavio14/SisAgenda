<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SisAgenda - Tela inicial</title>
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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Início <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="agenda.php">Minha Agenda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contatos.php">Meus Contatos</a>
      </li>
    </ul>
  </div>
</nav>


<div class="container" style="margin-top:30px">
    <h4> Telas </h4>
    <div class="row justify-content-between">
        <div class="col card justify-conent-start" style="margin-right:10px;align-items:flex-start;flex-direction:row;padding:10px">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Google_Contacts_icon.svg/2048px-Google_Contacts_icon.svg.png" alt="Ícone da agenda" class="card-img-top" style="max-width:120px;margin-left: 50px;margin-right: 50px">
            <div class="col-6">
                <h4>Meus Contatos</h2>
                <p>Cadastre e Gerencie todos os seus contatos!</p>
                <a class="btn btn-primary" href="contatos.php" role="button">Ver</a>
            </div>
        </div>
        <div class="col card justify-conent-start" style="margin-left:10px;align-items:flex-start;flex-direction:row;padding:10px">
            <img src="https://cdn-icons-png.flaticon.com/512/2965/2965293.png" alt="Ícone da agenda" class="card-img-top" style="max-width:120px;margin-left: 50px;margin-right: 50px">
            <div class="col-6">
                <h4>Minha agenda</h2>
                <p>Cadastre e Gerencie tudo em sua Agenda!</p>
                <a class="btn btn-primary" href="agenda.php" role="button">Ver</a>
            </div>
        </div>
    </div>
</div>


</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>