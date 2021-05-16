<nav>
		<ul>
			<li class="nav_deroulant"><a href="messagerie.php">Messagerie &ensp;</a>
			</li>
			<li class="nav_deroulant"> <a href="utilisateurs.php">Utilisateurs &ensp;</a>
			
			</li>

						
						
						
				</ul>
	
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
   
    width:50%;
	text-align: center;
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