<?php include ('header.php');?>

<section>
    <h2>¿Quiere recibir novedades? Regístrese</h2>
    <form action="enviar_consulta.php" method="post" class="flex_cont">
        <div class="flex_item">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" class="nombre">
        </div>
        <div class="flex_item">
            <label for="apellido">Apellido: </label>
            <input type="text" name="apellido" class="apellido">
        </div>
        <div class="flex_item">
            <label for="correo">Correo: </label>
            <input type="text" name="correo" class="correo">
        </div>
        <div class="flex_item">
            <label for="mensaje" class="mensaje">Mensaje: </label>
            <textarea name="mensaje" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="flex_item" id="flex_item_last">
            <input type="submit" value="Enviar consulta" id="submit">
        </div>
    </form>
</section>

<?php
if (isset($_GET['ok'])) {
    echo "<h3>Su mensaje ha sido enviado con éxito. Gracias por contactarse con nosotros!</h3>";
}
?>

<?php include('footer.php');?>