<?php
$id = $_POST['id_para_remover'];
$query = "delete from clientes where id = ".$id;

$conexao = mysqli_connect("localhost","root","","aulabackend") or print (mysqli_error());

mysqli_query($conexao,$query);


mysqli_close($conexao); 

header('Location: /bd.php');
?>
