<?php
$user="Naza";
$passwordd="1234";
if($_POST["username"]==$user &&$_POST["password"]==$passwordd){
setcookie("username", $_POST["username"],time()+60);
setcookie("password", $_POST["password"],time()+60);
echo "COOKIE CREADO";
}else{
  echo "USUARIO O COTRASEÑA INCORRECTA, INTENDE NUEVAMENTE";
}
 ?>
