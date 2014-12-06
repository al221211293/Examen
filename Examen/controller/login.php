<?php
$usuario=new Usuario();

if (isset($_POST['submit'])) {
    switch($_POST['submit']){
        case "Entrar":
            echo "<br><br><br><br><div class=\"alert alert-danger\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>";
            $usuario->loginUsuario("$_POST[login]","$_POST[contrasena]");
            break;

    }

}



$titulo='Bienvenido al  Login';
$contenido='';

$variables=array('titulo'=>$titulo,
    'contenido'=>$contenido,
    'nombre'=>$usuario->setUsuario());
view('login',$variables);


?>