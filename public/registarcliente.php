<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Cliente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

<style>

@media screen and (max-width: 600px) {
     div.imagem{
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px; /* Adapte conforme necessário */
      height: 10em;
      margin-top: 3em;
     }
    }

/* Estilos para laptops com largura de 601 pixels ou mais */
    @media screen and (min-width: 601px) {
      form{
      display: flex;
      align-items: center;
      justify-content: center;
      height: 10em;
      margin-top:20em;
      gap:1em;
      }
    }

</style>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../public/paginicial.php">
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
            <a class="nav-link" href="#">Link</a>
          </li>
    
      </div>
    </nav>
</header>



<main>
    <form action="../model/cadastrarCliente.php" method="POST">
         <div class="container">
         <h5> Registe um novo Cliente</h5>
             <input type="hidden" name="acao" value="cadastrar">
             <div class="mb-3">
                 <label> Nome</label>
                 <input type="text" name="nomeUser" class="form-control" required>
             </div>
             <div class="mb-3">
                 <label> Telefone</label>
                 <input type="tel" name="telUser" class="form-control" required>
             </div>
             <div class = "mb-3">
                 <label> Email</label>
                 <input type="email" name="emailUser" class="form-control" required>
             </div>
             <div class="mb-3">
                 <label> Morada</label>
                 <input type="text" name="moradaUser" class="form-control" required>
             </div>
             <div class=""mb-3>
                 <label> Data</label>
                 <input type="date" name="datUser" class="form-control" required>
             </div>
             <div class="mb-3">
                 <label> Tipo de produto</label>
                 <input type="select" name="produtoUser" class="form-control" required>
             </div>
             <div class=""mb-3>
                 <label> Quantidade</label>
                 <input type="number" name="quantUser" class="form-control" required>
             </div>
            <br>
             <div class="mb-3">
             <button style="width: 270px;" name="submit" type="submit" class="btn btn-primary"> Registar
             </button>
             </div>
         </div>
    </form>
</main>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>       
</body>
</html>