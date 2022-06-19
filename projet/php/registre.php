<?php
session_start();

// connect to database
$baseconnecting = mysqli_connect('localhost', 'root', 'root', 'tunflix');

// variable declaration
$errors   = array();

// call the register() function if register_btn is clicked
if (isset($_POST['submit'])) {
	register();
}

// REGISTER USER
function register()
{
	// call these variables with the global keyword to make them available in function
	global $baseconnecting, $errors;

	// receive all input values from the form. Call the e() function
	// defined below to escape form values
	$fullname    =  e($_POST['fullname']);
	$username    =  e($_POST['username']);
	$email       =  e($_POST['email']);
	$password_1  =  e($_POST['password']);
	$password_2  =  e($_POST['password1']);

	//requete pour sortir tout les données de la table user pour verifier si le nom utlisateur ou email existe deja dans la bese 
	$requete = "SELECT * FROM user ";

	//executer la requete 
	$exec = mysqli_query($baseconnecting, $requete);
	//avoir la reponse d'apres la base 
	$rep      = mysqli_fetch_array($exec);

	if ($username == 'username') {
		array_push($errors, "username already  exist");
	}
	if ($email == 'email') {
		array_push($errors, "email already exist");
	}
	// form validation: ensure that the form is correctly filled
	if (empty($username)) {
		array_push($errors, "Username required");
	}

	if (empty($fullname)) {
		array_push($errors, "name required");
	}
	if (empty($email)) {
		array_push($errors, "Email required");
	}
	//verification du mot de passe 
	if (empty($password_1)) {
		array_push($errors, "Password required");
	}
	if ($password_1 != $password_2) {
		array_push($errors, "les deux mot de passe ne sont pas identique");
	}

	// enregistrer l'utilisateur s'il y a pas des erreur 
	if (count($errors) == 0) {
		$password = md5($password_1); //crypter le mot de passe avant enregistrer dans la base 


		$requet = "INSERT INTO user (fullname, username, email, password) 
					  VALUES('$fullname', '$username', '$email', '$password')";

		mysqli_query($baseconnecting, $requet);

		//redirection de lien vers la page de connexion  
		header('location: /login.php');
	}
}

// escape string pour verifier les champs s'il possedent des caractere special pour eviter les attaque 
function e($val)
{
	global $baseconnecting;
	return mysqli_real_escape_string($baseconnecting, trim($val));
}

//fonction pour afficher les erreur s'il existent 
function display_error()
{
	global $errors;

	if (count($errors) > 0) {
		echo '<div class="text-danger text-center p-2"> warning: ';
		foreach ($errors as $error) {
			echo ' ' . $error;
		}
		echo '</div>';
	}
}
