<?php
session_start();
if(isset($_SESSION["login"])){
  echo "BIENVENIDO_".$_SESSION["login"];
}else{
  echo "CUENTA DESACTIVADA";
}
if(isset($_COOKIE["username"])){
  echo "BIENVENIDO_".$_COOKIE["username"];
    unset($_COOKIE["username"]);
    setcookie("username", null, -1);
    unset($_COOKIE["password"]);
    setcookie("password", null, -1);
}else{
  echo "SIN COOKIE";
}
?>
 <!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
      <br><br />
        <form method="post" action="session.php">
            Usuario: <input type="text" name="username"/> <br>
            <br />
            Contraseña: <input type="password" name="password"/> <br>
            <br />
            <input type="submit" name="submit"/> <br>
            <br />
        </form>
    </body>
 </html>
