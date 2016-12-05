<?php

	$names=$_POST['names'];
	$email=$_POST['email'];
	$message=$_POST['message'];

if ($names && $email && $message)
 {
mysql_connect("localhost", "root", "") or die("fail to connect". mysql_error());
mysql_select_db("mattyworld");
mysql_query ("INSERT INTO faq (names, email, message) VALUES('$names','$email','$message')");

		$registered = mysql_affected_rows();
		echo "$registered";
		echo "We have Receive Your Message Thank you for your patronage";
	}
else{
	echo "You Most complete the form before you can't submit";
}

mysql_close();
	
?>