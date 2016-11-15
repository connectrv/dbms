<?php 
require("config.php");
/*if(    isset($_POST['submit'])    )
{
session_start();
//$_SESSION['sess_username']=$_POST['username'];
}
*/

?>

<html>
	<head>
		<title>
		</title>
		<style>
		.op{
			width:100%;
			background-color:orange;
			float:center;
		}
		.str{
			display:block;
			width:50%;
			border:black;
			float:center;
			padding:70px;
		}
		</style>
	</head>
<body>
	<div class="op">
		<h2 align="center">Welcome to FACEBOOK</h2>
		<div class="str" >
			<form action="sign_up.php" method="post">
				<a href="sign_in.php"><button type="button">Login</button></a>
				<a href="page_article.php"><button type="button">View Article</button></a>
				<button type="submit" value="submit" >Sign up</button>
			</form>
		</div>
	</div>
</body>
</head>
</html>