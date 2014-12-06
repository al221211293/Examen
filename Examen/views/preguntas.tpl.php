<?php
$usuario02=new Preguntas();
?>
<html>
<head></head>
<body>
<h1><?=$titulo ?></h1>
<p><h1><?=$contenido ?></h1></p>
<p><h1><?=$nombre ?></h1></p>
<p>
    <?php
    $usuario02->setpreguntas();
    $usuario02->getpreguntas();
    $usuario02->readPreuntas();
    ?>
</p>

</body>