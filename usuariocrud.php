<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/estilyooo.css">
    <link rel="stylesheet" href="./css/estilocrud2.css">
    <title>cliente</title>

</head>
<body id="conatiner-nosotros">
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
                <div id="position-logo"> <img src="imagenes/logo.jpeg" alt=""><h2> Cliente</div>
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
         <!--Botón de Enlace al Formulario para agregar un Contacto -->
         <div id="buscardor">
         
                
                <a href="crud-cliente/formulario-agregar-contacto.php" class="dir-a">Agregar Contacto</a>
                <div class="salida">
     <a href="./cerrarsesion.php"><img src="./imagenes/salida.png" alt="" height="75" width="80"></a>
    </div>
                
                
                <div id="buscador">
                        <form action="crud-cliente/consultar-contacto.php" method="POST" class="search-container">
                        <input type="text" class="search-input"  name="id_cliente" placeholder="Digite  id">
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
                              <th>contraseñas</th>
                             <th>Telefono</th>
                             <th>Direccion</th>
                             
                              

                             
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
    include("crud-cliente/conexion.php");
    $connect=conexion();
    $sql= "SELECT* FROM cliente";
    $resultado=mysqli_query($connect,$sql);
?>
<tbody>
    <?php
    $filas=mysqli_fetch_assoc($resultado);
    ?>
    <tr>
        <td><?php echo $filas ['id_cliente'] ?> </td>
        <td><?php echo $filas ['nom_cliente'] ?> </td>
        <td><?php echo $filas ['contra_cliente'] ?> </td>
        <td><?php echo $filas ['tel_cliente'] ?> </td>
        <td><?php echo $filas ['dir_cliente'] ?> </td>
    
     
  
        <td> <a href="crud-cliente/actualizar-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="dir-a">Editar</a></td>
        <td> <a href="crud-cliente/delete-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="dir-a"> Eliminar</a></td>
    </tr>

</tbody>

<tbody>
    <?php
    while($filas=mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td><?php echo $filas ['id_cliente'] ?> </td>
        <td><?php echo $filas ['nom_cliente'] ?> </td>
        <td><?php echo $filas ['contra_cliente'] ?> </td>
        <td><?php echo $filas ['tel_cliente'] ?> </td>
        <td><?php echo $filas ['dir_cliente'] ?> </td>
      
     
  
        <td> <a href="crud-cliente/actualizar-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="dir-a">Editar</a></td>
        <td> <a href="crud-cliente/delete-contacto.php?id_cliente=<?php echo $filas['id_cliente']?>"class="dir-a"> Eliminar</a></td>
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
    <title>CRUD-cliente REGISTRO</title>
    <link rel="stylesheet" href="css/estilo-crud2.css">
   
    
    
</head>
<body>


    
</body>
</html>


    



