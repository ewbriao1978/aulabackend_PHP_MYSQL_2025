<?php
$id = $_POST['id_para_remover'];
$query = "delete from clientes where id = ".$id;
echo $query;

?>