<?php
$conexao = mysqli_connect("localhost","root","","aulabackend") or print (mysqli_error());

$query = "SELECT id, nome,cidade,idade FROM clientes ORDER BY nome ASC ";

$resultado = mysqli_query($conexao,$query);
?>


<a href="/inserir_dados.php"> Inserir novo cliente.</a>
<table border="1"><tr>
	<td><b>Nome</b></td>
	<td><b>Cidade</b></td>
    <td><b>Idade</b></td>
    <td><b> # </b></td>
    <td><b> # </b></td>
</tr>

<?php


while($linha = mysqli_fetch_array($resultado)){
    echo "<tr><td>".$linha['nome']."</td><td>".$linha['cidade']."</td><td>".$linha['idade']."</td>
    <td>
        <form action='remover.php' method='POST'>
            <input type='hidden' name='id_para_remover' value=".$linha['id'].">
            <button type='submit'> Remover </button>
        </form>
    </td>



    <td>
        <form action='editar.php' method='POST'>
            <input type='hidden' name='id_para_editar' value=".$linha['id'].">
            <button type='submit'> Editar </button>
        </form>
    </td>






    </tr>
    
    <br />";
}

mysqli_close($conexao);

?>