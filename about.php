<?php
include "path.php";
include "app/controllers/topics.php";
$posts=selectAllFromPostsWithUsersOnIndex('posts', 'users');


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
    <link rel="stylesheet" href="assets/css/about.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Harmattan&family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet">
    <title>KamiBeauty</title>
</head>
<body>
<?php include("app/include/header.php"); ?>
<div class="aboutgood">
    <h2 align="center" id="about">Немного о нас</h2>
    <p id="about_me">⠀⠀⠀⠀Косметические средства уже давно стали постоянными спутниками в жизни человека.
        Все хотят поддерживать естественную красоту и выглядеть молодо как можно дольше.
        Современная косметика и парфюмерия способна удовлетворить многие запросы человечества для поддержания эстетических и природных данных человека.<br><br>⠀⠀⠀⠀Магазин KamiBeauty - преданная команда приверженцев красоты, которая охотится за самыми инновационными и культовыми косметическими средствами.
        Наши специалисты могут предложить весь спектр продуктов - от маленьких тестеров парфюмерии до больших косметических наборов.
        Это место для тех, кто ищет высокое качество за невысокую цену, и хочет получить только ту продукцию, которая поражает любого клиента на длительный срок.<br><br><b>Ассортимент</b><br><br>Интернет-магазин позаботился не только о качественном обслуживании и незабываемом опыте онлайн-шопинга, но и о большом, востребованном ассортименте</p>

</div>
<div class="container overflow-hidden">

    <div class="card" style="width: 18rem;">
        <img src="assets/img/posts/onkatalog.jpg" class="card-img-top" alt="...">

        <div class="card-body">
            <h5 class="card-title">Наши товары</h5>
            <p class="card-text">Переходите в каталог нашего интернет-магазина и осуществляйте покупки с удовольствием!</p>
            <a href="index.php" class="btn btn-primary">В каталог</a>

        </div>

    </div>

    <h3 id="prem">Наши преимущества</h3>

    <div class="row gy-5 ass">
        <div class="col-6">
            <div class="p-3 border bg-light"><img height="40px" width="40px" src="assets/img/posts/price.png" alt="price">  Низкие цены</div>
        </div>
        <div class="col-6">
            <div class="p-3 border bg-light"><img height="40px" width="40px" src="assets/img/posts/quality.png" alt="quality"> Люксовое качество</div>
        </div>
        <div class="col-6">
            <div class="p-3 border bg-light"><img height="40px" width="40px" src="assets/img/posts/description.png" alt="description"> Подробное описание товаров</div>
        </div>
        <div class="col-6">
            <div class="p-3 border bg-light"><img height="40px" width="40px" src="assets/img/posts/best.png" alt="best">  Отзывы к товарам</div>
        </div>
    </div>
</div>


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
