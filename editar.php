<h1> Edição de dados </h1>
<form action="editar.php" method="POST">

        <label>Nome: </label><br>
        <input type="text" name="nome" required><br> 
        <label> Cidade:  </label><br>
        <input type="text"  name="cidade" required><br>
        <label> Idade: </label><br>
        <input type="number" name="idade" required><br> 

        <button type="submit"> Enviar </button>
    </form>

<?php
// Trocar esse if ?
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $nome=$_POST["nome"];
    $cidade=$_POST["cidade"];
    $idade=$_POST['idade'];
    $conexao = mysqli_connect("localhost","root","","aulabackend") or print (mysqli_error());

    $query = "insert into clientes(nome, cidade, idade) values ('". $nome."','".$cidade."',".$idade.")";

    echo $query;


//    $resultado = mysqli_query($conexao,$query);
    echo "<h3> Dados inseridos com sucesso!</h3><br>";
    

    mysqli_close($conexao);
}

?>
<a href="/bd.php"> Voltar para a tela principal </a>