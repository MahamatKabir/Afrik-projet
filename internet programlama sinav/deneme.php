<?php
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
   </head>
   <body>
<?php
$_SESSION["username"] = "mahamat";
echo "Kullanıcı adım " . $_SESSION["username"] . "";
setcookie( 'kullaniciAd', $_SESSION["username"], 0, "/");
?>
  </body>
</html>
?>
