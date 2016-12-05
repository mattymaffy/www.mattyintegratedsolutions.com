<?php

$username=$_POST['username'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];
$name=$_POST['name'];
$email=$_POST['email'];

if ($password == $confirm) {
if($username && $password && $confirm && $name && $email) {

	mysql_connect("localhost", "root", "") or die("fail to connect". mysql_error());
	mysql_select_db("mattyworld");
	$query=mysql_query("INSERT INTO register(username, password, confirm, name, email,) VALUES('$username','$password','$confirm','$name','$email')");

	echo "You can Now Login to student Home Portal from Login Page";
}
	
else{
	echo "You Most complete the form before you can't submit";
}
}
else{
	echo "Please Your Password Does'nt Match !!!";
}


mysql_close();
	
?>
