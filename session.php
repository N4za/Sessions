<?php
$user="Naza";
$passwordd="1234";
if($_POST["username"]==$user &&$_POST["password"]==$passwordd){
    $_SESSION["login"]="ADMINISTRADOR";
    echo "CUENTA ACTIVADA";
}else{
    echo "USUARIO O COTRASEÑA INCORRECTA, INTENDE NUEVAMENTE";
}
 ?>
