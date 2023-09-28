<?php
//Inicio de session iniciada
session_start();
//Session eliminada
session_destroy();
//Redirigimos afuera 
header("location: index.php");
?>
<form action="index.php" method="post">
                        <?php
                            // Inicio de sesión
                            session_start();
                            // Llamado de la conexión
                            include "conexion.php";
                            // Verificar acción sobre el botón
                            if(isset($_POST['btn_ingresar'])){
                                // Recuperamos datos del inicio
                                $correo = $_POST['correo'];
                                $contra = $_POST['contra'];
                                // Encriptamos la contraseña
                                $encrip = md5($contra);
                                // Realizamos consulta en la base de datos
                                $consulta = mysqli_query($conexion, "SELECT * FROM user WHERE correo = '$correo' AND contraseña = '$encrip'"); 
                                // Verificar resultado
                                $Resultado = mysqli_num_rows($consulta);
                                // Verifica que sea 1
                                if ($Resultado == 1) {
                                    // Guardamos todos los datos en la variable fila
                                    while ($fila = mysqli_fetch_array($consulta)) {
                                        // Iniciamos sesiones
                                        $_SESSION['nombre'] = $fila['primer_nombre'];
                                        $_SESSION['apellido'] = $fila['segundo_nombre'];
                                        $_SESSION['correo'] = $fila['correo'];
                                        $_SESSION['rol'] = $fila['id_rol'];
                                        // Redirigiremos al dashboard o parte interna del software
                                        echo "<script>window.location='./dashboard.php';</script>";
                                        exit(); // Terminamos la ejecución del script después de la redirección
                                    }
                                } else {
                                    // Si el resultado no es uno porque no encontró coincidencias
                                    echo "Usuario y/o Contraseña no existen";
                                    exit(); // Terminamos la ejecución del script después de la redirección
                                }
                                
                            }
                        ?>
                        <div class="form-group">
                          <label for="exampleInputEmail1">ingrese su correo</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo" name="correo">
                          <small id="emailHelp" class="form-text text-muted">No compartas tu correo con nadie :v</small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese la contraseña</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contra" name="contra">
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn_ingresar">Ingresar</button>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Acepto terminos y condiciones jijijijiji</label>
                        </div>
                        <br><br>
                        <a href="recuperar.php">Has olvidado tu contraseña </a> | <a href="registrar.php"> No tienes cuenta?<br>Registrate </a>
                    </form>