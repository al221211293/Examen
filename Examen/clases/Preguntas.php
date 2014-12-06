<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/10/14
 * Time: 06:15 PM
 */
class Preguntas{

    private $pregunta;
    private $respuesta1;
    private $respuesta2;
    private $respuesta3;
    private $respuestacorrecta;
    private $name;
    private $Usuario;
 private $promedio;
    private $id;
    private $contrasena;
private $cuantos;
    public function getpreguntas(){
        echo" :".$this->name;


    }
    public  function  setpreguntas(){
        $this->name="";
        return $this->name;

    }




    public function readPreuntas(){
//echo "<br><br>readusuarioS";

$sql01 = "SELECT * FROM preguntas  ORDER BY pregunta ASC";
$result01 = mysql_query($sql01)or die("Error $sql01");
echo "<div class=table-responsive>";
        echo" <form name=preguntas action=preguntas method=post>";
    echo "<table class=\"table table-striped\">";

    echo "<tr><td colspan=2 align=center><strong>Lista de Preguntas</strong></td></tr>";
    echo "<tr><th>Numero</th><th>Pregunta</th><tr>";
        $cont=0;
        while($field = mysql_fetch_array($result01)){
            $cont=$cont+1;
        $this->Id = $field['id_preunta'];
        $this->pregunta = ($field['pregunta']);
        $this->repuesta1 = ($field['repuesta1']);
        $this->respuesta2 = ($field['respuesta2']);
        $this->respuesta3 = ($field['respuesta3']);
        $this->respuestacorecta = ($field['respuestacorecta']);


        echo "<tr><td >$this->Id</td><td>$this->pregunta</td></tr><tr>   <td colspan='2''>
        <input type='radio' name='res$this->Id'  value='$this->repuesta1 '>$this->repuesta1
        <input type='radio' name='res$this->Id'  value='$this->respuesta2 '>  $this->respuesta2
        <input type='radio' name='res$this->Id'  value='$this->respuesta3 '>  $this->respuesta3</td></tr>
         <input type='hidden' name='pre$this->Id'  value='$this->respuestacorecta '> ";

    }
        echo"<input type='hidden' name='cont'  value='$cont '>";
        echo"<tr><td><input type=submit name=submit value=Enviar> </input></td><td></td></tr>";
    echo "</table>";
        echo"</form>";
    echo "</div>";
}

    public function evaluacionPreuntas($promedio,$id){
//echo "<br><br>readusuarioS";

        $sql01 = "SELECT * FROM promedio where id=$id ";
        $result01 = mysql_query($sql01)or die("Error $sql01");
        $cuantos1=mysql_num_rows($result01);
        if($cuantos1==1){
        while($field = mysql_fetch_array($result01)){
            $this->Promedio = ($field['promedio']);
            $promedio1= $this->Promedio;
            if($promedio>=$promedio1){

                $sql="SELECT * FROM promedio  where id='$id '";
                $consulta=mysql_query($sql) or die ("Error en la consulta".mysql_error());

                $cuantos=mysql_num_rows($consulta);
                if($cuantos==1){
                    $sql012 = "UPDATE  `promedio`  SET promedio='$promedio' WHERE id='$id'";
                    $result012 = mysql_query($sql012)or die("Error $sql012");
                }else{
                    $sql012 = "insert  into  `promedio` values('$id','$promedio')";
                    $result012 = mysql_query($sql012)or die("Error $sql012");
                }

            }
    }
        }else{


            $sql012 = "insert  into  `promedio` values('$id','$promedio')";
            $result012 = mysql_query($sql012)or die("Error $sql012");

        }
    }

}