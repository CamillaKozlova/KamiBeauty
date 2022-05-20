<?php

include("path.php");
include("app/controllers/users.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/6781f83569.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Harmattan&family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet">
    <title>KamiBeauty</title>
  </head>
  <body>
  <?php include("app/include/header.php"); ?>

  <!-- END HEADER -->
  <!-- FORM -->
  <div class="container reg_form">
      <form class="row justify-content-center" method="post" action="log.php">
          <h2 class="col-12">Авторизация</h2>
          <div class="mb-3 col-12 col-md-4 err">
              <p><?=$errMsg?></p>
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
              <label for="formGroupExampleInput" class="form-label">Ваша почта (при регистрации)</label>
              <input name="email"  value="<?=$email?>" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="введите ваш email...">
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
              <label for="exampleInputPassword1" class="form-label">Пароль</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="введите ваш пароль...">
          </div>
          <div class="w-100"></div>
          <div class="mb-3 col-12 col-md-4">
              <button type="submit" name="button-log" class="btn btn-secondary">Войти</button>
              <a href="reg.php">Зарегистрироваться</a>
          </div>
      </form>
  </div>
  <!-- END FORM -->

  <!-- footer -->
  <?php include("app/include/footer.php"); ?>
  <!-- // footer -->


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  -->
  </body>
</html>