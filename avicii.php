<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDM House</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
    <header class="container">

        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <a href="main"><img class="logotype_foto" src="images/logo.png" alt="">
                <h1 class="nav-link1">EDM House</h1></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="main">Головна</a>
                        <a class="nav-link" href="main#newmusic">Музика</a>
                        <a class="nav-link" href="main#news">Новини</a>
                        <a class="nav-link" href="main#tutorials">Tutorials</a>
                        <a class="nav-link" href="main#about">About</a>
                    </div>
                    <div class="panelll">
                   <?php
                   if(isset($_SESSION['user'])):
                   ?>
                  <a href="exit.php" class="button120">Вийти</a>
                  <?php else: ?>
                  <a href="autorisat" class="button120">Ввійти</a>
                  <a href="registr" class="button120">Зареєструватись</a>
                  <?php endif; ?>
                  </div>
                </div>
            </div>
        </nav>

    </header>
        

    <main class="container">

        <section id="musican" class="mt-5 container">

            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col2">
                    <div class="blok5">
                        <img src="images/Avicii.jpg" class="card-img-top" alt="...">
                        <div class="card-body1">
                            <h5 class="card-title2">Avicii</h5>
                            <p class="card-text11">Якщо ви чули, що комусь кажуть "у цієї людини ніби свій власний орекстр в голові", то ці слова,безумовно, можна віднести до Тіма Берглінга, якого всі знають як - Avicii. Це шведський DJ/Музикант, який  зробив неймовірний вклад в електронну танцювальну музику. Він один із тих, хто вивів танцювальну музику на комерційний рівень. Його композиція Levels, що випущена в 2011 перевернула світ, і уявлення людей про "не живу" музику. Цей трек відкрив йому усі двері. А далі почалось: запрошення на усі можливі фестивалі(включаючи Ultra Miami), колаборації з найіменитішими музикантами, виступ з Мадонною на одній сцені та багато чого іншого.Але до комерційного успіху його привели реелізи Hey Brother та Wake Me Up, які були написані,поєднуючи в собі танцювальну ммузику і Сountry, вони посіли одразу перші місця усих можливих чартів, і закріпили за Avicii статус</p>
                        </div>
                        <div class="bomba">
                            <button type="button" class="button12" onClick='location.href="main#musican"' >Повернутись назад</button>
                        </div>
                    </div>
                </div>



            </div>
        </section>











    </main>




    <footer class="text-center mt-5">
        <small>©2022. EDM House. All rights reserved.</small>
    </footer>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>