<?php 
require_once('config/config.php');
$query = "SELECT * FROM gastos_categoria";
$result = $conexion->query($query);

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
        <form action="config/insert_spending.php" method="POST">
            <div class="row mt-5">
               <div class="col-6">
               <label for="CANTIDAD" class="form-label" >CANTIDAD</label>
               <input type="text" class="form-control" name="CANTIDAD" id="CANTIDAD" > 
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
                <input type="text" class="form-control" name="DESCRIPCION" id="DESCRIPCION">
               </div>
               <div class="col-12">
                <button type="submit" class="btn btn-success">guardar</button>
               </div>
            </div>
        </form>
    </div>



    
</body>
</html>