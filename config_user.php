<?php
$server=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("publisher") or die(mysql_error());
?>
<?php	
	$were='CREATE TABLE if not exists userdetails
	(
		id int UNSIGNED NOT NULL AUTO_INCREMENT,
		name VARCHAR(40) NOT NULL,
		address VARCHAR(40) NOT NULL,
		dob VARCHAR(20) NOT NULL,
		phone int UNSIGNED NOT NULL ,
		password VARCHAR(20) NOT NULL,
		PRIMARY KEY(id)
	)
	ENGINE=MyISAM';
	mysql_query($were) or die(mysql_error());
	?>