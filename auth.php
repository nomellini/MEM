<html>
<title>Acessando MEM</title>

<!-- loading css -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<?php
include 'conn.php';

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT user_login FROM USERS";
$query .=" WHERE user_login='$usuario'" ;

$valida_usuario = mysqli_query($conn,$query);

if(!$valida_usuario){
    echo $query;
    echo $valida_usuario;
    die('usuário não encontrado'.mysqli_errno($conn).mysqli_error($conn));
    echo mysqli_close($conn);
}




echo "acessando...";




?>



</html>