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

    <div class="espo-form">
      <form action="new_space_insert.php" method="POST">

        <div class="field">
          <div class="field-label">
            Descrição
          </div>
          <div class="field-data">
            <input type="text" id="descricao" name="descricao" placeholder="Digite a descrição" size="40">
          </div>
        </div>

        <div class="field">
          <div class="field-label">
            Latitude
          </div>
          <div class="field-data">
            <input type="text" id="latitude" name="latitude" placeholder="Digite a latitude do local" size="30">
          </div>
        </div>      

        <div class="field">
          <div class="field-label">
            Longitude
          </div>
          <div class="field-data">
            <input type="text" id="longitude" name="longitude" placeholder="Digite a longitude do local" size="30">
          </div>
        </div>      
      
        <div class="field">
          <div class="field-label">
            Observações
          </div>
          <div class="field-data">
            <textarea name="observacao">
              </textarea>
            </div>
          </div>
        
          <div class="button-container">
            <input type="submit" class="submit-button" id="botao_submit" name="botao-submit"
            value="Cadastrar">
        </div>
      </form>
    </div>
  </content>

  <footer class="border">
  </footer>

  <p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>
</body>
</html>

<script src="js/all.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/espo_scripts.js" ></script>