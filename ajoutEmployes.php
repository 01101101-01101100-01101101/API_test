<?php 
session_start();

if(!isset($_SESSION["rôle"]) || $_SESSION["rôle"] == 0){
  header("location: index.php");
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

  <nav class="navbar bg-light">
    <form class="container-fluid justify-content-start">
      <a href="listeEmployes.php"><button class="btn btn-outline-success me-2" type="button">Home</button></a>
      <button class="btn btn-sm btn-outline-secondary" type="button">Employé</button>
    </form>
  </nav> <br><br>
  <main class="form-signin">

    <div class="container w-50 text-center">
      <h1>Ajouter Employés</h1>
      <br><br>
      <form method="POST" action="api/create.php">
        <div class="form-floating">
          <input type="text" class="form-control" name="nom">
          <label for="floatingInput">Nom de l'employé</label>
        </div>
        <br>
        <div class="form-floating">
          <input type="email" class="form-control" name="email">
          <label for="floatingInput">Email</label>
        </div>
        <br>
        <div class="form-floating">
          <input type="number" class="form-control" min="0" max="3000" name="age">
          <label for="floatingInput">Age</label>
        </div>
        <br>
        <div class="form-floating">
          <input type="text" class="form-control" name="designation">
          <label for="floatingInput">Designation</label>
        </div>
        <br>

        <button class="w-100 btn btn-lg btn-primary" type="submit" style="background-color: green ; border: 1px solid #a5d696; ">Enregistrer</button>
      </form>
      <br>
    </div>
  </main>
</body>

</html>