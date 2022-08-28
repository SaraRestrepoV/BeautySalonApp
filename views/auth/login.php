<h1 class="nombre-pagina">BeautySalonApp</h1>
<p class="descripcion-pagina">Login with your data</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php"; 
?>

<form action="" class="formulario" method="POST" action="/">

    <div class="campo">
        <label for="email">Email Adress</label>
        <input type="email" id="email" placeholder="Enter your email address" name="email"/>
    </div>

    <div class="campo">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter your password" name="password"/>
    </div>

    <input type="submit" class="boton" value="Login">

</form>

<div class="acciones">
    <a href="/crear-cuenta">Don't have an account yet? Create one</a>
    <a href="/olvide">Forgot your password? Recover it</a>
</div>
