<?php

if (isset($_POST["submit"])) {
    $recherche = $_POST["recherche_result"];


    
    require_once 'database_connexion.inc.php';
    //require_once 'functions.inc.php';

    

   
    searchUser($conn, $recherche);
    
}
else
{
    header("location: ../barre.php");
    exit();
}


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
   


 
}