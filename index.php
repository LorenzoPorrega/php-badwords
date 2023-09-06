<?php
  
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Badwords censor tool</title>
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
    <form action="filtered.php" method="POST">
      <div class="row">
        <div class="col-12">
          <label for="paragrafo" class="form-label fw-bold">Paragrafo</label>
          <input type="text" id="paragrafo" class="form-control" name="paragraph">
        </div>
      </div>
      <div class="row mt-2">
        <div class="col-12">
          <label for="censura" class="form-label fw-bold">Parola da censurare</label>
          <input type="text" id="censura" class="form-control" name="wordToCensor">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary mt-5 btn-lg" action="filtered.php">Censura!</button>
        </div>
      </div>
    </form>
  </div>
</body>
<!--<script src="./js/main.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>