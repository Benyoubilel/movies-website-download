<?php
session_start();
// connexion à la base de données
$baseconnecting = mysqli_connect('localhost', 'root', 'root', 'tunflix');
$errors   = array();
if (isset($_POST['login'])) {


    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $usernameouemail = mysqli_real_escape_string($baseconnecting, htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($baseconnecting, htmlspecialchars($_POST['password']));

    if (empty($usernameouemail)) {
        array_push($errors, "Email required");
    }
    //verification du mot de passe 
    if (empty($password)) {
        array_push($errors, "Password required");
    }

    //crypter le mot de passer pour verfier avec celle qui est dans la base 
    $password = md5($password);
    $req = "SELECT count(*) FROM user where ((username = '" . $usernameouemail . "' and password = '" . $password . "') or (email = '" . $usernameouemail . "' and password = '" . $password . " LIMIT 1' ))";
    //executer la requete 
    $exec_requete = mysqli_query($baseconnecting, $req);
    //avoir la reponse d'apres la base 
    $reponse      = mysqli_fetch_array($exec_requete);
    //compter nombre de reponse
    $count = $reponse['count(*)'];

    if ($count != 0) // nom d'utilisateur et mot de passe correctes
    {
        $_SESSION['username'] = $usernameouemail;
        header('Location: /movies.php');
    } else // mot de passe ou nom utilisateur incorrect 
    {
        header('Location: /login.php');
    }
}



mysqli_close($baseconnecting); // fermer la connexion
