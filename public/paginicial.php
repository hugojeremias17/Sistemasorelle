<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>



    @media screen and (min-width: 601px) {
    body{
      background-image: url(Assets/img/toalha\ laranja.jpg);
    }
      
    }

    body{

      background-image: url(Assets/img/toalha\ laranja.jpg);
      background-size: 200%;
      background-repeat: none;


      
    }



</style>
<body>

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="paginicial.php">
          <img src="Assets/img/sorellelogo copiar.png" width="50" height="50" class="d-inline-block align-top" alt="">
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="registarcliente.php"> Registar novo Cliente<span class="sr-only">(página atual)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listaruser.php"> Listar novo Cliente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="fatura.php"> Criar uma Fatura</a>
        </li>

        <li>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
           Abrir Modal
          </button>
        </li>
  
  
    </div>
  </nav>
</header>
<main>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Cabeçalho do Modal -->
      <div class="modal-header">
        <h4 class="modal-title">Formulário no Modal</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Corpo do Modal (Conteúdo do Formulário) -->
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email">
          </div>
          <!-- Adicione mais campos conforme necessário -->

          <!-- Botão de envio do formulário -->
          <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>

      <!-- Rodapé do Modal -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>

    </div>
  </div>
</div>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
</body>
</html>