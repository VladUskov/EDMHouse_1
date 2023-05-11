<?php
session_start();
include_once 'data.php';

if ($_SESSION['user']) {
    header('Location: main');}

if(isset($_POST['vh'])){
    $name = $_POST['name'];
    $password = md5($_POST['password']);
    $check_user = mysqli_query($data, "SELECT * FROM `user` WHERE `name` = '$name' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_assoc($check_user);
        $_SESSION['user'] = [
            "id" => $user['id']];
        header('Location: /main');
    } else {
        $_SESSION['error'] = 'Не вірно!';
    }

}

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
                        <a class="nav-link" href="main#musican">Музика</a>
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





<div class="form333">

    <form action="" method="post">
        <label class="ttxt1">Ім'я</label>
        <input type="text" name="name" placeholder="Введіть своє ім'я">
        <label class="ttxt1">Пароль</label>
        <input type="password" name="password" placeholder="Введіть свій пароль">
        <button type="submit" name="vh" class="button121" >Ввійти</button>
        <a onClick='location.href="registr"' class="button122" >Зареєструватись</a>

        <?php
            if ($_SESSION['error']) {
                echo '<p class="errorr"> ' . $_SESSION['error'] . ' </p>';
            }
            unset($_SESSION['error']);
        ?>
    </form>

</div>

<footer class="text-center mt-5">
        <small>©2022. EDM House. All rights reserved.</small>
</footer>
<script src="js/bootstrap.min.js"></script>
</body>
</html>