<?php

if (isset($_POST["submit"])) {

    $user_mail = $_POST["userEmail"];
    $user_pwd = $_POST["userPwd"];

    require_once 'database_connexion.inc.php';
    require_once 'functions.inc.php';

    //if (emptyInputLogin($conn, $user_mail, $user_pwd) !== false) {
      //  header("location: ../inscription.php?error=emailExists");
        //exit();
    //}

    loginUser($conn, $user_mail, $user_pwd);

}
else {
    header("location: ../connexion_fr.php");
    exit();
}