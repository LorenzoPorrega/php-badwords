<?php
  $paragraph = $_POST["paragraph"];
  $loweredParagraph = strtolower($paragraph);
  $paragraphLenght = strlen($paragraph);

  $wordToCensor = strtolower($_POST["wordToCensor"]);

  $censoredParagraph = str_replace($wordToCensor,"***",$loweredParagraph);
  $censoredParagraphLenght = strlen($censoredParagraph);
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censurato &#10003;</title>
  <!-- CUSTOM STYLE SHEET FILE LINK -->
  <!--<link rel="stylesheet" href="./css/style.css">-->
  
  <!-- THIRD PARTY LIBRARIES -->
  <!-- BOOTSTRAP CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- FONTAWESOME CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- STANDARD FAVICON TO AVOID CONSOLE ERRORS ON FIREFOX -->
  <link rel="icon"type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">
  <!-- VUE CDN -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- LUXON CDN -->
  <script src="https://cdn.jsdelivr.net/npm/luxon@3.3.0/build/global/luxon.min.js"></script>
  <!-- AXIOS CDN -->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
  <div class="container text-center mt-5">
    <div class="row">
      <div class="col-12">
        <h1 class="fw-bold">Testo da censurare:</h1>
        <p><?php echo $paragraph . " (lunghezza prima della censura: " . $paragraphLenght . ")" ?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h1 class="fw-bold">Parola da censurare:</h1>
        <p><?php echo $wordToCensor?></p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <h1 class="fw-bold">Testo censurato:</h1>
        <p><?php echo $censoredParagraph . " (lunghezza risultante dopo la censura: " . $censoredParagraphLenght . ")"?></p>
      </div>
    </div>
  </div>
</body>
<!--<script src="./js/main.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>