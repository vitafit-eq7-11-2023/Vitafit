<style>
 .contenedor_objetivos{
    height: 13rem;
    background-color: white;
    border-radius:15px;
 }
 .formulario_objetivo{
    margin:40px;
    justify-content:space-between;
 }
 h5{
    margin-top:10px;
 }
.btn_objetivo{
        background-color:#BFEBC5;
        padding: 10px 20px;
        color: black;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
        transition: transform 0.3s ease;
}
.btn_objetivo:hover{
        transform: scale(1.1);
}

</style>
<center>
<h2>Genera tu rutina</h2>
<h4>¿Cual es tu proposito?</h4>
<div class="formulario_objetivo row">
    <div class="contenedor_objetivos col-md-3">
        <h5>Ganar peso</h5>
        <form action="codigo_objetivo_rutina.php" method="POST">
            <input class="form-control" type="text" name="objetivo" value="1" hidden>
            <button type="submit" name="btn_objetivo" class="btn_objetivo">¡Vamos!</button>
        </form>
    </div>
    <div class="contenedor_objetivos col-md-3">
        <h5>Recomposicion</h5>
        <form action="codigo_objetivo_rutina.php" method="POST">
            <input class="form-control" type="text" name="objetivo" value="2" hidden>
            <button type="submit" name="btn_objetivo" class="btn_objetivo">¡Vamos!</button>
        </form>
    </div>
    <div class="contenedor_objetivos col-md-3">
        <h5>Perder peso</h5>
        <form action="codigo_objetivo_rutina.php" method="POST">
            <input class="form-control" type="text" name="objetivo" value="3" hidden>
            <button type="submit" name="btn_objetivo" class="btn_objetivo">¡Vamos!</button>
        </form>
    </div>
</div>
</center>