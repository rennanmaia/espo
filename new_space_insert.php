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
  
  <content>
    <h1 class="page-title">Cadastrar novo espaço</h1>

    <?php
    $descricao = $_POST['descricao'];
    $observacao = $_POST['observacao'];
    $lat = $_POST['latitude'];
    $long = $_POST['longitude'];
    ?>


    <div class="space-insert">

<?php
include_once 'connect.php';

$sql = "INSERT INTO espaco (descricao, obs, latitude, longitude) VALUES ('$descricao', '$observacao', '$lat', '$long')";

if ($result = mysqli_query($connection, $sql)) {
    echo "Espaço cadastrado com sucesso.
    <a href='index.php'>Voltar</a>
  ";
} else {
    echo "Erro ao cadastrar espaço.
    <a href='index.php'>Voltar</a>
  ";
}
?>

</div>


  </content>

  <footer class="">
  </footer>

</body>
</html>

<script src="js/all.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/espo_scripts.js" ></script>