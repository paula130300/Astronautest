<?php
	session_start();
	/*if ($isAdmin=="non"){
		echo "yolo";
		header("location: ../accueil.php");
        exit();
    }*/
	//session_start();
	//require "functions.php";
	/*<div id="user"><p><a href='Connexion_fr.php'>Connexion</a></p><img src="ressources/profil.png" height="50" width="50"/></div>*/
	/*<div id="user"><p><?=connStatus();?></p><img src="ressources/profil.png" height="50" width="50"/></div>*/

?>



<html>
<div id="header"> 
	<div id="logo"><a href="../accueil.php"><img src="../ressources/logo.png" height="175" width="175"/></a></div>

	<div id='middle_things'>
	<h1>Astronautest</h1>

	<img src="../ressources/logo_np2_2.png" height="100"/>

	</div>
	<div id="right_things"> 
	<?php
	


	
	if (isset($_SESSION["userid"])) {
		
		
		echo "<div id='user1'><a href='logout.php'>Logout</a>
		<select name='Langues' id='selection_langues'>	
				<option value='Français'>Français</option>
				<option value='English'>English</option>
				<option value='Español'>Español</option>

		</select></div>
		<div id='user2'>
		<img src='../ressources/profil.png' height='50' width='50'/><psd>".$_SESSION["userpseudo"]."</psd></div>";

		/*echo "<div id='user'><p><?php echo $user;?></a></p><img src='ressources/profil.png' height='50' width='50'/></div>";*/
		/*echo "<div id='user'><p><a href='logout.php'>Logout</a></p></div>";*/
	

	}
	
	else
	{
		echo "<div id='user1'><a href='../Connexion_fr.php'>Connexion</a>
		<select name='Langues' id='selection_langues'>	
				<option value='Français'>Français</option>
				<option value='English'>English</option>
				<option value='Español'>Español</option>

		</select></div>
		<div id='user2'>
		<img src='../ressources/profil.png' height='50' width='50'/></div>";
	}

	

	?>
	
		
</div>
</div>


	</html>
<style type='text/css'>

html,body {margin:0;padding:0} 




#header { /* header de base*/
    
	height: 20%;
    /*Reset CSS*/

	margin: 0px;
	padding: 0px;
	font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif,;
	display: flex;
	justify-content: space-between;
	flex-direction: row;
	

	background-color: red;
	}
	
#header > h1 {  /*syle du titre du site*/
    
	height: 20%;
	text-align: center;



}



#right_things{
	float: right;
	margin-right: 30px;
	display: flex;
	
	flex-direction: row;


}


#user1{
	
	display: flex;

	flex-direction: column;
    width:75px
}

#user2 > img {

	text-align:center;
    margin-left: 12px;
    margin-top: 5px;
    border-radius: 50%;
	
}

#user1 > a {
    margin-top: 20px;
	
}

#user1>select { margin-top: 20px;}

#user2{

	display: flex;
	text-align:center;
	flex-direction: column;
    width:75px
	
}

#user>psd {
	text-align:center;
	
}


#header  p{
    
	float: right;
	height: 20%;
	width: auto;
	position: relative;
	
}

#header p a{
	color: black;
	font-size: 12pt;
}
#logo >img {
	background-color: transparent;
	size: 175px;
}
#logo :hover{
   background-color: #df043b;
    box-shadow: #5c84b1;
	cursor: pointer;}

@media only screen and (max-width: 800px) {
* {
    font-size: 10px;
        
}
	
 h1{
font-size: 30px;   
    }
   
#user a{
	font-size:10px;
}

}	
	</style>