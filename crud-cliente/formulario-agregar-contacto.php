<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud2.css">
    <link rel="shortcut icon" href="../img/logo.png" type="image/x-icon">

    <title>Agregar</title>
</head>
<body idate="background-register">
 

    <form action="agregar-contacto.php" method="POST" class="registration-form">


    <h1>Agregar</h1>

   <div class="registration-container">
    

     
      <div class="input-contenedor">
         <input type="text" name="nom_cliente" id="nom_cliente" " placeholder="Nombre" >
      </div>

      <div class="input-contenedor">
         <input type="password" name="contra_cliente"  id="contra_cliente"  placeholder="Contraseña" >
      </div>


      <div class="input-contenedor">
         <input type="number" name="tel_cliente" id="tel_cliente"  placeholder="Numero telefonico"  >
      </div>

      <div class="input-contenedor">
         <input type="text" name="dir_cliente" id="dir_cliente" placeholder="Direccion"  >
      </div>


      <button type="submit" value="Actualizar" " name="submit" value="Registrarme" class="button0">Agregar</button>
   


      </div>
    </form>
   </body>
</html>