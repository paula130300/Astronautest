<?php

function emptyInputSignup($user_mail, $user_pwd)
{

    $result;
    if (empty($user_mail) || empty($user_pwd)) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    

}

/*function invalidUid($user_mail)
{

    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $user_mail)) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    

}*/
function invalidEmail($user_mail)
{

    $result;
    if (!filter_var($user_mail, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    

}
/*function pwdMatch($user_pwd)
{

    $result;
    if ($user_pwd !== $pwdRepeat)) {
        $result = true;
    }
    else
    {
        $result = false;
    }
    

}*/

function emailExists($conn, $user_mail)
{
    $sql = "SELECT * FROM users WHERE usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../inscription.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $user_mail);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}




function codeExists($conn, $user_code)
{
    $sql = "SELECT * FROM codeusers WHERE usersCode = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../inscription.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $user_code);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function codeTaken($conn, $user_code)
{
    $sql = "SELECT * FROM users WHERE usersCode = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../inscription.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $user_code);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}

function isAdmin($conn, $user_code)
{
    $sql = "SELECT * FROM codeadmins WHERE adminsCode = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../inscription.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $user_code);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}

function isAdminTaken($conn, $user_code)
{
    $sql = "SELECT * FROM users WHERE usersCode = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../inscription.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $user_code);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);

}







function createUser($conn, $user_prenom, $user_nom, $user_poids, $user_sexe, $user_naissance, $user_adresse, $user_ville, $user_postal, $user_entreprise, $user_mail, $user_pseudo, $user_pwd, $user_code, $isAdmin)
{
    $sql = "INSERT INTO users (usersPrenom, usersNom, usersPoids, usersSexe, usersNaissance, usersAdresse, usersVille, usersPostal, usersEntreprise, usersEmail, usersPseudo, usersPwd, usersCode, isAdmin) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) 
    {
        header("location: ../inscription.php?error=stmtfailed");
        exit();
    }
    $hashedPwd = password_hash($user_pwd, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssssssssssss", $user_prenom, $user_nom, $user_poids, $user_sexe, $user_naissance, $user_adresse, $user_ville, $user_postal, $user_entreprise, $user_mail, $user_pseudo, $hashedPwd, $user_code, $isAdmin);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../connexion_fr.php?error=none");
    exit();


}


function updateUser($conn, $user_prenom, $user_nom, $user_poids, $user_naissance, $user_adresse, $user_ville, $user_postal, $user_mail, $user_pseudo, $user_id)
{
    echo "2";
    $sql2 = "UPDATE users SET usersPrenom = '$user_prenom', usersNom = '$user_nom', usersPoids = '$user_poids', usersNaissance= '$user_naissance', usersAdresse = '$user_adresse', usersVille = '$user_ville', usersPostal = '$user_postal', usersEmail = '$user_mail', usersPseudo = '$user_pseudo' WHERE usersId ='$user_id';";
    //$sql = "UPDATE users SET usersPrenom = '$user_prenom' , usersNom = '$user_nom' WHERE usersId ='$user_id';";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql2)) 
    {
        header("location: modifProfil.inc.php?error=stmtfailed");
        exit();
    }
    echo "3";
    mysqli_stmt_bind_param($stmt, "sssssssss", $user_prenom, $user_nom, $user_poids, $user_naissance, $user_adresse, $user_ville, $user_postal, $user_mail, $user_pseudo);
    session_start();
    session_unset();
    session_destroy();
    header('location:index.php');
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    
    header("location: ../connexion_fr.php?error=none");
    exit();


}


function loginUser($conn, $user_mail, $user_pwd)
{

    $emailExists = emailExists($conn, $user_mail);
    if ($emailExists === false) {
        header("location: ../connexion_fr.php?error=wronglogin1");
        exit();
    }
    
    $pwdHashed = $emailExists["usersPwd"];
    $checkPwd = password_verify($user_pwd, $pwdHashed);
    
    if ($checkPwd==false) {
        header("location: ../connexion_fr.php?error=wronglogin2");
        exit();
    }
    if ($checkPwd==true)
    {
        session_start();
        $_SESSION['userid'] = $emailExists["usersId"];
        $_SESSION['userpseudo'] = $emailExists["usersPseudo"];
        $_SESSION['useremail'] = $emailExists["usersEmail"];
        $_SESSION['userprenom'] = $emailExists["usersPrenom"];
        $_SESSION['usernom'] = $emailExists["usersNom"];
        $_SESSION['usersexe'] = $emailExists["usersSexe"];
        $_SESSION['userpoids'] = $emailExists["usersPoids"];
        $_SESSION['usernaissance'] = $emailExists["usersNaissance"];
        $_SESSION['userpostal'] = $emailExists["usersPostal"];
        $_SESSION['userville'] = $emailExists["usersVille"];
        $_SESSION['useradresse'] = $emailExists["usersAdresse"];
        $_SESSION['userentreprise'] = $emailExists["usersEntreprise"];
        $_SESSION['usercode'] = $emailExists["usersCode"];
        $_SESSION['isadmin'] = $emailExists["isAdmin"];
        
        
        
        
        
        header("location: ../accueil.php");
        exit();
    }


}

/*
function searchUser($conn, $recherche)
{
    
    $sql = "SELECT usersPrenom FROM users WHERE usersPrenom LIKE '%$recherche%';";
    $result = mysqli_query($conn, $sql);
    $resultData = mysqli_num_rows($result);

    if($resultData > 0)
    {

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<div>
                ".$row['usersPrenom']."
            
            </div>";
        }


    }

    mysqli_stmt_close($stmt);
   


    header("location: ../social.php");
}*/
















function connStatus():string
{
    echo"tet1";
    if ($uidExists["usersId"]) {
        return <<<HTML
         <a href=''>Deconnexion</a>
HTML;
    }
    else {
        echo "test2";
        return <<<HTML
        echo <a href='Connexion_fr.php'>Connexion</a>
HTML;
    }

}


/*function recherche($user_research){
    $sql = "SELECT * FROM users WHERE userentreprise = $_SESSION['userentreprise'] AND LIKE '%$user_research%';";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../inscription.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

}*/