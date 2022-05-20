<?php
include "../../path.php";
include "../../app/controllers/posts.php";
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
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&family=Harmattan&family=Inter:wght@500;600;700;800&display=swap" rel="stylesheet">
    <title>KamiBeauty</title>
</head>
<body>
<?php include("../../app/include/header-admin.php"); ?>
<div class="container">
    <?php include("../../app/include/sidebar-admin.php"); ?>

    <div class="posts col-9">
        <div class="row title-table">
            <h2>Редактирование записи</h2>
        </div>

        <div class="row add-post">
            <div class="mb-12 col-12 col-mb-12 err">
                <!--Вывод массива с ошибками-->
                <?php include("../../app/helps/errorInfo.php"); ?>
            </div>
            <form action="edit.php" method="post" enctype="multipart/form-data">
                <input name="id" value="<?=$id; ?>" type="hidden">
                <div class="col mb-4">
                    <input name="title" value="<?=$post['title']; ?>" type="text" class="form-control" placeholder="Title" aria-label="Название статьи">
                </div>
                <div class="col">
                    <label for="editor" class="form-label">Содержимое записи</label>
                    <textarea name="content" class="form-control" id="editor" rows="6"><?=$post['content']; ?></textarea>
                </div>
                <div class="input-group col mb-4 mt-4">
                    <input name="img" type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>
                <select name="topic" class="form-select" aria-label="Default select example">

                    <?php foreach ($topics as $key => $topic): ?>
                        <option value="<?=$topic['id']?>"><?=$topic['name'];?></option>
                    <?php endforeach;; ?>
                </select>

                <div class="form-check">
                    <?php if (empty($publish) && $publish == 0): ?>
                        <input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked">
                        <label class="form-check-label" for="flexCheckChecked">
                            Publish
                        </label>
                    <?php else: ?>
                        <input name="publish" class="form-check-input" type="checkbox" id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            Publish
                        </label>
                    <?php endif; ?>
                </div>
                <div class="col col-6">
                    <button name="edit_post" class="btn btn-primary" type="submit">Сохранить запись</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- footer -->
<?php include("../../app/include/footer.php"); ?>
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
