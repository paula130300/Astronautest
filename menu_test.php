
<!DOCTYPE html>
<html> 
<head> 
	<title>Astronautest Menu des Tests</title>
	<meta charset="utf-8">
</head>

<?php require 'header_base.php';?>

<?php require 'navigation.php';?>
<body>
<div id="bandeau_test"><h2>Se Tester</h2><br><p>Mesurez vos aptitudes psychotechniques avec nos tests</p></div>
    <div id="test_box">
    <button id="btnPopupMemoire" class="btnPopup"><img src="../ressources/Mémoire_auditive.png" height="100" width="100"/><p>Mémoire Auditive</p></button>
    <div id="overlayMemoire" class="overlay">
        <div id="popup" class="popup">
            <h2>Mémoire Auditive
                <span id="btnCloseMemoire" class="btnClose">&times;</span>
            </h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos totam recusandae eligendi laboriosam rerum id eaque fugiat, molestiae quam? Animi unde ab sint accusamus atque veniam tempora impedit eum voluptates exercitationem, iusto sapiente culpa fuga blanditiis dolorem veritatis tenetur et doloremque totam delectus laudantium est quas. Inventore rerum commodi nulla.</p>
        </div>
    </div>
    <button id="btnPopupReaction" class="btnPopup"><img src="../ressources/Temps_de_réaction.png" height="100" width="100"/><p>Temps de réaction</p></button>
    <div id="overlayReaction" class="overlay">
        <div id="popup" class="popup">
            <h2>Temps de réaction
                <span id="btnCloseReaction" class="btnClose">&times;</span>
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias beatae provident officia odio suscipit molestiae omnis, autem animi illum, veniam repellat nihil, eum impedit unde quos. Vitae ipsam sunt saepe!</p>
        </div>
    </div>
    <button id="btnPopupReproduction" class="btnPopup"><img src="../ressources/Reproduction_de_rythme.png" height="100" width="100"/><p>Réproduction d'un rythme</p></button>
    <div id="overlayReproduction" class="overlay">
        <div id="popup" class="popup">
            <h2>Réproduction d'un rythme
                <span id="btnCloseReproduction" class="btnClose">&times;</span>
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, laboriosam.</p>
        </div>
    </div>
    <button id="btnPopupTonalite" class="btnPopup"><img src="../ressources/Reconnaissance_de_tonnalité.png" height="100" width="100"/><p>Réconnaissance de tonnalité</p></button>
    <div id="overlayTonalite" class="overlay">
        <div id="popup" class="popup">
            <h2>Réconnaissance de tonnalité
                <span id="btnCloseTonalite" class="btnClose">&times;</span>
            </h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab qui deleniti maiores a, atque cum eos consequuntur quaerat rem, neque natus ut? Eaque possimus cupiditate laboriosam sit error non fugit repellendus autem rem praesentium, assumenda dolore magnam reprehenderit vitae nemo explicabo, deserunt reiciendis voluptate. Adipisci, animi fugit. Animi distinctio, eveniet eligendi aspernatur adipisci magnam sunt reiciendis praesentium fuga, beatae nisi sint assumenda delectus quis dolorum ipsum iusto voluptatem repellendus officiis.</p>

        </div>
    </div>

</div>
<script src="function.js"></script>
</body>
<?php require 'footer.php'?>

<style type='text/css'>

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
    background-color: rgba(0, 0, 0, 0);
    border: #FFFF;
	width: 200px;
    display: flex;
    flex-direction: column;
	text-align: center;
	align-items:center  ;
    cursor: pointer;
}
.btnPopup:hover{
    background-color: rgb(204, 204, 204);
    border: #FFFFFF;
    cursor: pointer;
}

.overlay{
    position: fixed;
    left: 0px;
    top: 0px;
    background-color: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    display: none;
}
.popup{
    margin: 20% auto;
    width: 70%;
    background-color: rgba(228, 228, 228);
    border-radius: 5px;
    /*box-shadow: 15px 20px 0 rgba(0, 0, 0, 0.5);*/
    padding: 1em;
}
.btnClose{
    float: right;
    cursor: pointer;
}
</style>