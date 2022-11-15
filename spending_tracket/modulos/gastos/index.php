<?php 
require_once('../../config/config.php');
$query = "SELECT g.ID, g.DESCRIPCION, g.CANTIDAD, c.nombre as CATEGORIA, g.FECHA FROM gastos g LEFT JOIN gastos_categoria c ON g.CATEGORIA = c.ID";
$result = $conexion->query($query);
$row = $result->fetch_assoc();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
                <h1>gastos <a href="form-insert.php" class="btn btn-primary">añadir</a> </h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>DESCRIPCION</th>
                            <th>CANTIDAD</th>
                            <th>CATEGORIA</th>
                            <th>FECHA DE REGISTRO</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while($row = $result->fetch_assoc()){
                        ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['DESCRIPCION']; ?></td>
                            <td><?php echo $row['CANTIDAD']; ?></td>
                            <td><?php echo $row['CATEGORIA']; ?></td>
                            <td><?php echo $row['FECHA']; ?></td>
                            <td>
                                <a href="form-update.php? ID= <?php echo $row['ID']; ?>" class=" btn btn-warning">editar</a>
                                <a href="../../config/delete_spending.php?ID=<?php echo $row['ID']; ?>" class=" btn btn-danger">eliminar</a>
                            </td>
                        </tr>
                        <?php } ?>
                        
                        
                    </tbody>
                </table>

            </div>

        </div>
    </div>
    
</body>
</html>