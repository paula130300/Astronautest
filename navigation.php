<nav>
		<ul>
			<li class="nav_deroulant"><a href="menu_test.php">Se Tester &ensp; </a>
				<ul class="nav_sous">
					<li><a href="#">Tonalité</a></li>
					<li><a href="#">Temps de Réaction</a></li>
					<li><a href="#">Reproduction d'un ryhtme</a></li>
					<li><a href="#">Mémoire auditive</a></li>
					
				</ul>
			</li>
			<li class="nav_deroulant"> <a href="statistique.php">Statistiques &ensp;</a>
			<ul class="nav_sous">
			<li><a href="#">Tonalité</a></li>
					<li><a href="#">Temps de Réaction</a></li>
					<li><a href="#">Reproduction d'un ryhtme</a></li>
					<li><a href="#">Mémoire auditive</a></li>
				
					
			</ul>
			</li>
			<li class="nav_deroulant"> <a href="profil.php">Mon Profil &ensp;</a>
				<ul class="nav_sous">
					<li><a href="#">Mes Informations</a></li>
						<li><a href="#">Mes Résulats</a></li>
						
						
				</ul>
				</li>
				<li class="nav_deroulant"> <a href="social.php">Social &ensp;</a>
					<ul class="nav_sous">
						<li><a href="#">Mon Réseau</a></li>
							
					</ul>
					</li>
					<li class="nav_deroulant"> <a href="FAQ.php">FAQ &ensp;</a>
						<ul class="nav_sous">
							<li><a href="FAQ.php">Qui Sommes-nous</a></li>
								<li><a href="FAQ.php">Notre Projet </a></li>
								<li><a href="FAQ.php">Questions Fréquentes</a></li>
							
								
						</ul>
						</li>
						<li class="nav_deroulant"> <a href="contact.php">Nous Contacter&ensp;</a>
	
	</nav>

<style type='text/css'>
/* menu déroulant */
nav ul::after{
	content: "";
	display: table;
	clear: both;
}
.nav_sous{
	display: none;
	box-shadow: 0px 1px 2px #CCC;
	background-color: white;
	position: absolute;
	width: 100%;
	z-index: 1000;
}
nav > ul li:hover .nav_sous{
	display: block;
}
.nav_sous li{
	float: none;
	width: 100%;
	text-align: left;
}

.nav_sous a{
	
	padding: 10px;
	border-bottom: none;
}

.nav_sous a:hover{
	border-bottom: none;
	background-color: rgba(200,200,200,0.1);
}

.nav_deroulant >a{
	font-size: 14pt;

}

.nav_deroulant >a::after{
	content: "▼";
	font-size: 12px;

}

nav {
	width: 100%;
	margin: 0 auto;
	background-color: grey;
	position: sticky;
	top:0px;
}

nav a{
	display: block;
	text-decoration: none;
	color: black;
	border-bottom: 2px solid transparent;
	padding: 10px 0px;
}

nav a:hover{
	color: blue;
	border-bottom: 2px solid gold;
}
nav ul {
	list-style-type: none;
}

nav ul li {
	float:left;
	width: 16%;
	text-align: center;
	position: relative;
}

nav ul::after{
	content: "";
	display: table;
	clear: both;
}



@media only screen and (max-width: 800px) {
	.nav_deroulant >a{
	font-size: 10pt;

}
}
</style>