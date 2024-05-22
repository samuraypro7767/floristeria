<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilocrud2.css">
   
    
    <title >Consulta</title>

</head>
<body id="background-register">
    <h1 class="h1">Busqueda</h1>
       
        <div id="buscardor"> 
                <a href="../iniciocrud.php"class="dir-a">Ver Base De Datos</a>
         
        </div>
        

        <?php
include("../crud-registro/conexion.php");
$connect=conexion();

$email_usuario=$_POST['email_usuario'];

if (mysqli_connect_errno())
{
echo "<br>";
echo "No pudo conectarse con la Base de Datos";
exit();
}

$consulta="SELECT  id_usuario,name_usuario,email_usuario,password_usuario,tel_usuario FROM registro where email_usuario='$email_usuario'";
$resultados=mysqli_query($connect, $consulta);
mysqli_set_charset($connect, "utf8");
?>
<table class="tabla-buscar">
        <thead>
        <tr>
                                <th>Código</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Contraseña</th>
                                <th>Teléfono</th>
                                <th colspan="2">Acciones BD</th>
        </tr>        
        </thead>
        <tbody>
        <?php
                        //estructura de repetición para almacenar en el arreglo la información proporcionada por cada registro de la base de datos
                        while($filas=mysqli_fetch_assoc($resultados)){
                        ?>
                        <tr>
                                <!--Despliegue de la Información de cada registro de la BD en la Tabla HTML -->
                                <td><?php echo $filas['id_usuario'] ?></td>
                                <td><?php echo $filas['name_usuario'] ?></td>
                                <td><?php echo $filas['email_usuario'] ?></td>
                                <td><?php echo $filas['password_usuario'] ?></td>
                                <td><?php echo $filas['tel_usuario'] ?></td>
                                <td><a href="actualizar-contacto.php?id_usuario=<?php echo $filas['id_usuario'] ?>"class="dir-a">Editar</a></td>
                                <td><a href="delete-contacto.php?id_usuario=<?php echo $filas['id_usuario'] ?>"class="dir-a">Eliminar</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
        </table>

</body>
</html>


    



