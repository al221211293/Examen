<?php
$usuario02=new Usuario();
?>
<html>
<head></head>
<body>
<h1><?=$titulo ?></h1>
<p><h1><?=$contenido ?></h1></p>
<p><h1><?=$nombre ?></h1></p>
<p>
    <?php
$usuario02->setUsuario();
$usuario02->getUsuario();
    $usuario02->consultaGeneral();
?>
</p>

</body>