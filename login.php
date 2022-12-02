<?php
include("./api/read.php");

session_start();

?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Login form Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-12 col-md-8 col-lg-6">
            <div class="card bg-white">
              <div class="card-body p-5">
                <form class="mb-3 mt-md-4" method="POST" action="./controlleurs/connexion.php">
                  <h2 class="fw-bold mb-2 text-uppercase ">Notre premier API</h2>
                  <p class=" mb-5">Entrez vos informations!</p>
                  <div class="mb-3">
                    <label for="emailName" class="form-label ">Email ou nom d'utilisateur</label>
                    <input type="text" class="form-control" id="emailName" placeholder="ex: nom@example.com ou Example">
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label ">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="*******">
                  </div>
                  <div class="d-grid">
                    <button class="btn btn-outline-dark" type="submit">Connexion</button>
                  </div>
                </form>
                <div>
                  <p class="mb-0  text-center">Pas de compte? <a href="register.php" class="text-primary fw-bold">Cliquez ici</a></p>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>

</html>