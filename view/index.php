
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagenes/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilyooo.css">
    <title>Inicio Sesion</title>
</head>
<body class="fondo-sesion">
    <header class="header-ini">
        <nav class="navbar">



                <a href="../view/inicio.php">Inicio</a>
                <a href="../view/productos.php">Productos</a>
                <a href="../view/sobrenosotros.php">Nosotros</a> 
             </nav>

      
      
    </header>
    
    <div class="background-inicio"></div>
    <div class="container-iniciosesion">
        <div class="content-ini">
            <h2 class="logo3">   <div id="position-logo2"> <img src="../imagenes/logo.jpeg" alt="" width="45" height="40">Floristeria Palacio</h2>

                <div class="texto-sci">
                    <h2>Bienvenido <br> <span>
                        A Nuestro Nuevo Sitio Web</span></h2>

               
                        <div class="iconos-redes">
                            <a href="https://instagram.com/carlossastoque_?igshid=MzMyNGUyNmU2YQ%3D%3D&utm_source=qr"><img src="../imagenes/insta.png" alt="Instagram"></a>
                            <a href="https://wa.link/vhezsk"><img src="../imagenes/whatsap.png" alt="whatsap"></a>
                        </div>
                </div>
        </div>
        <div class="logreg-box">
            <div class="form-box login">
                <form action="../validacion.php" method="POST">
                    <?php 
                        include('../validacion.php')
                    ?>
                    <h2>Iniciar Sesion</h2>

                    <div class="input-box">
                        <span class="icon"><img src="../imagenes/gmail.png" alt=""></span>
                        <input type="email"  name="email_usuario">
                        <label >Correo</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><img src="../imagenes/pasword.png" alt=""></span>
                        <input type="password" name="password_usuario">
                        <label >Contraseña</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Recuerdame</label>
                        <a href="#">
                            ¿Has olvidado tu contraseña?</a>
                    </div>

                    <a href="view/inicio.php">  <button type="submit" class="btn1" name="boton"value="Iniciar Sesion" name="boton">Iniciar Sesion</button></a> 

                    <div class="login-register">
                        <p>
                            ¿No tienes una cuenta? <a href="../view/register.php" class="register-link">Registrase</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>