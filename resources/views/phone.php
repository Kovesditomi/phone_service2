<?php
//csatlakozás az adatbázishoz
require("connect.php");

$rendez = (isset($_GET['rendez'])) ? $_GET['rendez'] : "brand";
$kifejezes = (isset($_POST['kifejezes'])) ? $_POST['kifejezes'] : "";

$sql = "SELECT *
        FROM phone
        WHERE (
            brand LIKE '%{$kifejezes}%'
            OR model LIKE '%{$kifejezes}%'
            OR part LIKE '%{$kifejezes}%'
            OR type_phone LIKE '%{$kifejezes}%'
            OR typepart LIKE '%{$kifejezes}%'
        )
        ORDER BY {$rendez} ASC";

$eredmeny = mysqli_query($dbconn, $sql);

$kimenet = "<table>
<tr>
    <th><a href=\"\">Márka</a></th>
    <th><a href=\"\">Modell</a></th>
    <th><a href=\"\">Alkatrész</a></th>
    <th><a href=\"\">Tipus</a></th>
    <th><a href=\"\">Tipus alkatrész</a></th>
    <th>Törlés</th>
    <th>Módosítás</th>
</tr>";

while ($sor = mysqli_fetch_assoc($eredmeny)){
    //var_dump($sor);
    $kimenet .= "
    <tr>
    <td>{$sor['brand']}</td>
    <td>{$sor['model']}</td>
    <td>{$sor['part']}</td>
    <td>{$sor['type_phone']}</td>
    <td>{$sor['typepart']}</td>
    <td><a href=\"delete.php?azon={$sor['azon']}\">Törlés</a></td>
    <td><a href=\"update.php?azon={$sor['azon']}\">Módosítás</a></td>
 </tr>";
};
$kimenet .= "</table>";


?>