<?php
include "../crud-registro/conexion.php";
$connect = conexion();

if (isset($_SESSION['name_usuario'])) {
    header("Location: ../view/index.php");
}

if (isset($_POST["submit"])) {
    $name = $_POST["name_usuario"];
    $email = $_POST["email_usuario"];
    $password = $_POST["password_usuario"];
    $cpassword = $_POST["cpassword_usuario"];

    if ($password == $cpassword) {
        $sql = "SELECT * FROM registro WHERE email_usuario='$email'";
        $result = mysqli_query($connect, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO registro (name_usuario,email_usuario, password_usuario) VALUES ('$name','$email', '$password')";
            $result = mysqli_query($connect, $sql);

            if ($result) {
                echo "<script>alert('registro exitoso,debes iniciar sesion.')</script>";
                header("Location: ../view/index.php");
                $name = "";
                $email = "";
                $_POST['password_usuario'] = "";
                $_POST['cpassword_usuario'] = "";
            } else {
                echo "<script>alert('Algo salió mal. Inténtalo de nuevo.')</script>";
            }
        } else {
            echo "<script>alert('El correo ya existe.')</script>";
        }
    } else {
        echo "<script>alert('Las contraseñas no coinciden.')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagenes/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="../css/estilyooo.css">
    <title>Registrase</title>
</head>
<body class="fondo-sesion">
    <header class="header-ini">
        <nav class="navbar">



                <a href="../view/inicio.php">Inicio</a>
                <a href="../view/productos.php">Productos</a>
                <a href="../view/sobrenosotros.php">Nosotros</a> 
             </nav>

      
      
    </header>
    
    <div class="background-register"></div>
    <div class="container-regi">
        <div class="content-ini">
            <h2 class="logo3">   <div id="position-logo2"> <img src="../imagenes/logo.jpeg" alt="" width="45" height="40">Floristeria Palacio</h2>

                <div class="texto-sci">
                    <h2>Bienvenido <br> <span>
                        A Nuestro Nuevo Sitio Web</span></h2>

                        <p>
                            ¡Te doy la bienvenida a mi página web! Este espacio está lleno de información valiosa y entretenimiento. Explora, aprende y disfruta de tu visita. ¡Gracias por estar aquí!</p>
                        <div class="iconos-redes">
                            <a href="https://instagram.com/carlossastoque_?igshid=MzMyNGUyNmU2YQ%3D%3D&utm_source=qr"><img src="../imagenes/insta.png" alt="Instagram"></a>
                            <a href="https://wa.link/vhezsk"><img src="../imagenes/whatsap.png" alt="whatsap"></a>
                        </div>
                </div>
        </div>
        <div class="logreg-box">
            <div class="form-box Registrase">
                <form action="" method="POST">
                    <h2>Registrarse</h2>

                    <div class="input-box">
                        <span class="icon"><img src="../imagenes/user 2.png" alt=""></span>
                        <input type="text" name="name_usuario"required>
                        <label >Nombre </label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><img src="../imagenes/gmail.png" alt=""></span>
                        <input type="email" name="email_usuario"required>
                        <label >Correo</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><img src="../imagenes/pasword.png" alt=""></span>
                        <input type="password" name="password_usuario"required>
                        <label >Contraseña</label>
                    </div>
                    <div class="input-box">
                        <input type="password" name="cpassword_usuario" required>
                        <label >Confirmar Contraseña</label>
                    </div>

                    
                      

                    

                    <button type="submit"name="submit" class="btn1">Registrarme</button>

                    <div class="login-register">
                        <p>
                            ¿Ya tienes cuenta? <a href="../view/index.php" class="login-link"  >Iniciar Sesion</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>