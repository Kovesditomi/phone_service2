<?php
header("Content-Type: text/html; charset=utf-8");

define("DBHOST", "localhost");
define("DBUSER", "root"); //felhasználónév
define("DBPASS", ""); //jelszó ami most nincs, ezért üres sztring
define("DBNAME", "phone");

$dbconn = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Hiba az adatbázis csatlakozásakor!");
mysqli_query($dbconn, "SET NAMES utf8");

?>