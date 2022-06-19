<?php

//connexion a la base de données
$baseconnecting= mysqli_connect('localhost','root','root','tunflix')or die("Could not connect to mysql".mysqli_error($baseconnecting));
if(isset($_POST['submit']))
{
	
		//recuperer les données saisie dans le formuler 
		// on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
        // pour éliminer toute attaque de type injection SQL et XSS
		 $nom=mysqli_real_escape_string($baseconnecting,htmlspecialchars($_POST['name']));
		 $email=mysqli_real_escape_string($baseconnecting,htmlspecialchars($_POST['email']));
		 $msg=mysqli_real_escape_string($baseconnecting,htmlspecialchars($_POST['message']));
		 //requete sql pour inserer les données dans la table de base de données
		 $sql="INSERT INTO Contact (name,email,message)VALUES ('$nom','$email','$msg')";
		 //executer la requete
		 mysqli_query($baseconnecting,$sql);
		 	
}
