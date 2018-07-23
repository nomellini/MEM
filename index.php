<html>
<title>Bem vindo a MEM!</title>
<h1>login <br></h1>
<br><br><br><br>
<?php
include 'conn.php';
?>

<!-- loading css -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<form action="auth.php" method="post">
Usuario: <input name="usuario" type="text">
<br><br><br>
Senha: <input name="senha" type="password">
<br><br><br>
<input name="acessar" type="submit" value="acessar">

</form>

<a href="registro.php">Não registrado?</a>



































</html>
