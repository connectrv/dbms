<?php
require("config.php");
session_start();
if(   isset($_POST['username']) && isset($_POST['password'])     )
{
	$ef=mysql_query("select * from userdetails where name='".$_POST['username']."' AND password='".$_POST['password']."'") or die(mysql_error());
	if(mysql_num_rows($ef)>0)
		{ 
			$result = mysql_fetch_assoc($ef);//fetching whole of array
			//echo "<pre>";
			//print_r($result);//printing an array
			//echo "</pre>";
			echo "<h1>Welcome ".$result['name']."</h1>";
			$_SESSION['username']=$result['name'];
			$_SESSION['userid']=$result['id'];
?>

<html>
				<body>
					<a href="log_out.php"><button value="logout">Logout</button></a>
					<a href="author.php"><button value="add_article">Add Article</button></a>	
					<a href="viewarticles.php"><button value="add_article">View Article</button></a>	
				</body>
</html>
<?php
		}	
	else
	{
	echo "invalid username and password";
	}
}
?>