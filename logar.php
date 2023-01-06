<?php

session_start();

include_once 'connect.php';

$msg = "";

if (isset($_POST['login'])) {
  $login = $_POST['login'];
  $senha = $_POST['senha'];  
  
  $hash = hash('sha256', $senha);
  
  $sql = "SELECT * FROM usuarios WHERE login = '$login'";
  
  $result = mysqli_query($connection, $sql);
  if ($result->num_rows == 1) {
    $row = $result->fetch_array();
    $senhadb = $row['senha'];

    if ( ($senha != "") && ($hash == $senhadb)) {
      // $msg = "Usuario logado";

      //registrar sessao aqui
      $_SESSION['login'] = $login;
      $_SESSION['senha'] = $senha;
      header('location:index.php');

    } else {
      $msg = "Senha incorreta ou não digitada";
      header('location:login.php?msg=' . $msg);
    }
  } else {
    $msg = "Usuario não encontrado";
  }


} else {
  $msg = 'Não vei da pagina de login';
}


// echo $msg;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ESPO - Empresa Santarena de publicidade em outdoor</title>
  
  <!-- Importação da fonte Lato do Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/slider.css">
  <link rel="stylesheet" href="css/service_classes.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script "text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script "text/javascript" src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>
<body>
<?php include_once 'header.php'; ?>
<h1 class="page-title">ESPO - Login</h1>

<?php

echo $msg;
echo "<br /> <a href='login.php'>Voltar</a>";


?>

</div>
</body>
</html>


<script src="js/all.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/espo_scripts.js" ></script>