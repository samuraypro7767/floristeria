<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud2.css">

   
    <title>Editar</title>
</head>
<body id="conatiner-nosotros">
        <!--Consultar la base de datos-->

        <?php 
           include("../crud-proveedor/conexion.php");
            $connect=conexion();

        $id=$_GET['id_prov'];
        $sql="SELECT * FROM proveedor WHERE id_prov='$id'";
        $query=mysqli_query($connect,$sql);

        $filas=mysqli_fetch_array($query);
        ?>    

       

        <form action="../crud-proveedor/update-contacto.php" method="POST" class="registration-form">


 <h1>Editar Informacion Cliente</h1>

<div class="registration-container">
    <div class="registration-container">

    <input type="number" name="id_prov" value="<?php echo $filas['id_prov']  ?>" placeholder=" Id" >
    </div>

    <div class="container">
        <input type="text" name="nom_prov" value="<?php echo $filas['nom_prov']  ?>" placeholder="Nombre" >
    </div>

    <div class="container">
        <input type="text" name="dir_prov" value="<?php echo $filas['dir_prov']  ?>" placeholder="Direccion" >
    </div>


    <div class="container">
        <input type="number" name="tel_prov" value="<?php echo $filas['tel_prov']  ?>" placeholder="Numero telefonico"  >
    </div>

    <div class="container">
        <input type="number" name="sumi_prov" value="<?php echo $filas['sumi_prov']  ?>" placeholder="cantidad de suministros"  >
    </div>


    <button type="submit" value="Actualizar" class="button0">Actualizar</button>
  


</div>
</form>
    
</body>
</html>