

<?php
//include("connexion_fr.php");
//include("includes/database_connexion.inc.php");
//include("functions.php");
//$user_data = check_login($con); //check if already connected

?>



<!DOCTYPE html>

<head> 
	<title>Astronautest Accueil</title>
</head>
<?php require 'header_base.php';?>

<?php require 'navigation.php';?>

<!-- CONTENEUR CENTRAL  --> 
<div id="center"> 


	<!-- CONTENU  --> 
	<div id="contenu_float"> 
		<div id="bouton_centre"> 
			<button>Démarer un test</button>
			<button>Mes objectifs</button>
			<button>Dernier score</button>
			
		</div>

	</div>
</div>
	<div id="contenu_2">
	<div id="Classements">
		<h2>Classements</h2>
		<ul> 
			<li><a href="#">Exemple 1</a></li>
			<li><a href="#">Exemple 2</a></li>
			<li><a href="#">Exemple 3</a></li>
			<li><a href="#">Exemple 4</a></li>
			<li><a href="#">Exemple 5</a></li>
			<li><a href="#">Exemple 6</a></li>
			<li><a href="#">Exemple 7</a></li>
			<li><a href="#">Exemple 8</a></li>

		</ul>
	</div>
	<div class="verticalLine"></div>

	<div id="actus">
		<h2>Actualités</h2>
		<ul> 
			<li><a href="#"></a></li>
		</ul>
	</div>
</div>

<?php require "footer.php";?>

<style type='text/css'>
#center { 
	display: flex;
	flex-direction: column;
} 

#contenu_float { 
	
	float:left; 
	width:100%; 
	height: 100%;
	

} 

.verticalLine { 
	border-left: thick solid #0e71e2;
	}


#bouton_centre{ 

	background-image:url(../ressources/espacejpg.jpg);
	background-size: cover;
	padding: 200px 0px;
	text-align:center;
	
	
}
#bouton_centre button{
	width: 200px;
	height: 100px;
	background-color: #0e71e2;
    background-image: linear-gradient(to top left,
                                      rgba(0, 0, 0, .2),
                                      rgba(0, 0, 0, .2) 30%,
                                      rgba(0, 0, 0, 0));
	border: transparent;
	padding: 10px 0px;
	color:white;
	outline: 0;
	font-size: 14pt;
	border-radius: 10px;
}


#bouton_centre button:hover{
	 background-color: rgb(0, 162, 255);
	 border: transparent;
	 cursor: pointer;


}

#bouton_centre button:active{
	background-color: rgb(255, 0, 0);
	


}
#contenu_2 {
	display: flex;
	flex-direction: row;
	justify-content: space-between;

}

#Classements {
	float: left;
	margin-left:0px;
	
	width: 50%;
	height: 400px;
	background-color: #6B6B6B;
	
	
}

#Classements h2{
	
	text-align: center;
	color: black;
	
}
#Classements ul {
	list-style:  none;
	color: black;
}

#Classements ul li {
	margin-right: 20%;
	margin-left: 20%;
	border-top: 2px solid black;

	padding: 10px;
}

#Classements ul li a{
	text-decoration: none;
	color: black;

}

#actus {
	float: right;
	margin-right:0px;
	width: 50%;
	height: 400px;
	background-color: #6B6B6B;
	
}
#actus h2 {
	text-align: center;
	color: black;
}

#actus ul {
	list-style:  none;
	color: black;
	margin-right: 10%;
	margin-left: 10%;
}

#actus ul li a{
	text-decoration: none;
	color: black;
	
	
}

#footer { 
	float: left;
	margin-top: 0px;
	width:100%;
	height: 150px;
	background-color:#0e71e2;
	
} 
@media only screen and (max-width: 800px) {
#Classements{
	margin-left:20px
}

#actus {
	margin-right:20px;}
	
#bouton_centre{ 
margin: 0px 20px;
}
}
</style>