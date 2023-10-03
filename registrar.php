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
        <div class="container-fluid">
        <div class="form-content">
            <center>
            <div class="row">
                <div class="col-md-12">
                  <br>
                        <h1>Vitafit</H1>
                        <h2>Registrate en Vitafit</h2>
                </div>
            </div>
            <div class="row login">
            <div class="cuerpo">
            </div>
            <div class="col-md-12">
                <div class="form">
                    <form action="codigo_agregar.php" method="post">
                    <img src="img/vitafit_logo.png" alt="vitafit_logo" width="300">
                      <br><br>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Ingrese correo</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" id="exampleFormControlInput1" placeholder="name@example.com" name="correo" required>
                            <small id="emailHelp" class="form-text text-muted">No compartas tu correo con nadie</small>
                        </div>
                        <div class="row">
                            <label for="exampleInputEmail1">Ingrese nombres</label>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="primer nombre" name="name1" required>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="segundo nombre" name="name2">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">ingrese apellidos</label>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="primer apellido" name="ape1" required>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="segundo apellido" name="ape2">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese su celular</label>
                          <input type="doc" class="form-control" id="exampleInputEmail1" placeholder="celular" name="tel">
                        </div>
                        <br>
                        <div class="row">
                          <label for="exampleFormControlSelect1">Tipo y numero de documento</label>
                          <div class="col-4">
                          <select class="form-control" id="exampleFormControlSelect1" name="t_doc" required>
                            <option>Seleccione</option>
                            <option value="TI">Tarjeta de identidad</option>
                            <option value="CC">Cedula cuidadana</option>
                            <option value="RC">Registro civil</option>
                            <option value="CE">cedula de estranjeria</option>
                          </select>
                          </div>
                          <div class="col-8">
                          <input type="doc" class="form-control" id="exampleInputEmail1" placeholder="Documento" name="doc" required>
                          </div>  
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">Datos personales</label>
                            <div class="col">
                            <select class="form-control" id="exampleFormControlSelect1" name="sexo">
                            <option>Sexo</option>
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                            </select>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Edad" name="edad" required>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Peso en kg" name="peso">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Altura en cm" name="altura">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">Ingresar contraseña</label>
                            <div class="col">
                            <input type="password" class="form-control" placeholder="Contraseña" name="contra" required>
                            </div>
                            <div class="col">
                            <input type="password" class="form-control" placeholder="Confirmar contraseña" name="contra_confirm" required>
                            </div>
                        </div>
                        <br>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                          <label class="form-check-label" for="exampleCheck1">Al enviar este formulario aceptas términos y condiciones.</label>
                        </div>
                        <br>
                        <button type="submit" class="btn_registrar" name="btn_registrar">Registrar</button>
                        <br><br>
                        <div class="form-group">
                          <input type="text" name="t_rol" value="1"hidden>
                        </div>
                        <a href="recuperar.php">Recuperar cuenta. </a> | <a href="index.php"> ¿Ya tienes cuenta? </a>
                    </form>
                   </div>
                </div>
            </div>
            </center>
           </div>
        </div>
    </body>
</html>