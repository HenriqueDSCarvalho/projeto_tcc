<?php
ob_start();

require "../dao/conexao.php";
$id = $_GET['id'];

/*$sql_prods = "SELECT * FROM produto where codigo='$id'";
$result = mysqli_query($conexao, $sql);
$dados = mysqli_fetch_array($result);*/

if (isset($_GET['id'])) {

    $id_mov = ($_GET['id']);


    //inserir no banco.
    $sql = "DELETE FROM produto WHERE codigo='$id_mov'";

    //Incluir
    $resultado = mysqli_query($conexao, $sql);

    if (!isset($resultado)){
        echo "Falha ao inserir dados!";
    } else {
        $_SESSION['deletado'] = true;
        header('Location:../view/lista_produtos.php');
        exit();
        
    }
} else {
    echo "<script> alert('Não foi possível fazer o cadastro');</script>";
}