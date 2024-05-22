<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http= "X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/estilo-crud2.css">
    <title>Producto</title>

</head>
<body id="fondo1">
<header>
        <nav class="menuprincipal">
            <ul class="menu">
                <div id="position-logo"> <img src="imagenes/logo.jpeg" alt=""><h2>Productos</div>
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
                
               <a href="crud-producto/formulario-agregar-contacto.php" class="dir-a">Agregar Contacto</a>
                
                
                <div id="buscador">
                        <form action="crud-producto/consultar-contacto.php" method="POST" class="search-container">
                        <input type="text" class="search-input"   name="cod_prod" placeholder="Digite cod producto">
                        <button type="submit" class="button0" value="Consultar">Consultar </button>
                        <button type="reset" class="button0" value="Limpiar">Limpiar    </button>                  
                        </form>
                                        
                                        
                </div>
        </div>

     
    <table>
             <thead>
                      <tr>
                             <th>Codigo</th>
                             <th>Nombre Producto</th>
                              <th>Precio</th>
                             <th>Descripcion</th>
                             <th>Descuento en %</th>
                             
                              

                             
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
    include("crud-producto/conexion.php");
    $connect=conexion();
    $sql= "SELECT* FROM producto";
    $resultado=mysqli_query($connect,$sql);
?>
<tbody>
    <?php
    $filas=mysqli_fetch_assoc($resultado);
    ?>
    <tr>
        <td><?php echo $filas ['cod_prod'] ?> </td>
        <td><?php echo $filas ['nom_prod'] ?> </td>
        <td><?php echo $filas ['prec_prod'] ?> </td>
        <td><?php echo $filas ['desc_prod'] ?> </td>
        <td><?php echo $filas ['descuento_prod'] ?> </td>
    
     
  
        <td> <a href="crud-producto/actualizar-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="dir-a">Editar</a></td>
        <td> <a href="crud-producto/delete-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="dir-a"> Eliminar</a></td>
    </tr>

</tbody>

<tbody>
    <?php
    while($filas=mysqli_fetch_assoc($resultado)){
    ?>
    <tr>
    <td><?php echo $filas ['cod_prod'] ?> </td>
        <td><?php echo $filas ['nom_prod'] ?> </td>
        <td><?php echo $filas ['prec_prod'] ?> </td>
        <td><?php echo $filas ['desc_prod'] ?> </td>
        <td><?php echo $filas ['descuento_prod'] ?> </td>
    
     
  
        <td> <a href="crud-producto/actualizar-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="dir-a">Editar</a></td>
        <td> <a href="crud-producto/delete-contacto.php?cod_prod=<?php echo $filas['cod_prod']?>"class="dir-a"> Eliminar</a></td>
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
    <title> Crud Producto</title>
    <link rel="stylesheet" href="css/estilo-crud2.css">
   
    
    
</head>
<body>


    
</body>
</html>


    



