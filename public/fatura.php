<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Criar uma fatura</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>
     .container {
            display: inline-block;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }

     form {
            display: flex;
            flex-direction: column;
            gap: 1px;
            width: 300px;
        }
</style>
<body>

<form class="form-signin">
<div class="container">
     <h4> Criar uma Fatura</h4>
         <div class="mb-3">
             <label> Nome</label>
             <input type="text" name="nomeUser" id="clienteNome" class="form-control" required>
         </div>
         <div class="mb-3">
             <label> Telefone</label>
             <input type="tel" name="telUser" id="clienteTel" class="form-control" required>
         </div>
         <div class="mb-3">
             <label> Morada</label>
             <input type="text" name="moradaUser" id="clienteMorada" class="form-control" required>
         </div>
         <div class=""mb-3>
             <label> Data</label>
             <input type="date" name="datUser"id="clienteData" class="form-control" required>
         </div>
         <div class="mb-3">
             <label> Tipo de produto</label>
             <input type="select" name="produtoUser" id="clienteProduto" class="form-control" required>
         </div>
         <div class=""mb-3>
             <label> Quantidade</label>
             <input type="number" name="quantUser" id="clienteQuant" class="form-control" required>
         </div>
         <div class=""mb-3>
             <label> Preço</label>
             <input type="number" name="preçoUser" id="clientePreco" class="form-control" required>
         </div>
        <br>
         <div class="mb-3">
         <button value="Gerar Fatura" onclick="gerarfatura()" style="width: 270px;" type="submit" class="btn btn-primary"> Criar Fatura
         </button>
         </div>
     </div>        
</form>




<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>           
</body>
</html>