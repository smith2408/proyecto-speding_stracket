<?php 
require_once('../config/config.php');
$ID = $_GET['ID'];
$query = " SELECT * FROM gastos_categoria";
$result= $conexion->query($query);

$query2 = "SELECT * FROM gastos WHERE ID = $ID";
$result2= $conexion->query($query2);
$record = $result2->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="row mt-5">
            <div class="col">
                <h1>gastos <a href="index.php" class="btn btn-dark">regresar</a> </h1>
            </div>
        </div>
        <form action="config/update_spending.php" method="POST">
            <div class="row mt-5">
               <div class="col-6">
               <label for="CANTIDAD" class="form-label" >CANTIDAD</label>
               <input type="text" class="form-control" name="CANTIDAD" id="CANTIDAD"  value="<?php echo $record['CANTIDAD']; ?>"> 
               </div>
               <div class="col-6 mb-3">
                <label for="CATEGORIA" class="form-label" >CATEGORIA</label>
                <select name="CATEGORIA" id="" class="form-select">
                    <option value="0" selected>selecciona tu opcion</option>
                    <?php
                    while($row = $result-> fetch_assoc() ){
                    ?>
                    <option value=" <?php echo $row['ID']; ?> "> <?php echo $row['nombre']; ?> </option>
                    <?php  } ?>
                </select>
               </div>
               <div class="col-12 mb-3">
                <label for="DESCRIPCION" class="form-label">DESCRIPCION</label>
                <input type="text" class="form-control" name="DESCRIPCION" id="DESCRIPCION"value="<?php echo $record['DESCRIPCION']; ?>">
               </div>
               <div class="col-12">
                <input type="hidden"name="ID" value="<?php echo $ID ?>">
                <button type="submit" class="btn btn-success">guardar</button>
               </div>
            </div>
        </form>
    </div>



    
</body>
</html>