<?php  ob_start(); ?>
    <h1 class="titutlo">Reserva tus entrada</h1>
    <form action="" method="post">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre">
        <button type="submit">Enviar</button>
    </form>
<?$contenido = ob_get_clean();?>
<?include '../../index.php';?>
