<?php
session_start();
if (!isset($_SESSION) || !isset($_SESSION['username'])) {
  header('Location: /projet/login.php', true, 302);
  die();
}
$baseconnecting = mysqli_connect('localhost', 'root', 'root', 'tunflix');
$id = $_GET['idfilm'];
$req = "SELECT * FROM movies where id_film = '$id' ";
//executer la requete 
$exec_requete = mysqli_query($baseconnecting, $req);
//avoir la reponse d'apres la base 
$reponse  = mysqli_fetch_array($exec_requete);


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/mystylemovie.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="css/animate.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
  <title><?php echo ($reponse['title']); ?></title>
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
      <div class="menu">
        <ul class="list-inline displaymenu">
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
      <div class="recherche">
        <form>
          <input type="search" placeholder="search" class="rech search-switch search-model">
          <input type="button" class="bttn" value="">
        </form>
      </div>
      <div class="profil">
        <ul class="list-inline displaymenu">
          <li class="nav-item list-inline-item ">

            <a href="php/logout.php" class="nav-link text-light btn-outline-danger">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </header>
  <br>
  <section id="learn" class="p-5 bg-dark">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md">
          <img src="<?php echo ($reponse['image']); ?>" class="img-fluid w-50 img" />
        </div>
        <div class="col-md p-5 text-light">
          <h2><?php echo ($reponse['title']); ?></h2>
          <p class="lead">
            <b>Year</b> &nbsp;:&nbsp;<?php echo ($reponse['year']); ?>
            <br>
            <b> Languge </b> &nbsp;:&nbsp;<?php echo ($reponse['langue']); ?>
            <br>
            <b> Runtime </b> &nbsp;:&nbsp;<?php echo ($reponse['runtime']); ?> Min
            <br>
            <b>Size</b> &nbsp;:&nbsp;<?php echo ($reponse['size']); ?>
            <br>
            <b>Quality</b> &nbsp;:&nbsp;
            <?php echo ($reponse['quality']); ?>
          </p>
          <p>
          <h4>Description&nbsp;:</h4>
          <?php echo ($reponse['description']); ?>
          </p>
          <a href="<?php echo ($reponse['url']); ?>" class="btn btn-success mt-3">
            <i class="bi bi-arrow-down-circle"></i> Download
          </a>
        </div>
      </div>
    </div>
  </section>
  <br>
  <!--Foooter-->

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