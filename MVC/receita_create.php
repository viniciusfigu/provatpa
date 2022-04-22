<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Cadastro de Receitas</title>

</head>
<body>
<h1>Cadastre aqui suas receitas</h1>

<!-- formulario -->

<form action="autenticacao.php" method="post">
<!-- nome --> 
<div class="form-group">
    <label for="nome">Nome do Autor da Receita</label>
    <input type="text" class="form-control" id="nome" placeholder="João ************">   
  </div>
<!-- email e titulo da receita -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email:</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email@.com">
    </div>
    <div class="form-group col-md-6">
      <label for="titulo_receita">Título da receita:</label>
      <input type="text" class="form-control" id="titulo_receita" placeholder="Bolo de  ******">
    </div>

<!-- descriçao --> 

<div class="form-group">
    <label for="descricao">Descrição da Receita:</label>
    <textarea class="form-control" id="descricao" rows="5"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
  <button type="reset" class="reset">Limpar Campos</button>

</form>

</body>
</html>