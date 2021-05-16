<?php

if (isset($_POST["submit"])) {

    $user_prenom = $_POST["userPrenom"];
    $user_nom = $_POST["userNom"];
    $user_poids = $_POST["userPoids"];
    $user_sexe = $_POST["userSexe"];
    $user_naissance = $_POST["userNaissance"];
    $user_adresse = $_POST["userAdresse"];
    $user_ville = $_POST["userVille"];
    $user_postal = $_POST["userPostal"];
    $user_entreprise = $_POST["userEntreprise"];
    $user_mail = $_POST["userEmail"];
    $user_pseudo = $_POST["userPseudo"];
    $user_pwd = $_POST["userPwd"];
    $user_code = $_POST["userCode"];


    require_once 'database_connexion.inc.php';
    require_once 'functions.inc.php';

    /*if (emptyInputSignup($user_mail, $user_pwd) == false) {
        header("location: ../inscription.php?error=emptyinput");
        exit();
    }
    if (invalidDEmail($user_mail) !== false) {
        header("location: ../inscription.php?error=invalidEmail");
        exit();
    }
    if (invalidPwd($user_pwd) !== false) {
        header("location: ../inscription.php?error=invalidPwd");
        exit();
    }*/
    if (emailExists($conn, $user_mail) !== false) {
        header("location: ../inscription.php?error=emailExists");
        exit();
    }

   /* $user_image = $_FILES['file']['name'];
    
    $target_dir = "Avatar/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png");

  // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
  
     // Upload file
     move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$user_image);

  }*/

  if (isAdmin($conn, $user_code) !== false) {
    if (isAdminTaken($conn, $user_code) !== false) {
        header("location: ../inscription.php?error=codetaken");
        exit();
        }
    $isAdmin = "oui";
     
    }
  else {
     if (codeExists($conn, $user_code) == false) {
    header("location: ../inscription.php?error=codeNotExists");
    exit();
    }
    if (codeTaken($conn, $user_code) !== false) {
        header("location: ../inscription.php?error=codeTaken");
        exit();
    } 
    $isAdmin = "non";
  }


    









    createUser($conn, $user_prenom, $user_nom, $user_poids, $user_sexe, $user_naissance, $user_adresse, $user_ville, $user_postal, $user_entreprise, $user_mail, $user_pseudo, $user_pwd, $user_code, $isAdmin);


}
else
{
    header("location: ../inscription.php");
    exit();
}