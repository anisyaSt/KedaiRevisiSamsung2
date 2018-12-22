<?php
   $hostname  = "localhost";
   $username  = "root";
   $password  = "";
   $dbname  = "olshop";
   $db = new mysqli($hostname, $username, $password, $dbname);
   
   if( !$db ){
		die("Gagal terhubung dengan database: " . mysqli_connect_error());
	}
?>