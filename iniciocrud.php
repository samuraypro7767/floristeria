<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilyooo.css">
    <link rel="stylesheet" href="./css/estilocrud2.css">
    <title>Registro</title>

</head>
<body id="background-inicio">
<?php
 //Iniciamos Sesión en el Servidor
 session_start();
 //Se valida si el usuario inicia sesión para permitir el ingreso al CRUD

 if(empty($_SESSION["email_usuario"])){
        header("location: ./view/index.php");
 } 
 ?> 
<header>
        <nav class="menuprincipal">
            <ul class="menu">
                <div id="position-logo"> <img src="imagenes/logo.jpeg" alt=""><h2> Registros</div>
                <li><a href="view/inicio.php"><img src="imagenes/house.png" alt=""></a></li>
                <li><a href="iniciocrud.php">Registros</a></li>
                <li><a href="usuariocrud.php">Cliente</a></li>
                <li><a href="proveedor.php">Proveedor</a></li>
                <li><a href="categoria.php">Categoria</a></li>
                <li><a href="producto.php">Producto</a></li>
               
                </li>
            </ul>
        </nav>
    </header>
    <?php
//Se emplea variable de sesión para darle la bienvenida al usuario que inicia sesión p
         echo "<h1>Bienvenido ".$_SESSION["email_usuario"]."</h1>";
        ?>
       
         <!--Botón de Enlace al Formulario para agregar un Contacto -->
         <div id="buscardor">
                
               <a href="view/register.php" class="dir-a">Agregar Contacto</a>
               <div class="salida">
     <a href="./cerrarsesion.php"><img src="./imagenes/salida.png" alt="" height="75" width="80"></a>
    </div>
                <div id="buscador">
                        <form action="crud-registro/consultar-contacto.php" method="POST" class="search-container">
                        <input type="email" class="search-input"  name="email_usuario" placeholder="Digite su correo">
                        <button type="submit" class="button0" value="Consultar">Consultar </button>
                        <button type="reset" class="button0" value="Limpiar">Limpiar    </button>                  
                        </form>
                                        
                                        
                </div>
        </div>

     
    <table>
             <thead>
                      <tr>
                             <th>id</th>
                             <th>Nombre</th>
                             <th>Email</th>
                             <th>contraseñas</th>
                             
                             
                             <th colspan="2">Acciones BD</th>
                             
                      </tr>
             </thead> 
             <Tbody>
                      </tr>

                      </tr>        
            </tbody>
      
      
     



 </body>
</html>
<?php
    include("crud-registro/conexion.php");
    $connect=conexion();
    $sql= "SELECT* FROM registro";
    $resultado=mysqli_query($connect,$sql);
?>
<tbody>
    <?php
    $filas=mysqli_fetch_assoc($resultado);
    ?>
    <tr>
        <td><?php echo $filas ['id_usuario'] ?> </td>
        <td><?php echo $filas ['name_usuario'] ?> </td>
        <td><?php echo $filas ['email_usuario'] ?> </td>
        <td><?php echo $filas ['password_usuario'] ?> </td>
       
  
        <td> <a href="crud-registro/actualizar-contacto.php?id_usuario=<?php echo $filas['id_usuario']?>"class="dir-a">Editar</a></td>
        <td> <a href="crud-registro/delete-contacto.php?id_usuario=<?php echo $filas['id_usuario']?>"class="dir-a"> Eliminar</a></td>
    </tr>

</tbody>

<tbody>
    <?php
    while($filas=mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td><?php echo $filas ['id_usuario'] ?> </td>
        <td><?php echo $filas ['name_usuario'] ?> </td>
        <td><?php echo $filas ['email_usuario'] ?> </td>
        <td><?php echo $filas ['password_usuario'] ?> </td>
        
        <td> <a href="crud-registro/actualizar-contacto.php?id_usuario=<?php echo $filas['id_usuario']?>"class="dir-a">Editar</a></td>
        <td> <a href="crud-registro/delete-contacto.php?id_usuario=<?php echo $filas['id_usuario']?>"class="dir-a">Eliminar</a></td>
    </tr>
        <?php
    }
        ?>
</tbody>
</table>
<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD-registro REGISTRO</title>
    <link rel="stylesheet" href="css/estilo-crud2.css">
   
    
    
</head>
<body>


    
</body>
</html>


    



