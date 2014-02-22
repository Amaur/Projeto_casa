<?php
    // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
    session_start ();

    // On récupère nos variables de session
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

    // On teste pour voir si nos variables ont bien été enregistrées
    
    
    
    }else{
		
		
    // puis on le redirige vers la page d'accueil
    echo '<meta http-equiv="refresh" content="0;URL=../login/login.html">';
		
		}
		
    ?>




<!DOCTYPE html>

<html lang="pt-br" ng-app="CEUACA || Casa do Estudante Universitário Aparício Cora de Almeida">
	<head>
		<title>CEUACA || ..:: Casa do Estudante Universitário Aparício Cora de Almeida ::..</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta charset="UTF-8">
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link href="css/bootstrap.responsive.css"/>
		<link href="css/style.css" rel="stylesheet"/>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	</head>
	<body>
		
	
        
		
		<div id="menu" class="navbar navbar-static-top navbar-inverse">
			
			<div class="container">
				<a class="navbar-brand" href="../membro.php">..:: CEUACA</a>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbarHeaderCollapse">
				
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				
				</button>
				
				<div class="collapse navbar-collapse navbarHeaderCollapse">
					
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="./ceuaca.html" class="dropdown-toogle" data-toggle="dropdown"><?php  echo  $_SESSION['login'] ;?> <b class="caret"> </b></a>
						
								<ul class="dropdown-menu dropdown-menu-left">
								<li><a href="logout.php">Deconnexion</a></li>
								</ul>
						
						</li>
						
						<li ><a href="">Administrador</a></li>
					
					
					</ul>
					
				</div>
				
			</div>
				
			</div>
		</div>
		
	
	
	
	<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
			<center>	<p class="navbar-text pull-center">
				End.: <strong>Rua Riachuelo 1355</strong> - Centro Histórico Porto Alegre - Rio Grande do
					Sul - Brasil <strong> CEP: 90.010-271</strong> <br>  Telefone: (51) 3224.7215
					<small>Esquina com a Borges de Medeiros</small> 
				</p>
				
				
				</center>
			</div>
		
	</div>
	
	
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	
	</body>
</html>
