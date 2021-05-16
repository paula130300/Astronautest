<!DOCTYPE html>
<html> 
<head> 
	<title>Astronautest Statistiques</title>
	<meta charset="utf-8">
</head>
<?php require 'header_base.php';?>
<?php require 'navigation.php';?>

<div id="bandeau_test"><h2>Statistiques</h2><br><p>Moyenne des utilisateurs</p></div>

<div id='container'>
<div id="test_box"><div id="test_bloc"><img src="../ressources/Mémoire_auditive.png" height="100" width="100"/><p>Mémoire Auditive</p></div>
                        <div id="test_bloc"><img src="../ressources/Temps_de_réaction.png" height="100" width="100"/><p>Temps de Réaction</p></div>
                        <div id="test_bloc"><img src="../ressources/Reproduction_de_rythme.png" height="100" width="100"/><p>Reproduction de ryhtme</p></div>
                        <div id="test_bloc"><img src="../ressources/Reconnaissance_de_tonnalité.png" height="100" width="100"/><p>Reconnaissance de tonnalité</p></div>
</div>
    <div id="stats">
        <p>container à modif</p>
</div>
</div>
<?php require 'footer.php';?>

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
    float:left;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
#test_bloc {
	width: 200px;
    display: flex;
    flex-direction: column;
	text-align: center;
	align-items:center  ;
}

#test_bloc:hover{
    background-color: rgb(204, 204, 204);
    cursor: pointer;
}


#container {
    display: flex;
    flex-direction: row;
    justify-content:space-between;

}
#stats {
    width:80%;
    background-color: grey;
    margin-right: 30px;
}
</style>