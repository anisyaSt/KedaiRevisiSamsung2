<?php

require_once("koneksi.php");
mysql_connect("localhost","root","");
mysql_select_form("komentar");
$result=mysql_query("select * data order by id DESC");
while($data=mysql_fetch_row($result))
{
    echo "</hr>";
    echo "<b>$data[1]</br><br>";
    echo "email : <i>$data[2]</i><br>";
    echo "$data[3]<br>";

}
?>
