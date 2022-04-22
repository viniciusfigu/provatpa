<?php

session_start();
require_once "inc/config.php";
$con = new PDO(SERVIDOR, USUARIO, SENHA);

$sql = $con->prepare("SELECT * FROM usuario WHERE email=? AND senha=?");
$sql->execute([ $_POST['email'], SHAl($_POST['senha']) ]);

$usuario = $sql->fetchObject();

if( $usuario ) {

      $_SESSION['usuario'] = $usuario;
      $_SESSION['msg'] = "Usuário encontrado";
      $_SESSION['cor'] = "success";
      header("Location: crud");

} else {

      $_SESSION['msg'] = "Usuário não encontrado";
      $_SESSION['cor'] = "dancer";
      header("location: login.php");

}

?>