<?php
session_start();
session_destroy();
if(isset($_SESSION["login"])){
  echo "BIENVENIDO_".$_SESSION["login"];
}else{
  echo "CUENTA DESACTIVADA";
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
