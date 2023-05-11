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

                <a href="#"><img class="logotype_foto" src="images/logo.png" alt="">
                <h1 class="nav-link1">EDM House</h1></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="#">Головна</a>
                        <a class="nav-link" href="#newmusic">Музика</a>
                        <a class="nav-link" href="#news">Новини</a>
                        <a class="nav-link" href="#tutorials">Tutorials</a>
                        <a class="nav-link" href="#about">About</a>
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
        

<section class="imageflex">



          
        <div id="carouselExampleControls" class="carousel slide panda-slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                
                <div class="carousel-item active">
                    <div class="panel d-flex align-items-center row p-5">
                        <div class="col-md-7">
                            <h1 class="text_upp">Jexxi</h1>
                            <p class="text_upp1">TEXT</p>
                            <button class="button11" onClick='location.href="avicii"'>Детальніше</button>
                        </div>
                        <div class="aa1 col-md-5"><img src="images/banner-images/MartinGarrix.jpg" class="d-block" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="panel d-flex align-items-center row p-5">
                        <div class="col-md-7">
                            <h1 class="text_upp">Bexxi</h1>
                            <p class="text_upp1">TEXT</p>
                            <button class="button11" onClick='location.href="avicii"'>Детальніше</button>
                        </div>
                        <div class="aa1 col-md-5"><img src="images/banner-images/Major_Lazer.jfif" class="d-block" alt="..."></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="panel d-flex align-items-center row p-5">
                        <div class="col-md-7">
                            <h1 class="text_upp">Farling</h1>
                            <p class="text_upp1">TEXT</p>
                            <button class="button11" onClick='location.href="avicii"'>Детальніше</button>
                        </div>
                        <div class="aa1 col-md-5"><img src="images/banner-images/Avicii.jpg" class="d-block" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>



        </section>


    
  
    <!--  -->
    <main class="container">

        <section class="container overflow-hidden mt-5 categories">
            <div class="row row1 g-5">

                <div class="col1">
                    <a href="#news">
                    <div class="blok">
                        <h1 class="text-white">Новини</h1>
                        <img src="images/22.gif" alt="">
                    </div>
                </a>
                </div>

                <div class="col1">
                    <a href="#musican">
                    <div class="blok">
                        <h1 class="text-white">Музиканти</h1>
                        <img src="images/martin-garrix.gif" class="aaaaaa" alt="">
                    </div>
                </a>
                </div>

                <div class="col1">
                    <a href="#newmusic">
                    <div class="blok">
                        <h1 class="text-white1">Свіжа музика</h1>
                        <img src="images/21.gif" class="aaaaa" alt="">
                    </div>
                </a>
                </div>

                <div class="col1">
                    <a href="#festival">
                    <div class="blok">
                        <h1 class="text-white2">Фестивалі</h1>
                        <img src="images/AVICII-GIF.gif" class="aaaa" alt="">
                    </div>
                </a>
                </div>

                <div class="col1">
                    <a href="#tutorials">
                    <div class="blok">
                        <h1 class="text-white">Tutorials</h1>
                        <img src="images/44.gif" class="aaa" alt="">
                    </div>
                </a>
                </div>

                <div class="col1">
                    <a href="#about">
                    <div class="blok">
                        <h1 class="text-white">Про нас</h1>
                        <img src="images/18.gif" alt="">
                    </div>
                </a>
                </div>

            </div>
        </section>





        <section id="news" class="mt-5 container">
            <h3>Новини</h3>

            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col">
                    <div class="blok2">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button1" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="blok2">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button1" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="blok2">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button1" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>


            </div>
        </section>




        <section id="musican" class="mt-5 container">
            <h3>Музиканти</h3>

            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col">
                    <div class="blok2">
                        <img src="images/Avicii.jpg" class="card-img-top" alt="...">
                        <div class="card-body1">
                            <h5 class="card-title">Avicii</h5>
                            <p class="card-text1">Якщо ви чули, що комусь кажуть "у цієї людини ніби свій власний орекстр в голові", то ці слова,безумовно, можна віднести до Тіма Берглінга, якого всі знають як - Avicii...</p>
                        </div>
                        <div class="bomba">
                            
                            <button type="button" class="button1" onClick='location.href="avicii"'>Читати повністю</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="blok2">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button1" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="blok2">
                        <img src="images/David Guetta.jfif" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">David Guetta</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional.
                            </p>
                        </div>
                        <div class="bomba">
                            <button type="button" class="button1" onClick='location.href="#"'>Читати повністю</button>
                        </div>
                    </div>
                </div>


            </div>
        </section>




        <section id="newmusic" class="mt-5 container">
            <h3>Свіжа музика</h3>

            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col">
                    <div class="blok2">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button1" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="blok2">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button1" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="blok2">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button1" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>


            </div>
        </section>




        <section id="festival" class="mt-5 container">
            <h3>Фестивалі</h3>

            <div class="row12 row-cols-1 row-cols-md-3 g-4">

                <div class="col3">
                    <div class="blok22">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button13" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>

                <div class="col3">
                    <div class="blok22">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button13" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>

                <div class="col3">
                    <div class="blok22">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button13" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>


            </div>
        </section>





       




        <section id="tutorials" class="mt-5 container">
            <h3>Tutorials</h3>

            <div class="row row-cols-1 row-cols-md-3 g-4">

                <div class="col">
                    <div class="blok2">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button1" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="blok2">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button1" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="blok2">
                        <img src="images/Martin-Garrix_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Martin Garrix </h5>
                            <p class="card-text">TEXT
                            </p>
                        </div>
                        
                        <div class="bomba">
                            <button type="button" class="button1" onClick='location.href="martingarrix"'>Читати повністю</button>
                        </div>
                    </div>
                </div>


            </div>
        </section>


        <section id="about" class="mt-5 container">
            <h3>Про нас</h3>

            <div class="blok4">
                <h4>adadadad</h4>
            </div>
        </section>
    </main>




    <footer class="text-center mt-5">
        <small>©2022. EDM House. All rights reserved.</small>
    </footer>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>