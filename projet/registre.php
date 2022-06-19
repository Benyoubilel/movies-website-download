<?php include("php/registre.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mystyleregistre.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <title>Registre</title>
</head>

<body>
    <header class="navbar bg-dark  " id="rollup">
        <div class="container-fluid ">
            <div class="navbar-logo header-logo ">
                <a href="index.php" class="nav-link navbar-brand">
                    <span class="text-danger animated  fw-bold" id="rollup">Tun</span>
                    <span class="text-warning fw-bold infinite">Flix</span>
                </a>
            </div>
            <div class="menu">
                <ul class="list-inline displaymenu">
                    <li class="navbar-item list-inline-item">
                        <a href="index.php" class="text-light nav-link btn-outline-danger rounded-pill ">Home</a>
                    </li>
                    <li class="nav-item list-inline-item">
                        <?php if (isset($_SESSION) && isset($_SESSION['username'])) : ?>
                            <a href="movies.php" class="nav-link text-light">Movies</a>
                        <?php else :  ?>
                            <a href="login.php" class="nav-link text-light">Movies</a>
                        <?php endif ?>
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

                    <li class="nav-item list-inline-item">
                        <?php if (isset($_SESSION) && isset($_SESSION['username'])) : ?>
                            <a href="php/logout.php" class="nav-link text-light btn-outline-danger">Log out</a>
                        <?php else : ?>
                            <a href="login.php" class="nav-link text-light btn-outline-danger">Log in</a>
                        <?php endif; ?>
                    </li>

                </ul>
            </div>
        </div>

    </header>
    <br>
    <section class="bg-dark text-light p-5 p-lg-0 pt-lg-5 text-center text-sm-start">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1 class="text-warning">Welcome <span class="text-danger fw-bolder">!<span> </h1>
                    <p class="lead my-4">
                        welcome in our website.
                        <br>
                        you should create an account before surf an download movies.
                    </p>
                    <hr>
                    <hr>
                    <h1 class="text">Create account:</h1>

                    <form method="post" class="p-4">
                        <label for="" class=" fw-bold label">Full Name: </label>
                        <br>
                        <input type="text" name="fullname" id="fullname" class="fullname rounded text-light" placeholder="Full name">
                        <br>
                        <hr>
                        <label for="" class=" fw-bold label">Username: </label>
                        <br>
                        <input type="text" name="username" id="Username" class="fullname rounded text-light" placeholder="Full name">
                        <br>
                        <hr>
                        <label for="" class=" fw-bold label">Email: </label>
                        <br>
                        <input type="email" name="email" id="email" class="email rounded text-light" placeholder="Email">
                        <br>
                        <hr>
                        <label for="" class=" fw-bold label">Password:</label>
                        <br>
                        <input type="password" name="password" id="password" placeholder="Password" class="password text-light rounded">
                        <br>
                        <hr>
                        <label for="" class=" fw-bold label"> Confirm Password:</label>
                        <br>
                        <input type="password" name="password1" id="password1" placeholder="Confirm Password" class="password text-light rounded">
                        <hr>
                        <input type="submit" name="submit" value="Create" class="login btn-outline-danger rounded">
                        <?php echo (display_error()); ?>
                    </form>
                </div>
                <img class="img-fluid p-4 d-none d-sm-block  w-50" src="img/logo2.svg" alt="" />
            </div>

        </div>
        <br>
    </section>
    <!--Foooter-->
    <br>
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

            <a href="#rollup" class="position-absolute bottom-0 end-0 p-5">
                <i class="bi bi-arrow-up-circle h1"></i>
            </a>
        </div>
    </footer>

</body>

</html>