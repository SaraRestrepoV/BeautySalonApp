<h1 class="nombre-pagina">Recuperar password</h1>
<p class="descripcion-pagina">Coloca tu nueva contraseña a continuación</p>

<?php
    include_once __DIR__ . '/../templates/alertas.php';
?>

<?php if($error) return;?>

<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Tu nueva contraseña">
    </div>
        <input type="submit" class="boton" value="Guardar nueva contraseña">
    
</form>

<div class="acciones">
    <a href="/">¿Ya tienes cuenta? Iniciar sesión</a>
    <a href="/">¿Aún no tienes cuenta? Obtener una</a>
</div>