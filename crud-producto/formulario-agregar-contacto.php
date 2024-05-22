<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud2.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <title>Agregar</title>
</head>
<body id="fondo1">
 

    <form action="agregar-contacto.php" method="POST" class="registration-form">


    <h1>Agregar</h1>

   <div class="registration-container">
    

     
      <div class="input-contenedor">
         <input type="text" name="nom_prod" id="nom_prod" " placeholder="Nombre Producto" >
      </div>

      <div class="input-contenedor">
         <input type="number" name="prec_prod"  id="prec_prod"  placeholder="Precio Producto" >
      </div>

      <div class="input-contenedor">
    <label for="desc_prod">Descripción:</label>
        <textarea id="desc_prod" name="desc_prod" rows="4" cols="40" ></textarea><br>
    </div>

      <div class="input-contenedor">
         <input type="number" name="descuento_prod" id="descuento_prod" placeholder="Descuento Producto"  >
      </div>


      <button type="submit" value="Actualizar" " name="submit" value="Registrarme" class="button0">Agregar</button>
   


      </div>
    </form>
   </body>
</html>