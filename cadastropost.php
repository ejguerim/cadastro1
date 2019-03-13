
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Título</title>
</head>
<body>
<form method="post">


    <input type="text" name="valor" title="Nome" value="<?php echo $_POST['valor']; ?>" /> <br>

    <input type="date" name="datan" title="Data Nascimento" /> <br>

    <input type="email" name="mail" title="Mail" /> <br>

    <input type="radio" name="sexo" value="masculino" checked> Masculino <br>

    <input type="radio" name="sexo" value="feminino"> Feminino <br>

    <input type="radio" name="sexo" value="outro"> Outro <br>

    <input type="submit" name="action" value="Enviar" />


</form>





<?php





 echo '<pre>'. print_r($_GET, true). '</pre>';

 echo '<pre>'. print_r($_POST, true). '</pre>';


?>


