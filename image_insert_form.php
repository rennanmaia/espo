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
    <h1 class="page-title">Adicionar imagem a espaço</h1>

    <div class="espo-form">
      <form action="image_insert.php" method="POST"  enctype="multipart/form-data">

      <?php $espaco_id = $_GET['espaco_id']; ?>

        <input type="hidden" name="espaco_id" value="<?php echo $espaco_id; ?>">

        <div class="field">
          <div class="field-label">
            Arquivo de imagem:
          </div>
          <div class="field-data">
            <input type="file" id="file" name="file">
          </div>
        </div>
          <div class="button-container">
            <input type="submit" class="submit-button" id="botao_submit" name="botao_submit"
            value="Fazer upload">
        </div>
      </form>
    </div>
  </content>

  <footer class="border">
  </footer>

</body>
</html>

<script src="js/all.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/espo_scripts.js" ></script>