<?php
include("config.php");
if(isset($_SESSION) && isset($_SESSION['username'])){
?>
<html>
<body>
	<h1>Welcome <?php echo $_SESSION['username'];?> </h1>
	<a href="logOut.php"><button value="logout">logout</button></a>
	<a href="author.php"><button value="add_article">Add_Article</button></a>
</body>
</html>
<?php
}else{
	header("Location: login.php");
}
?>