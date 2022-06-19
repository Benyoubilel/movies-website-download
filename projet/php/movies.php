<?php  
session_start();
//verifier s'il ya une session ouverte ou non 
if (!isset($_SESSION) || !isset($_SESSION['username']))
{
    header('Location: /login.php', true, 302);
    die();
}
$db = mysqli_connect('localhost', 'root', 'root', 'tunflix');
$req= "select * from movies order by year desc";
$exec_requete = mysqli_query($db,$req);
$films=[] ;
while($film = mysqli_fetch_array($exec_requete)  )
{
    $films[]=$film;
}
