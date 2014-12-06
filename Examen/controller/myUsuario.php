<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/10/14
 * Time: 06:23 PM
 */
$usuario=new Usuario();
$titulo='Bienvenido al My uuario';
$contenido='Contenio e la variable..';

$variables=array('titulo'=>$titulo,
'contenido'=>$contenido,
'nombre'=>$usuario->setUsuario());
view('myusuario',$variables);

