<?php

$nome=$_POST['nome'];
$idade=$_POST['idade'];
$cidade=$_POST['cidade'];
$id_para_atualizacao=$_POST['id_para_atualizacao_form'];




$query = "
UPDATE clientes
SET nome ='".$nome."', cidade = '".$cidade. "', 
idade=".$idade." WHERE id =".$id_para_atualizacao;

$conexao = mysqli_connect("localhost","root","","aulabackend") or print (mysqli_error());

mysqli_query($conexao,$query);

header('Location: /bd.php');


?>