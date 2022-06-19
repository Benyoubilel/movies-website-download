
<?php
session_start(); //ouvrir une session
//connexion avec la base de donnees
$baseconnecting = mysqli_connect('localhost', 'root', 'root', 'tunflix') or die("Could not connect to mysql" . mysqli_error($baseconnecting));
//requet pour sortir les donnee de la base avec limit de 12 element parmi tout les donnees
$req = "select * from movies order by year desc LIMIT 9";
//exuction de la requete
$exec_requete = mysqli_query($baseconnecting, $req);
//variable de type tableau pour stocker les donneés 
$moviess = [];
//boucle pour stocker chaque element trouver dans la base apres sa reponse a la requete dans le variable de type tableau
while ($movies  = mysqli_fetch_array($exec_requete)) {
    $moviess[] = $movies;
}
?>