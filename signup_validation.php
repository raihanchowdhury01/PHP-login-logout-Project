<?php
include("connect.php");
if(isset($_POST['btn'])){
	$name = $_POST['name'];
	//why don't take another key without phone key 
	$pas = $_POST['phone'];
	if(!empty($name)){
		if(!empty($pas)){
			$sql = "INSERT INTO registration (username, passwords) VALUES ('$name', '$pas')";
			$connect_db -> query($sql);
			$lsql = "INSERT INTO login (u_name, p_pass) VALUES ('$name', '$pas')";
			$connect_db -> query($lsql);
		}
	}else{
		echo "Username or password is wrong!";
	}
}
?>