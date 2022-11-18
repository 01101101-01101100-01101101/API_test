<?php 
include("./api/read.php");
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
    <div class="container text-center">
        <h1>Employés</h1>
        <a href="ajoutEmployes.php" class="btn btn-success btn-rounded" style="float: right;" role="button">Ajouter un employé</a>
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
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                    <?php 
                    foreach($employeeArr['body'] as $employe){
                        echo '<tr>';
                        echo '<td>'.$employe['id'].'</td>';
                        echo '<td>'.$employe['name'].'</td>';
                        echo '<td>'.$employe['email'].'</td>';
                        echo '<td>'.$employe['age'].'</td>';
                        echo '<td>'.$employe['designation'].'</td>';
                        echo '<td>'.$employe['created'].'</td>';
                        echo '<td><a href="modifierEmploye.php?id='.$employe['id'].'"><img src="img/update.png" style="width:20px;height:20px;"></a></td>';
                        echo '<td><a href="api/delete.php?id='.$employe['id'].'"><img src="img/delete.png" style="width:20px;height:20px;"></a></td>';
                        echo '</tr>';
                    }
                    ?>
            </table>
        </div>
    </div>
</body>

</html>