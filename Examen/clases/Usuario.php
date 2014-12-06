<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/10/14
 * Time: 06:15 PM
 */
class Usuario{
    private $name;
    private $Usuario;
    private $contrasena;

    public function getUsuario(){
        echo"<br> Mostrar usuario :".$this->name;


    }
    public  function  setUsuario(){
        $this->name="Raul;1";
        return $this->name;

    }


    public function loginUsuario($Usuario,$contrasena){
        //echo "<br>createUsuario";

        $sql1="select * from usuario where Usuario='$Usuario' and Contrasena='$contrasena'";
        $consulta=mysql_query($sql1) or die ("Error en consulta");
        $filas=mysql_num_rows($consulta);
        if($filas==0)
        {
            echo "Usuario o password no valido";
            $usua=new  Usuario();
            $usua->login();

            exit;
        }
        else
        {
            $Id=mysql_result($consulta,0,'id');
            $Estatus=mysql_result($consulta,0,'Estatus');
            $Nivel=mysql_result($consulta,0,'Nivel');
            if($Estatus=='2')
            {
                echo "El usuario esta bloqueado, consulte al administrador";

                exit;
            }
            else
            {
                session_start();
                $_SESSION['id']=$Id;
                $_SESSION['acceso']=1;

                if($Nivel=='1')
                {

                    print"<meta http-equiv='refresh' content='0;
					url=index.php'>";
                    exit;
                }
                else{
                    print"<meta http-equiv='refresh' content='0;
					url=Maestros.php'>";
                    exit;
                }
            }
        }
    }

    public function login(){

echo "<center>
        <div class=table-responsive>
            <form name=Usuario action=login method=Post>
                <table class=\"table table-bordered\">
                    <tr> <td>Usuario:</td><td><input type=text name=login> </input></td> </tr>
                    <tr> <td>contraseña</td><td><input type=text name=contrasena> </input></td> </tr>

                    <tr><td align=center></td><td><input type=submit name=submit value=Entrar> </input></td></tr>

                </table>
            </form>
        </div></center>

    ";
    }
    public function consultaGeneral(){
        //echo "<br><br>readusuarioG";
        $sql01 = "SELECT * FROM usuario WHERE estatus = 1 ORDER BY ApellidoPaterno ASC";
        $result01 = mysql_query($sql01)or die("Error $sql01");
        echo "<div class=table-responsive>";
        echo "<table class=\"table table-striped\">";
        echo "<tr><td colspan=5 align=center><strong>Lista de Usuarios</strong></td></tr>";
        echo "<tr><th>Id</th><th>Nombre</th><th>Apellido P</th><th>Apellido M</th><th>Nivel</th><tr>";
        while($field = mysql_fetch_array($result01)){
            $this->Id = $field['id'];
            $this->Nombre = utf8_decode($field['Nombre']);
            $this->ApellidoPaterno = utf8_decode($field['ApellidoPaterno']);
            $this->ApellidoMaterno = utf8_decode($field['ApellidoMaterno']);
            $this->Nivel = $field['Nivel'];
            switch($this->Nivel){
                case 1:
                    $type = "Administrador";
                    break;
                case 2:
                    $type = "Maestro";
                    break;
                case 3:
                    $type = "Alumno";
                    break;
            }
            echo "<tr><td>$this->Id</td><td>$this->Nombre</td><td>$this->ApellidoPaterno</td><td>$this->ApellidoMaterno</td><td>$type</td></tr>";
        }
        echo "</table>";
        echo "</div>";
    }


}