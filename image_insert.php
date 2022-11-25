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
    <h1 class="page-title">Inserir imagem a espaço</h1>

    <div class="space-insert">

<?php
include_once 'connect.php';

$statusMsg = '';
$espaco_id = $_POST['espaco_id'];

// File upload path
$targetDir = 'uploads/';
$fileName = basename($_FILES['file']['name']);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if (isset($_POST['botao_submit']) && !empty($_FILES['file']['name'])) {
    // Allow certain file formats
    $allowTypes = ['jpg', 'png', 'jpeg', 'gif', 'pdf'];
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath)) {
            // Insert image file name into database
            $insert = $connection->query(
                "INSERT into imagens (espaco_id, file_name, uploaded_on) VALUES ('" .
                    $espaco_id .
                    "', '" .
                    $fileName .
                    "', NOW())"
            );
            if ($insert) {
                $statusMsg =
                    'O arquivo ' . $fileName . ' foi gravado com sucesso.';
            } else {
                $statusMsg = 'Falha ao gravar o arquivo, tente mais tarde.';
            }
        } else {
            $statusMsg = 'Desculpe, ocorreu um erro ao subir o arquivo.';
        }
    } else {
        $statusMsg =
            'Desculpe, somente arquivo do tipo JPG, JPEG, PNG, GIF, & PDF são permitidos.';
    }
} else {
    $statusMsg = 'Por favor, selecione uma arquivo para enviar.';
}

// Display status message
echo $statusMsg;

echo "<br><br><a href='index.php'>Voltar</a>";
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