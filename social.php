<!DOCTYPE html>

<head> 
	<title>Astronautest Social</title>
</head>

<?php require 'header_base.php';?>
<?php require 'navigation.php';?>
<?require_once 'includes/database_connexion.inc.php';?>

<div id="bandeau_social"><h2>Profil</h2><br><p>Votre Entreprise</p></div>













<div id="barre">

	<form action="social.php" method="POST">
        <input type="text" placeholder="rechercher un utilisateur" name="recherche_result" size="70"/>
		<input type="submit" id='submit' name='submit' value='Rechercher' >
	</form>	


</div>

<style type="text/css">
#barre {
	margin-top: 5px;
	text-align: center;
	width: 100;
	margin-bottom: 50px;
	
	
}
#barre input {
	outline: none;
	}

#barre > button {
	border: none;
	outline: none;
}
#barre > button:hover{

 	background-color: gray;
 	
 	border: none;
  	color: transparent;
	outline: 0;
  
}
</style>















<div id=searchResult>
<?php

if (isset($_POST["submit"])) {
    $recherche = $_POST["recherche_result"];


    
    
  

    $sql = "SELECT * FROM users WHERE usersPrenom LIKE '%$recherche%' OR usersNom LIKE '%$recherche%' OR usersPseudo LIKE '%$recherche%';";
    $result = mysqli_query($conn, $sql);
    $resultData = mysqli_num_rows($result);

    if($resultData > 0)
    {

        while($row = mysqli_fetch_assoc($result))
        {
            echo "<div id='test'>
               <p>".$row['usersPrenom']."
               ".$row['usersNom']."
               ".$row['usersPseudo']."
               ".$row['usersVille']."
               ".$row['usersEntreprise']."
               ".$row['usersAdresse']."
               ".$row['usersEmail']."
               
               </p>
            
            </div>";
        }


    }
    else {
        echo "Aucun résultat";
    }
}
?>


</div>


<?php require 'footer.php'?>


<style type='text/css'>

#bandeau_social {
    text-align: center;
    border-bottom: 2px solid #000;
}

#bandeau_social h2{
    margin: 0 0;
}
#bandeau_social p {
    margin: 0 2;
}

</style>

