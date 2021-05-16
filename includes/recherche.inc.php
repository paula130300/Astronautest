<?php
if (isset($_POST["submit"])) {

$user_research = $_POST["recherche_result"];


require_once 'database_connexion.inc.php';
require_once 'functions.inc.php';

recherche($user_research)
header("location: ../social.php");
    exit();
}
}
