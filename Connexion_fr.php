<!DOCTYPE html>
<?php
$fromage = "fromage";
?>


<html>
    <head>
        <title>Astronautest Connexion</title>
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
        <div id="carre"></div>

            <!-- zone de connexion -->
            <form action= "../includes/connexion_fr.inc.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>E-mail</b></label>
                <input type="email" placeholder="Entrer votre email" name="userEmail" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="userPwd" required>

                <input type="submit" id='submit' name='submit' value='LOGIN' >
                
                <div id="inscription"><a href="inscription.php">sign up</a></div>
                    
               
            </form>
           
        </div>
</body>
<?php require 'footer.php';?>
<style type='text/css'>
