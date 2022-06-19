<?php include('php/index.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="tunflix" content="movies, download, search">
    <meta name="description" content="Free movies download with torrent file">
    <meta http-equiv="refresh" content="30">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>TunFlix</title>
</head>

<body>
    <header class="navbar bg-dark  " id="rollup">
        <div class="container-fluid ">
            <div class="navbar-logo header-logo ">
                <a href="index.php" class="nav-link navbar-brand">
                    <span class="text-danger animated  fw-bold">Tun</span>
                    <span class="text-warning fw-bold infinite">Flix</span>
                </a>
            </div>

            <div class="menu" id="navmenu">
                <ul class="list-inline displaymenu ">
                    <li class="navbar-item list-inline-item">
                        <a href="index.php" class="text-light nav-link btn-outline-danger rounded-pill ">Home</a>
                    </li>
                    <li class="nav-item list-inline-item ">
                        <!-- condition de session -->
                        <!-- s il ya une session on cliquant sur le lien movies
                                 nous redirige vers la page movies sinon il nous redirige vers la page login -->

                        <?php if (isset($_SESSION) && isset($_SESSION['username'])) : ?>
                            <a href="movies.php" class="nav-link text-light ">Movies</a>
                        <?php else :  ?>
                            <a href="login.php" class="nav-link text-light ">Movies</a>
                        <?php endif ?>
                        <!-- finde la condition php -->
                    </li>
                    <li class="nav-item list-inline-item ">
                        <a href="contact.php" class="nav-link text-light">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="recherche">
                <form>
                    <input type="search" placeholder="search" class="rech search-switch search-model">
                    <input type="button" class="bttn" value="">
                </form>
            </div>
            <div class="profil">
                <ul class="list-inline displaymenu">
                    <!-- condition s il ya une session et un utisateur connecter 
                            il affiche dans le headher un bouton log out pour se deconnecter 
                            sinon il aficche les bouton registre et login -->
                    <?php if (isset($_SESSION) && isset($_SESSION['username'])) : ?>
                        <li name="logout" class="nav-item list-inline-item text-light btn-outline-danger rounded">
                            <a href="php/logout.php" class="nav-link text-light ">Log out</a>
                        </li>
                    <?php else :  ?>
                        <li class="nav-item list-inline-item">
                            <a href="login.php" class="nav-link text-light">Login</a>
                        </li>
                        <li class="nav-item list-inline-item ">
                            <a href="registre.php" class="nav-link text-light btn-outline-danger">Create account</a>
                        </li>
                    <?php endif; ?>
                    <!-- fin de la condition php -->
                </ul>
            </div>
        </div>
    </header>
    <section style="height:100vh; width: 100vw;" class=" bg-dark -0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1 class="text-warning">Welcome </h1>
                    <p class="lead my-4 text-light">
                        Welcome to the official TunFlix website.
                        Here you can browse and download movies in excellent
                        1080p quality,
                        all at the smallest file size. TunFlix Movies Torrents.
                    </p>
                    <?php if (isset($_SESSION) && isset($_SESSION['username'])) : ?>
                        <a href="movies.php" class="link text-light">
                            <button class="btn btn-warning text-light btn-lg btn-outline-danger w-50 p-2 m-1" data-bs-toggle="modal" data-bs-target="#enroll">
                                Start
                            </button>
                        </a>
                    <?php else :  ?>
                        <a href="login.php" class="link text-light">
                            <button class="btn btn-warning text-light btn-lg btn-outline-danger w-50 p-2 m-1" data-bs-toggle="modal" data-bs-target="#enroll">
                                Start
                            </button>
                        </a>
                    <?php endif; ?>

                </div>
                <img class="img-fluid w-50 d-none d-sm-block" src="img/popcornn.png" alt="" />
            </div>
        </div>
    </section>

    <section class="carousel ">
        <br>
        <br>
        <div class=" align-items-center justify-content-center ">
            <div class="container rounded">
                <div class="rollers  ">
                    <div class="wrapper ">
                        <div class="items-container roll-LL  ">
                            <!--afficher quelque image des moviess a partir de la base de donnees sur la page d'acceuil -->
                            <?php foreach ($moviess as $movies) :  ?>
                                <div class="item"><a href="/projet/movie.php?idfilm=<?php echo ($movies['id_film']); ?>"> <img src="<?php echo ($movies['image']);      ?>" alt="" class="company img-fluid"> </a></div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

    </section>
    <!--Foooter-->

    <footer class="bg-dark container-fluid  text-center text-light p-4">
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

            <a href="#rollup" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>
</body>

</html>