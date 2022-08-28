<h1 class="nombre-pagina">I forgot my password</h1>
<p class="descripcion-pagina">Reset your password by typing your email below</p>

<?php
    include_once __DIR__ . '/../templates/alertas.php';
?>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Your email address</label>
        <input type="email" id="email" name="email" placeholder="Email">
    </div>

    <input type="submit" class="boton" value="Send">
</form>

<div class="acciones">
    <a href="/">Already have an account? Sign in</a>
    <a href="/crear-cuenta">Don't have an account yet? Create one</a>
</div>