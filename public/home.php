<!Doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <style>
    
    @media screen and (max-width: 600px) {
     div.imagem{
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px; 
      height: 10em;
      margin-top: 3em;
     }
    }


    @media screen and (min-width: 601px) {
      div.imagem{
      display: flex;
      align-items: center;
      justify-content: center;
      height: 10em;
      margin-top: 3em;
      
    }

    div.container{
      display: flex;
      align-items: center;
      justify-content: center;
      width: 50em;


      
    }
}


  </style>
  <body>
    <main>

    <div class="imagem">
       <img src="Assets/img/sorellelogo.png" alt="">
    </div>
      <div class="container">
        <form action="../config/verificarUsuario.php" method="POST" class="form-signin">
      
            <h1 style="color:white;" class="h3 mb-3 font-weight-normal">Faça login</h1>
                <label for="inputEmail" class="sr-only"> Endereço de email</label>
                <input type="email" name="emailInput" class="form-control max-width" placeholder="Seu email" required="" autofocus="">
                <label for="inputSenha"  class="sr-only">Senha</label> <br>
                <input type="password"  name="senhaInput" class="form-control max-width" placeholder="Senha" required="">
            <div class="checkbox mb-3">
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
          <br>
            <p style="color:white;" class="">© 2021-2023</p>
          </form>
      </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>