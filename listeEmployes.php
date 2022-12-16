<?php
include("./api/read.php");

session_start();

if (!isset($_SESSION["rôle"])) {
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="listeEmployes.php">Liste</a>
          <?php
          if ($_SESSION["rôle"] == 1) { // Si l'user est administrateur
          ?>
            <a class="nav-link" href="ajoutEmployes.php">Ajout employé</a>
          <?php
          }
          ?>
        </div>
      </div>
    </div>
  </nav>

  <div class="container text-center">
    <h1>Employés</h1>

    <br>
    <br>
    <div class="row">
      <table class="table table-success table-striped">
        <tr>
          <th>Id</th>
          <th>Nom</th>
          <th>E-mail</th>
          <th>Age</th>
          <th>Designation</th>
          <th>Created</th>
          <?php
          if ($_SESSION["rôle"] == 1) { // Si l'user est administrateur
            echo '<th>Modifier</th>';
            echo '<th>Supprimer</th>';
            echo '</tr>';
            foreach ($employeeArr['body'] as $employe) {
              echo '<tr>';
              echo '<td>' . $employe['id'] . '</td>';
              echo '<td>' . $employe['name'] . '</td>';
              echo '<td>' . $employe['email'] . '</td>';
              echo '<td>' . $employe['age'] . '</td>';
              echo '<td>' . $employe['designation'] . '</td>';
              echo '<td>' . $employe['created'] . '</td>';
              echo '<td><a href="modifierEmploye.php?id=' . $employe['id'] . '"><img src="img/update.png" style="width:20px;height:20px;"></a></td>';
              echo '<td><a href="api/delete.php?id=' . $employe['id'] . '"><img src="img/delete.png" style="width:20px;height:20px;"></a></td>';
              echo '</tr>';
            }
          } else { // Sinon
            echo '</tr>';
            foreach ($employeeArr['body'] as $employe) {
              echo '<tr>';
              echo '<td>' . $employe['id'] . '</td>';
              echo '<td>' . $employe['name'] . '</td>';
              echo '<td>' . $employe['email'] . '</td>';
              echo '<td>' . $employe['age'] . '</td>';
              echo '<td>' . $employe['designation'] . '</td>';
              echo '<td>' . $employe['created'] . '</td>';
              echo '</tr>';
            }
          }

          ?>
      </table>
    </div>
  </div>
</body>

</html>