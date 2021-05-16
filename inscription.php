<!DOCTYPE html>
<html>
    <head>
        <title>Astronautest Inscription</title>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="../fichiers_css/css_connexion_fr.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="header"> 
            <div id="logo"><a href="accueil.php"><img src="../ressources/logo.png" height="175" width="175"/></a></div>
            <h1>Astronautest</h1>
            
            
            <div id="user"><img src="../ressources/logo_np.png" height="150" width="150"/></div>
            
        </div>

        <div id="container">
            <!-- zone de inscription -->

            <form action="../includes/inscription.inc.php" method="POST">
                <h1>Inscription</h1>
                
                <div id= "Formulaire d'inscription">
                <table>
        
                    <label><b>Prenom </b></label><br>
                    <input type="text" placeholder="Entrer votre prenom" name="userPrenom" size="30">
                    <br>
                    <label><b>Nom </b></label><br>
                    <input type="text" placeholder="Entrer votre nom" name="userNom" size="30">
                    <br>
                    <label><b>Poids </b></label><br>
                    <input type="number" placeholder="Entrer votre poids" name="userPoids" size="30">
                    <br>
                    <label><b>Sexe </b></label><br>
                    <input type="radio" name="userSexe" value="H" checked> Homme 
                    <input type="radio" name="userSexe" value="F"> Femme
                    <input type="radio" name="userSexe" value="X"> Non renseigné
                    <br>
                    <label><b>Date de naissance </b></label><br>
                    <input type="date" placeholder="Entrer votre date de naissance" name="userNaissance" size="30">
                    <br>
                    <label><b>Adresse </b></label><br>
                    <input type="text" placeholder="Entrer votre de adresse" name="userAdresse" size="30">
                    <br>
                    <label><b>Ville </b></label><br>
                    <input type="text" placeholder="Entrer votre ville" name="userVille" size="30">
                    <br>
                    <label><b>Code postal </b></label><br>
                    <input type="codepostal" placeholder="Entrer votre code postal" name="userPostal" size="30" >
                    <br>
                    <label><b>Entreprise </b></label><br>
                    <input type="text" placeholder="Entrer votre entreprise d'appartenance" name="userEntreprise" size="30">
                    <br>
                    <label><b>E-mail</b></label>
                <input type="email" placeholder="Entrer votre email" name="userEmail" required>
                    <br>
                    <label><b>Pseudo </b></label><br>
                    <input type="text" placeholder="Entrer votre pseudo" name="userPseudo" size="30">
                    <br>
                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="userPwd" required>
                    <br>

                    <label><b>Code d'entreprise</b></label>
                    <input type="text" placeholder="Entrer le code d'entreprise" name="userCode" required>
                    <br>

                    <label><b>Entrer une photo de profile (PNG,JPG): </b></label>
                    <input type="file" name="file">
                    <br>



                    <input id="button" type="submit" name="submit" value="LOGIN">
                
                    <div id="connexion"><a href="connexion_fr.php">sign in</a></div>
                </table>
                </div>
        </div>
    </body>

    <?php 

if (isset($_GET["error"])) {
    if ($_GET["error"] == "emailExists") {
        echo "<p>email already exists</p>;";

    }
    
}

?>


<?php require 'footer.php';?>
<style type='text/css'>
