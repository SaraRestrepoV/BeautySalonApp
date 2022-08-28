<h1 class="nombre-pagina">Create an account</h1>
<p class="descripcion-pagina">Fill out the form below to create a BeautySalonApp account</p>

<?php 

    include_once __DIR__ . "/../templates/alertas.php"; 

?>

<form class="formulario" method="POST" action="/crear-cuenta">
    <div class="campo">
        <label for="nombre">Name</label>
        <input type="text" id="nombre" name="nombre" placeholder="Your name" value="<?php echo s($usuario->nombre)?>">
    </div>
    <div class="campo">
        <label for="apellido">Last name</label>
        <input type="text" id="apellido" name="apellido" placeholder="Your last name" value="<?php echo s($usuario->apellido)?>">
    </div>
    <div class="campo">
        <label for="telefono">Phone number</label>
        <input type="tel" id="telefono" name="telefono" placeholder="Your phone number" value="<?php echo s($usuario->telefono)?>">
    </div>
    <div class="campo">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email Adress" value="<?php echo s($usuario->email)?>">
    </div>
    <div class="campo">
        <label for="email">Password</label>
        <input type="password" id="password" name="password" placeholder="Your password">
    </div>

    <input class="boton" type="submit" value="create account">
</form>

<div class="acciones">
    <a href="/">Already have an account? Sign in</a>
    <a href="/olvide">Forgot your password? Recover it</a>
</div>