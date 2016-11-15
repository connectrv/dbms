<?php
session_start();
//$_SESSION['sess_username']=$_POST['username'];
require("config.php");
?>
<?php	
	
	//INSERTION
	if(isset($_POST['dob']) && isset($_POST['firstname']) && isset($_POST['address']) && isset($_POST['mobile']) && isset($_POST['password'])  )
	{
		
		mysql_query("INSERT INTO userdetails(name,address,dob,phone,password) VALUES ('".$_POST['firstname']."','".$_POST['address']."','".$_POST['dob']."','".$_POST['mobile']."','".$_POST['password']."')") or die(mysql_error());
		echo "User Details added<br>".'<a href="index.php"><button type="button">Back</button></a>';
	}
	//$_SESSION["name"]=$user;
	//$_SESSION["pass"]=$pass;
?>