
<?php
    $idBuscaDados = $_POST['id_para_editar'];
    $conexao = mysqli_connect("localhost","root","","aulabackend") or print (mysqli_error());

    $query = "SELECT id, nome,cidade,idade FROM clientes WHERE id=".$idBuscaDados;

    $resultado = mysqli_query($conexao,$query);
   // echo "resultado:";

    $linha = mysqli_fetch_array($resultado);

  //  echo "nome: ".$linha['nome'];

  //echo "o id que peguei é".$idBuscaDados;
?>

<h1> Edição de dados </h1>
<form action="atualizar.php" method="POST">

        <label>Nome: </label><br>
        <input type="text" name="nome" value="<?=$linha['nome']?>"  required><br> 
        <label> Cidade:  </label><br>
        <input type="text"  name="cidade" value="<?=$linha['cidade']?>" required><br>
        <label> Idade: </label><br>
        <input type="number" name="idade" value=<?=$linha['idade']?> required><br> 

        <button type="submit"> Atualizar! </button>
    </form>




<a href="/bd.php"> Voltar para a tela principal </a>