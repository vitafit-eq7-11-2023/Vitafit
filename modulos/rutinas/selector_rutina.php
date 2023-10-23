<style>
    .contenedor_generadores{
        background-color:white ;
        border-radius: 10px;
    }
    .generador1{
        background-color:#BFEBC5 ;
        height: 50%;
        margin: 4%;
        border-radius: 10px;
    }
    .generador2{
        background-color:#BFEBC5 ;
        height: 100%;
        margin: 4%;
        border-radius: 10px;
    }
    .contenedor_boton_generar_rutina{
        height: 220px;
        border: 15px solid #000;
        border-radius: 10px;
    }
</style>
<center>
<div class="contenedor_generadores col-md-10">
    <div class="row" style="justify-content: space-between">
    <div class="generador1 col-md-5 shadow-lg">
        <br><br>
        <h2>Genera tu rutina</h2>
        <a href="dashboard.php?mod=rutina_gen">
            <div class="contenedor_boton_generar_rutina col-md-6">
            <box-icon type="regular" name="plus" color="black" size="190px" ></box-icon>
            </div>
        </a>
    </div>
    <div class="generador2 col-md-5 shadow-lg">
        <br><br>
        <h2>Crea tu rutina</h2>
        <div></div>
    </div>
    </div>
</div>
</center>