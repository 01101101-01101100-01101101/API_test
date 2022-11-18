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
  
<main class="form-signin">
  <div class="container w-50 text-center">
    <form method="POST" action="../TEST_API_2/api/create.php">
      <div class="form-floating">
        <input type="text" class="form-control" name="nom">
        <label for="floatingInput">Nom de l'employé</label>
      </div>
      <div class="form-floating">
        <input type="email" class="form-control" name="email">
        <label for="floatingInput">Email</label>
      </div>
      <div class="form-floating">
        <input type="number" class="form-control" name="age">
        <label for="floatingInput">Age</label>
      </div>
      <div class="form-floating">
        <input type="text" class="form-control" name="designation">
        <label for="floatingInput">Designation</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Ajouter un employé</button>
    </form>
    <br>
  </div>
</main>
</body>
</html>