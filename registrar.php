<html lang="es">
    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="js/jQuery1.9.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style/estilo_login.css">
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
                    <form action="codigo.registrar.php" method="post">
                    <img src="img/vitafit_logo.png" alt="vitafit_logo" width="300">
                      <br><br>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Ingrese correo*</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" id="exampleFormControlInput1" placeholder="name@example.com" name="correo">
                            <small id="emailHelp" class="form-text text-muted">No compartas tu correo con nadie.</small>
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">Ingrese nombres</label>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Primer nombre*" name="name1">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Segundo nombre" name="name2">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">Ingrese apellidos</label>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Primer apellido*" name="ape1">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Segundo apellido" name="ape2">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese su celular*</label>
                          <input type="doc" class="form-control" id="exampleInputEmail1" placeholder="celular" name="tel">
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Tipo de documento*</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="t_doc">
                            <option>Seleccione</option>
                            <option value="TI">Tarjeta de identidad</option>
                            <option value="CC">Cédula cuidadana</option>
                            <option value="RC">Registro civil</option>
                            <option value="CE">Cédula de extranjería</option>
                          </select>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese número de documento*</label>
                          <input type="doc" class="form-control" id="exampleInputEml1" placeholder="Documento" name="doc">
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">Datos personales*</label>
                            <div class="col">
                            <select class="form-control" id="exampleFormControlSelect1" name="sexo">
                            <option>Sexo*</option>
                            <option value="F">Femenino</option>
                            <option value="M">Masculino</option>
                            </select>
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Edad*" name="edad">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Peso en kg*" name="peso">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Altura en cm*" name="altura">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese la contraseña*</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="contra">
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Tipo de rol*</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="t_rol">
                            <option>Seleccione</option>
                            <option value="1">Usuario</option>
                            <option value="2">Administrador</option>
                          </select>
                        </div>
                        <div class="form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Al enviar este formulario aceptas términos y condiciones.</label>
                        </div>
                        <br>
                        <button type="submit" class="btn_registrar" name="btn_registrar">Registrar</button>
                        <br><br>
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