<html lang="es">
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jQuery1.9.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style/estilos_login.css">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="container-fluid main">
            <div class="form-content">
            <center>
            <div class="row">
                <div class="col-md-12">
                        <br>
                        <h1> Vitafit </H1>
                        <h2>Ingresa a Vitafit</h2>
                </div>
            </div>
            <div class="row login">
            <div class="cuerpo">
            </div>
                <div class="col-md-12">
                    <div class="form">
                    <form action="index.php" method="post">
                        <?php
                            // Inicio de sesión
                            session_start();
                            // Llamado de la conexión
                            include "conexion.php";
                            // Verificar acción sobre el botón
                            if(isset($_POST['btn_ingresar'])){
                                // Recuperamos datos del inicio
                                $identificacion = $_POST['doc'];
                                $contra = $_POST['contra'];
                                // Encriptamos la contraseña
                                $encrip = md5($contra);
                                // Realizamos consulta en la base de datos
                                $consulta = mysqli_query($conexion, "SELECT * FROM usuario WHERE numero_identificacion = '$identificacion' AND contraseña = '$encrip'"); 
                                // Verificar resultado
                                $Resultado = mysqli_num_rows($consulta);
                                // Verifica que sea 1
                                if ($Resultado == 1) {
                                    // Guardamos todos los datos en la variable fila
                                    while ($fila = mysqli_fetch_array($consulta)) {
                                        // Iniciamos sesiones
                                        $_SESSION['primer_nombre'] = $fila['primer_nombre'];
                                        $_SESSION['segundo_nombre'] = $fila['segundo_nombre'];
                                        $_SESSION['primer_apellido'] = $fila['primer_apellido'];
                                        $_SESSION['segundo_apellido'] = $fila['segundo_apellido'];
                                        $_SESSION['celular'] = $fila['celular'];
                                        $_SESSION['primer_apellido'] = $fila['primer_apellido'];
                                        $_SESSION['documento'] = $fila['numero_identificacion'];
                                        $_SESSION['sexo'] = $fila['sexo'];
                                        $_SESSION['estatura'] = $fila['estatura'];
                                        $_SESSION['peso'] = $fila['peso'];
                                        $_SESSION['edad'] = $fila['edad'];
                                        $_SESSION['correo'] = $fila['correo'];
                                        $_SESSION['rol'] = $fila['id_rol'];
                                        // Redirigiremos al dashboard o parte interna del software
                                        echo "<script>window.location='dashboard.php';</script>";
                                        exit(); // Terminamos la ejecución del script después de la redirección
                                    }
                                } else {
                                    // Si el resultado no es uno porque no encontró coincidencias
                                    echo "Usuario y/o Contraseña no existen";
                                    exit(); // Terminamos la ejecución del script después de la redirección
                                }
                                
                            }
                        ?>
                        <img src="img/vitafit_logo.png" alt="vitafit_logo" width="300">
                        <br><br>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Ingrese su número de indentificacion.</label>
                          <input class="form-control" id="exampleInputEmail1" placeholder="Numero de identificacion" name="doc">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese la contraseña.</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="contra">
                        </div>
                        <br>
                        <button type="submit" class="btn_ingresar" name="btn_ingresar">Ingresar</button>
                        <br><br>
                        <a href="recuperar.php">¿Has olvidado tu contraseña?</a> | <a href="registrar.php"> ¿No tienes cuenta?<br>Registrate </a>
                    </form>
                        </div>
                </div>
            </center>
            </div>
            </div>
        </div>
    </body>
</html>