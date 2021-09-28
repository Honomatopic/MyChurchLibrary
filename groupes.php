<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
<meta charset="UTF-8">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
	crossorigin="anonymous">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<title>My Church Library</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">My Church Library</a>
			<button class="navbar-toggler" type="button"
				data-bs-toggle="collapse" data-bs-target="#navbarColor01"
				aria-controls="navbarColor01" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarColor01">
				<ul class="navbar-nav me-auto">
					<li class="nav-item"><a class="nav-link active" href="#">Accueil <span
							class="visually-hidden">(current)</span>
					</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Livres</a></li>
					<li class="nav-item"><a class="nav-link" href="#">Echanges</a></li>
					<li class="nav-item"><a class="nav-link" href="groupes.php">Groupes</a>
					</li>

				</ul>
				<form class="d-flex" action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
					<input class="form-control me-sm-2" type="text" name="recherche"
						placeholder="Rechercher"> <input type="submit"
						class="btn btn-secondary my-2 my-sm-0" name="rechercher"
						value="Rechercher">
				</form>
			</div>
		</div>
		</div>
		</div>
	</nav>
	<div class="container">
		<h1>My Church Library</h1>
                <?php
				// Algorithme pour effectuer la recherche : Si le champ "recherche" est renseigné, alors tu m'affiches le message "Bonjour + le contenu du champ recherche"
				if (isset($_POST["rechercher"])) {
    				if (isset($_POST["recherche"])) {
        				echo "Bonjour " . $_POST["recherche"];
						// var_dump est la fonction php permettant de visualiser le contenu d'une variable, d'un objet sous la forme d'un tableau associatif
        				var_dump($_POST);
    					}
					}
                ;
               ?>
		<!-- Le groupe Christian qui ds'affiche sous forme de carte !-->
    <a href="livres.php" div class="card mb-3" style="max-width: 540px;">
			<div class="row g-0">
				<div class="col-md-4">
					<img src="img/chretien.jpg" class="img-fluid rounded-start" alt="Christian">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title">Christian group</h5>
						<p class="card-text">Ceci est un groupe chrétien.</p>
						<p class="card-text">
							<small class="text-muted">Veuillez patientez...</small>
						</p>
					</div>
				</div>
			</div>
	
	</div>
	</a>
	</div>
</body>
</html>
