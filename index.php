<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <title>My Church Library</title>
    </head>
    <body>
        

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My Church Library</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Accueil
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Livres</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Echanges</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="groupes.php">Groupes</a>
        </li>

      </ul>
        <form class="d-flex"action="<?php $_SERVER["PHP_SELF"];?>">
                        <input class="form-control me-sm-2" type="text" name="recherche" placeholder="Rechercher">
                         <input type="submit" class="btn btn-secondary my-2 my-sm-0" name="rechercher" value="Rechercher">
                    </form>
                </div>
            </div>
            <?php if(isset($_POST["rechercher"])) { 
                if(isset($_POST["recherche"])) {
                    echo "Bonjour ". $_POST["recherche"];
                }
            };?>
    </div>
  </div>
</nav>


        <h1>My Church Library</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Se connecter
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <input class="form-control" 
                                   type="email" 
                                   name="email"
                                   value="" 
                                   placeholder="Votre adresse e-mail">
                            <br>
                            <input 
                                class="form-control" 
                                type="password" 
                                name="password" 
                                placeholder="Votre mot de passe">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                <a href="groupes.php" <button type="button" class="btn btn-primary">Se connecter</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
            </script>

    </body>
</html>
