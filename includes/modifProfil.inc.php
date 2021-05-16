<?php

session_start();

if (isset($_POST["submit"])) {

    $user_prenom = $_POST["userPrenom"];
    $user_nom = $_POST["userNom"];
    $user_poids = $_POST["userPoids"];
    $user_naissance = $_POST["userNaissance"];
    $user_adresse = $_POST["userAdresse"];
    $user_ville = $_POST["userVille"];
    $user_postal = $_POST["userPostal"];
    $user_mail = $_POST["userEmail"];
    $user_pseudo = $_POST["userPseudo"];

    $user_id = $_SESSION["userid"];
    


    //$user_id = $_SESSION['userid'];
    require_once 'database_connexion.inc.php';
    require_once 'functions.inc.php';
    //echo $_SESSION["userid"];

    

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
    updateUser($conn, $user_prenom, $user_nom, $user_poids, $user_naissance, $user_adresse, $user_ville, $user_postal, $user_mail, $user_pseudo, $user_id);


}
else
{
    header("location: ../modifProfil.inc.php");
    exit();
}