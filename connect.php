<?php
$connect_db = new mysqli("localhost", "root", "", "signup");
if(!$connect_db){
	echo mysqli_connect_error();
}
?>