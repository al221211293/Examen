<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/10/14
 * Time: 06:23 PM
 */



$Preguntas=new Preguntas();

if (isset($_POST['submit'])) {
    switch($_POST['submit']){
        case "Enviar":
            echo "<div class=\"alert alert-danger\" role=alert>";
            echo "<br>Bot&oacute;n: " . $_POST['submit'];
            echo "</div>

            ";

            $cont=$_POST['cont'];
            $contador=0;
            for($y=0;$y<$cont;$y++)
            {
                $d=$y+1;
               $pregunta= $_POST['res'.$d];
               $respuesta =$_POST['pre'.$d];
              if($pregunta==$respuesta){
                  $contador=$contador+1;
              }




            }
            $promedio = $contador*100/$cont;
            echo"<h1>$promedio</h1>";

          $Preguntas->evaluacionPreuntas("$promedio",2);
            break;

    }

}else{


$titulo='Bienvenido Al cuestionario';
$contenido='Contesta correctamente las siguientes preuntas';

$variables=array('titulo'=>$titulo,
    'contenido'=>$contenido,
    'nombre'=>$Preguntas->setpreguntas());
view('preguntas',$variables);


}
