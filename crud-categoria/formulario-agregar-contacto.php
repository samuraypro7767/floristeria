<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud2.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <title>Agregar</title>
</head>
<body id="fondoprodu">
 

    <form action="agregar-contacto.php" method="POST" class="registration-form">


    <h1 class="h1">Agregar</h1>

   <div class="registration-container">
    

     
      <div class="input-contenedor">
         <input type="number" name="cantidad_categoria" id="cantidad_categoria" " placeholder="Cantidad" >
      </div>

      <div class="input-contenedor">
         <input type="number" name="precio_categoria"  id="precio_categoria"  placeholder="Precio" >
      </div>


      <div class="input-contenedor">
         <input type="text" name="nom_categoria" id="nom_categoria"  placeholder="Nombre De La Categoria"  >
      </div>

      <div class="input-contenedor">
         <input type="date" name="año_categoria" id="año_categoria" placeholder="Año categoria"  >
      </div>


      <button type="submit" value="Actualizar" " name="submit" value="Registrarme" class="button0">Agregar</button>
   


      </div>
    </form>
   </body>
</html>