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
</head>
<body>
  <?php include_once 'header.php'; ?>
  
  <content>
    <!-- <div class="slider border">Slider</div> -->
    <div class="slider">

    <div class="slider2">
      <div>
        <img src="images/floresta1.jpg" width="100%" title="Floresta 1">
      </div>
      <div>
        <img src="images/floresta2.jpg" width="100%" title="Floresta 2">
      </div>
      <div>
        <img src="images/floresta3.jpg" width="100%" title="Floresta 3">
      </div>
  </div>
    <?php include_once 'ads_list.php'; ?>
    <div class="testimonials border">Depoimentos</div>
    <div class="who-wer-are border">Quem somos</div>
  </content>

  <footer class="border">
  </footer>
</body>
</html>

<script src="js/all.min.js"></script>
<script src="js/jquery.js"></script>


<script>
  $('.btn-menu').click(function () {
    $('.menu').show()
  })

  $('.btn-close').click(function () {
    $('.menu').hide()
    return false
  })

  // $('.btn-menu-item').click(function () {
  //   $('.menu').hide()
  //   return false
  // })
  $('.menu').click(function () {
    $('.menu').hide()
  })
</script>