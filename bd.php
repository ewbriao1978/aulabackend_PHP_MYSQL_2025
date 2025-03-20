<?php
$conexao = mysqli_connect("localhost","root","","aulabackend") or print (mysqli_error());

$query = "SELECT nome,cidade,idade FROM clientes where idade >60 ORDER BY nome ASC ";

$resultado = mysqli_query($conexao,$query);
?>

<table border="1"><tr>
	<td><b>Nome</b></td>
	<td><b>Cidade</b></td>
    <td><b>Idade</b></td>
</tr>

<?php


while($linha = mysqli_fetch_array($resultado)){
    echo "<tr><td>".$linha['nome']."</td><td>".$linha['cidade']."</td><td>".$linha['idade']."</td></tr><br />";
}

mysqli_close($conexao);

?>