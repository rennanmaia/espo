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
    <?php include_once 'slider.php'; ?>
    <?php include_once 'service_classes.php'; ?>
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
<script src="js/script.js" ></script>


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

  $(document).ready(function(){
      // $('.slider').bxSlider();

      $('.slider2').bxSlider({
        autoControls: true,
        auto: true,
        pager: true,
        slideWidth: 800,
        mode: 'fade',
        captions: true,
        speed: 1000
      });      
  });
</script>