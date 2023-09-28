<style>
    .contenedor1 {
    background-color:white ;
    border-radius: 3%;
    width: 85%;
    height: 100% ;
    font-family: 'Comfortaa';
    font-size: 16px;
 }
.boton1 {
     padding: 10px 20px;
     background-color: #BFEBC5;
     color: black;
     border: none;
     border-radius: 5px;
     font-size: 16px;
     cursor: pointer;
     transition: transform 0.3s ease;
 }
.boton1:hover{
    transform: scale(1.1);
}
.container_img{
    height: 350px;
}
</style>
<div class="row">
               <center> <div class="contenedor1">
                    <center><h1>usuario</h1>
                        <center><div class="d-flex flex-column align-items-center text-center p-3 py-5 container_img"><img class="rounded-circle mt-5 img_perfil" width="200px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold"></span></center>
                        <div class="col-md-8 border-right">
                            <div class="py-3">
                                <div class="mb-3">
                                <h2>Informacion de usuario</h2>
                                </div>
                               <h4><?php echo $_SESSION['primer_nombre']," ",$_SESSION['segundo_nombre']," ",$_SESSION['primer_apellido']," ",$_SESSION['segundo_apellido']; ?></h4>
                               <h4>Celular: <?php echo " ",$_SESSION['celular'];?></h4>
                               <h4>Número de identificación: <?php echo " ",$_SESSION['documento'];?></h4>
                               <h4>Sexo: <?php echo " ",$_SESSION['sexo'];?></h4>
                               <h4>Edad: <?php echo " ",$_SESSION['edad'];?></h4>
                               <h4>Peso: <?php echo " ",$_SESSION['peso'];?></h4>
                               <h4>Estatura: <?php echo " ",$_SESSION['estatura'];?></h4>
                               <h4><?php echo " ",$_SESSION['correo'];?></h4>
                                <center><button type="button" class="boton1">Cambiar informacion</button></center>
                            </div>
           
                            </center></div>
                           
                           
                       
                       
                    </div>
               
               
               
           
        </div>
        </div>
