
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro</title>
</head>
<body>

 <!-- NÃO APARECEM OS DADOS PREENCHIDOS NA BARRA DO NAVEGADOR-->

  <form action="backend.php" method="post">
    <label for="name">Nome: </label> 
    <input type="text" name="nome"> <br>

    <label for="e-mail">E-mail: </label>
    <input type="text" name="email"> <br>

    <input type="submit">
  </form>


  <!--APARECEM OS DADOS PREENCHIDOS NA BARRA DO NAVEGADOR-->
  <form action="backend.php" method="get">
    <label for="name">Nome: </label> 
    <input type="text" name="nome"> <br>

    <label for="e-mail">E-mail: </label>
    <input type="text" name="email"> <br>

    <input type="submit">
  </form>


  
  
</body>
</html>