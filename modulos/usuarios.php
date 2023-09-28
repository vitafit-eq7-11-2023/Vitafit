
<style>
:root{
    --fondo: #BFEBC5;
    --text: black;
    --borde: white;
}
.login{
    width: 50%;
    left: 26%;
}
.form-content .cuerpo{
    background-color: #C2E9D4;
    padding: 35px 45px;
    border-bottom: none;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}
.form-content .form{
    background-color: white;
    padding: 40px 50px;
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
}
.form-content .btn_ingresar{
  padding: 10px 20px;
  background-color: var(--fondo);
  color: #000000;
  border: none;
  border-radius: 5px;
  font-size: 16px;
  cursor: pointer;
  transition: transform 0.3s ease;
}
.form-content .btn_ingresar:hover{
    transform: scale(1.1);
}
.form-content .btn_registrar{
    padding: 10px 20px;
    background-color: var(--fondo);
    color: black;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: transform 0.3s ease;
}
.form-content .btn_registrar:hover{
    transform: scale(1.1);
}
</style>
      <div class="container">
        <div class="form-content">
            <center>
            <div class="row login">
            <div class="cuerpo">
              <div class="row">
                <div class="col-md-6">
                  <a href="dashboard.php?mod=usuarios"><h5>Agregar</h5></a>
                </div>
                <div class="col-md-6">
                  <a href="dashboard.php?mod=gestionar"><h5>Gestionar</h5></a>
                </div>
              </div>
            </div>
                <div class="col-md-12">
                <div class="form">
                    <form action="codigo_agregar.php" method="post">
                    <img src="img/vitafit_logo.png" alt="vitafit_logo" width="300">
                      <br><br>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Ingrese correo</label>
                            <input type="email" class="form-control" aria-describedby="emailHelp" id="exampleFormControlInput1" placeholder="name@example.com" name="correo">
                            <small id="emailHelp" class="form-text text-muted">No compartas tu correo con nadie</small>
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">Ingrese nombres</label>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="primer nombre" name="name1">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="segundo nombre" name="name2">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label for="exampleInputEmail1">ingrese apellidos</label>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="primer apellido" name="ape1">
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
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Tipo de documento</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="t_doc">
                            <option>Seleccione</option>
                            <option value="TI">Tarjeta de identidad</option>
                            <option value="CC">Cedula cuidadana</option>
                            <option value="RC">Registro civil</option>
                            <option value="CE">cedula de estranjeria</option>
                          </select>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese numero de documento</label>
                          <input type="doc" class="form-control" id="exampleInputEmail1" placeholder="Documento" name="doc">
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
                            <input type="text" class="form-control" placeholder="Edad" name="edad">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Peso en kg" name="peso">
                            </div>
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Altura en cm" name="altura">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Ingrese la contraseña</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="contraseña" name="contra">
                        </div>
                        <br>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Tipo de rol</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="t_rol">
                            <option>Seleccione</option>
                            <option value="1">Usuario</option>
                            <option value="2">Administrador</option>
                          </select>
                        </div>
                        <br>
                        <button type="submit" class="btn_registrar" name="btn_registrar">Registrar</button>
                        <br><br>
                    </form>
                   </div>
                </div>
            </div>
            </center>
           </div>
        </div>