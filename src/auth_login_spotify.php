<?php
session_start();
$nome = $_POST['name'];
$senha = $_POST['senha'];

$nomeCorreto = 'bruno';
$senhaCerta = '1234';


if ($nome == $nomeCorreto && $senha == $senhaCerta){
    $_SESSION['name'] = $nome;
    header("Location: ../index.php");
}else{
    session_destroy();
    echo "Não foi possivel encontrar esse Usuario ou senha!";
    error_log("Não foi possivel encontrar esse Usuario ou senha!");
    exit();
}