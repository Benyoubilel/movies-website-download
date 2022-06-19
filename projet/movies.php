<?php include('php/movies.php');
session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mystylefilm.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>movies</title>
</head>

<body>
    <header class="navbar bg-dark " id="up">
        <div class="container-fluid ">
            <div class="navbar-logo header-logo ">
                <a href="index.php" class="nav-link navbar-brand">
                    <span class="text-danger animated  fw-bold">Tun</span>
                    <span class="text-warning fw-bold infinite">Flix</span>
                </a>
            </div>
            <div class="menu ">
                <ul class="list-inline displaymenu ">
                    <li class="navbar-item list-inline-item">
                        <a href="index.php" class="text-light nav-link btn-outline-danger rounded-pill ">Home</a>
                    </li>
                    <li class="nav-item list-inline-item">
                        <a href="movies.php" class="nav-link text-light">Movies</a>
                    </li>
                    <li class="nav-item list-inline-item ">
                        <a href="contact.php" class="nav-link text-light">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="recherche ">
                <form>
                    <input type="search" name="res" placeholder="search" class="rech search-switch search-model">
                    <input type="button" class="bttn" name="rech" value="">
                </form>
            </div>
            <div class="profil">
                <!-- condition c il ya une session ouverte il affiche la bouton log out sinon il affiche affiche -->
                <?php if (isset($_SESSION) && isset($_SESSION['username'])) : ?>
                    <ul class="list-inline displaymenu ">
                        <li name="logout" class="nav-item list-inline-item text-light  btn-outline-danger rounded">
                            <a href="php/logout.php" class="nav-link text-light ">Log out</a>
                        </li>
                    </ul>
                <?php endif ?>
                <!-- fin condition -->
            </div>
        </div>
    </header>

    <section style="height:100vh; width: 100vw;" class="bg-dark -0 pt-lg-5 text-center text-sm-start ">
        <div class="container text-center ">
            <div class="d-sm-flex align-items-center justify-content-between  ">
                <div>
                    <h1 class="text-warning">Enjoy </h1>
                    <p class="lead my-5 text-light">
                        Welcome, TunFlix hope you great time. <br>
                        Search any movies you want and download it.<br>
                        Nice day and funny moment.
                    </p>
                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/catfilma.png" alt="" />
            </div>
            <a href="#film">
                <span class="btn btn-outline-warning  position-absolute bottom-0 ">Show <i class="bi bi-chevron-double-down text-danger "></i></span>
            </a>
        </div>
    </section>
    <!-- Section-->
    <section class="py-2" id="film">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- boucle pour parcourir les films est les afficher -->
                <?php foreach ($films as $film) :  ?>
                    <a href="movie.php?idfilm=<?php echo ($film['id_film']); ?>" class="imgx text-decoration-none text-dark">
                        <div class="col mb-5 ">
                            <div class="card h-100 ">
                                <!-- film image-->
                                <img class="card-img-top" src="<?php echo ($film['image']); ?>" alt="..." id="<?php echo ($film['id_film']); ?>" />
                                <!-- nom film-->
                                <div class="card-body p-1">
                                    <div class="text-center ">
                                        <!-- nom film-->
                                        <h5 class="fw-bolder title  "><?php echo ($film['title']); ?></h5>
                                        <!-- date sortie film-->
                                        <?php echo ($film['year']); ?>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </a>
                <?php endforeach; ?>
                <!-- fin boucle -->
            </div>
        </div>
    </section>
    <footer class="bg-dark container-fluid  text-center text-light">
        <div class="social p-2 container-fluid">
            <a href="https://www.facebook.com/ben.you.bilel">
                <img src="img/icons8-facebook .svg" alt="" class="img-fluid">
            </a>
            <a href="https://www.instagram.com/bilel_ben_you/">
                <img src="img/icons8-instagram.svg" alt="" class="img-fluid">
            </a>
            <a href="https://github.com/Benyoubilel">
                <img src="img/icons8-github1.svg" alt="" class="img-fluid">
            </a>
            <a href="mailto:bilel@ben-youssef.fr">
                <img src="img/icons8-google.svg" alt="" class="img-fluid">
            </a>
        </div>
    </footer>
    <footer class="p-2 bg-dark text-white text-center position-relative">
        <div class="container">
            <p class="lead">Copyright &copy; 2022 Bilel Ben Youssef</p>

            <a href="#up" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>
</body>

</html>