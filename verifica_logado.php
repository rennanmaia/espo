<?php
session_start();

if ( (isset($_SESSION['login'])) && (isset($_SESSION['senha'])) ) {
  $logado = $_SESSION['login'];
  echo $logado;
  echo "[
    <a href='logout.php'>sair</a>
  ]";
} else {
  echo "[
    <a href='login.php'>Entrar</a>
    ]";
  }


?>