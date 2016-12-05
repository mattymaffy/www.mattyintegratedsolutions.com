<?php

$con=mysql_connect("localhost","root","");
$conn=mysql_select_db("mattyworld");

//$con = new mysqli("$servername","$username","$password","$dbname");

if (!($con && $conn)) {
	echo "fail to connect";
}
else{
	$username=$_POST['username'];
	$password=$_POST['password'];

	if($username && $password){
	$query=mysql_query("SELECT * FROM login");
	
	if ($query) {
		while ($row=mysql_fetch_assoc($query)) {
			$dbpassword=$row['password'];
			$dbusername=$row['username'];
		}
			if( $dbpassword==$password && $dbusername==$username) {
				header("location:studenthome.php");
				echo "Welcome To Student Home Portal";
			}
			else{
				echo "Your data Does'nt exit in our database please registered before login<br>";
				echo "Wrong Passowrd or Username No.";
			}
			
	}
	else
	{
		echo "You have  not registered";
	}
}
else {
	echo "you have to enter matric numebr and password";
}

}
mysql_close();

?>