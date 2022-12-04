<?php
session_start();
include("conexao.php");

$usuario = mysqli_real_escape_string($conexao, trim($_POST['name']));
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim(md5($_POST['password'])));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1){
    $_SESSION['usuario_existe'] = true;
    echo "Este usuário já existe";
    //header('Location: cadastro.php');
    //exit;
}else{
    $sql = "insert into usuario (usuario, senha, email, data_cadastro) values ('$usuario', '$senha', '$email', now())";
    if($conexao->query($sql) === true) {
        $_SESSION['status_cadastro'] = true;  
    }
    
    $conexao->close();
    
    echo "Cadastro realizado com sucesso!";
}

/*
$sql = "insert into usuario (usuario, senha, email, data_cadastro) values ('$usuario', '$senha', '$email', now())";

if($conexao->query($sql) === true) {
    $_SESSION['status_cadastro'] = true;  
}

$conexao->close();

echo "Cadastro realizado com sucesso!";
*/
//header('Location: cadastro.php');
?>