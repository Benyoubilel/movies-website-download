<?php
session_start();
    if (isset($_SESSION) && isset($_SESSION['username'])){
        //utilisateur connecté
        session_unset();
    } 
    header('Location: /login.php', true, 302);
