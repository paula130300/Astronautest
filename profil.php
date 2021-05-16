<!DOCTYPE html>

<head> 
	<title>Astronautest Accueil</title>
</head>
<?php require 'header_base.php';?>

<?php require 'navigation.php';?>

<div id="bandeau_profil"><h2>Profil</h2><br><p>Vos informations</p></div>

<!-- CONTENEUR CENTRAL  --> 
<div id="center"> 

    <div id="bloc_image">
        <div id="profil"><a href="../ressources/profil.png"><img src="../ressources/profil.png" height="175" width="175"/></a></div>
    </div>

    <div id="bloc_informations">
        <div id="profil_texte"><p>Prénom: <?php echo $_SESSION["userprenom"];?></p></div>
        <div id="profil_texte"><p>Nom: <?php echo $_SESSION["usernom"];?></p></div>
        <div id="profil_texte"><p>Email: <?php echo $_SESSION["useremail"];?></p></div>
        <div id="profil_texte"><p>Pseudo:  <?php echo $_SESSION["userpseudo"];?></p></div>
        <div id="profil_texte"><p>Sexe: <?php echo $_SESSION["usersexe"];?></p></div>
        <div id="profil_texte"><p>Date de naissance: <?php echo $_SESSION["usernaissance"];?></p></div>
        <div id="profil_texte"><p>Poids: <?php echo $_SESSION["userpoids"];?> kg</p></div>
        

        <button id="btnPopup" class="btnPopup"><p>Modifier le profil</p></button>
    <div id="overlay" class="overlay">
        <div id="popup" class="popup">
            <span id="btnClose" class="btnClose">&times;</span>
           
            <div id="container">
            <!-- zone de inscription -->

            <form action="../includes/modifProfil.inc.php" method="POST">
                <h1>Modifier le profil</h1>
                
                <div id= "Formulaire de modification du profil">
                <table>

                <div id= "tab1">
                    <label><b>Prenom </b></label><br>
                    <input type="text" placeholder="Entrer votre prenom" name="userPrenom" value="<?php echo $_SESSION["userprenom"] ?>" size="30" required>
                    <br>
                    <label><b>Nom </b></label><br>
                    <input type="text" placeholder="Entrer votre nom" name="userNom" value="<?php echo $_SESSION["usernom"] ?>" size="30" required>
                    <br>
                    <label><b>Poids </b></label><br>
                    <input type="number" placeholder="Entrer votre poids" name="userPoids" value="<?php echo $_SESSION["userpoids"] ?>" size="30" required>
                    <br>
                    <label><b>Date de naissance </b></label><br>
                    <input type="date" placeholder="Entrer votre date de naissance" name="userNaissance" value="<?php echo $_SESSION["usernaissance"] ?>" size="30" required>
                    <br>
                </div>

                <div id= "tab2">

                    <label><b>Adresse </b></label><br>
                    <input type="text" placeholder="Entrer votre de adresse" name="userAdresse" value="<?php echo $_SESSION["useradresse"] ?>" size="30" required>
                    <br>
                    <label><b>Ville </b></label><br>
                    <input type="text" placeholder="Entrer votre ville" name="userVille" size="30" value="<?php echo $_SESSION["userville"] ?>" required>
                    <br>
                    <label><b>Code postal </b></label><br>
                    <input type="codepostal" placeholder="Entrer votre code postal" name="userPostal" value="<?php echo $_SESSION["userpostal"] ?>" size="30" required>
                    <br>
                    <label><b>E-mail</b></label>
                    <input type="email" placeholder="Entrer votre email" name="userEmail" value="<?php echo $_SESSION["useremail"] ?>" required>
                    <br>
                    <label><b>Pseudo </b></label><br>
                    <input type="text" placeholder="Entrer votre pseudo" name="userPseudo" size="30" value="<?php echo $_SESSION["userpseudo"] ?>" required>
                    <br>
                    <label><b>Entrer une photo de profile (PNG,JPG): </b></label>
                    <input type="file" name="file">
                    <br>



                    <input id="button" type="submit" name="submit" value="Confirmer">
                </div>

                </table>
                </div>
        </div>
        
        </div>
    </div>
 


     
    </div>
        

    <div id="bloc_test">
        <div id="profil_texte"><p>Adresse: <?php echo $_SESSION["useradresse"];?></p></div>
        <div id="profil_texte"><p>Ville: <?php echo $_SESSION["userville"];?></p></div>
        <div id="profil_texte"><p>Code postal: <?php echo $_SESSION["userpostal"];?></p></div>
        <div id="profil_texte"><p>Entreprise: <?php echo $_SESSION["userentreprise"];?></p></div>
        <div id="profil_texte"><p>Code d'entreprise: <?php echo $_SESSION["usercode"];?></p></div>

        <div id="profil_texte"><p>Nombre de test effectués:</p></div>
        <div id="profil_texte"><p>Meilleur score:</p></div>
        <div id="profil_texte"><p>Score moyen:</p></div>
    </div> 


       
      

</div>




<style type='text/css'>

#bandeau_profil {
    text-align: center;
    border-bottom: 2px solid #000;
}

#bandeau_profil h2{
    margin: 0 0;
}
#bandeau_profil p {
    margin: 0 2;
}

#center { 
    margin-bottom: 200px;
} 
#bloc_image {
    margin-left:15%;
	width: 200px;
	float: left;
    height: 300px;
}
#bloc_informations {
	width: 200px;
	float: left;
    margin-left:10%;
    padding-bottom: 200px;
    height: 300px;

}
#bloc_test {
	width: 200px;
	float: left;
    margin-left:3%;
    height: 300px;
    padding-bottom: 200px;

}
#tab1 {
	width: 200px;
	float: left;
    margin-left:10%;
    padding-bottom: 200px;
    height: 300px;

}
#tab2 {
	width: 200px;
	float: left;
    margin-left:3%;
    height: 300px;
    padding-bottom: 200px;

}


#bandeau_test {
    text-align: center;
    border-bottom: 2px solid #000;
}

#bandeau_test h2{
    margin: 0 0;
}
#bandeau_test p {
    margin: 0 2;
}
#test_box{
    margin-left: 10%;
    margin-right: 10%;
    margin-top: 10%;
    margin-bottom: 10%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}
@media only screen and (max-width: 800px) {
    #test_box{
        margin-left: 5%;
        margin-right: 5%;
        margin-top: 5%;
        margin-bottom: 20%;
       
    }
    }
.btnPopup{
	width: 200px;
    display: flex;
    flex-direction: column;
	text-align: center;
	align-items:center  ;
    cursor: pointer;
}
.btnPopup:hover{
    background-color: rgb(204, 204, 204);
    cursor: pointer;
}

.overlay{
    position: fixed;
    z-index: 1000;
    left: 0px;
    top: 0px;
    background-color: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    display: none;
}
.popup{
    
    margin: auto;
    margin-top:5%;
    width: 88%;
    height:75%;
    background-color: rgba(228, 228, 228);
    border-radius: 5px;
    box-shadow: 15px 20px 0 rgba(0, 0, 0, 0.5);
    padding: 1em;
}
.btnClose{
    float: right;
    cursor: pointer;
}





#container{
    width: 35%;
    margin: 0 auto;
    height:100%;
    
}

/* Bordered form */
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
   
}
#container h1{
    width: 100;
    margin: 0 auto;
    padding-bottom: 10px;
    text-align: center;
}

/* Full-width inputs */
input[type=email], input[type=password], input[type=text], input[type=number], input[type=date], input[type=codepostal] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #046adf;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    border: 1px solid transparent;
}
input[type=submit]:hover {
    background-color: white;
    color:#046adf;
    border: 1px solid #046adf;
}

</style>


<script>

/*or recupere les id*/
var btnPopup = document.getElementById("btnPopup");
var overlay = document.getElementById("overlay");
var btnClose = document.getElementById("btnClose");

/*nous ajoutons le gestionaire de eventements*/
btnPopup.addEventListener("click",openModal);
btnClose.addEventListener("click",closePopup);


function openModal(){
    overlay.style.display = "block";
}

function closePopup(){
    overlay.style.display ="none";
}

</script>


<?php require 'footer.php'?>