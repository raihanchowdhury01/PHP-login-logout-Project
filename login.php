<?php
include("connect.php");
include("login_form.php");
if(isset($_POST['btn'])){
	$name = $_POST['name'];
	//why don't take another key without phone key 
	$pas = $_POST['phone'];
	if(!empty($name)){
		if(!empty($pas)){
			$ssql = "SELECT login.u_name, login.p_pass FROM login, registration WHERE registration.username = login.u_name AND registration.passwords = login.p_pass;";
			$res = $connect_db -> query($ssql);
			if($res){
				include("welcome.php");
			}else{
				echo "Username or password is wrong!";
			}
			
		}
	}else{
		echo "Username or password is wrong!";
	}
}
?>