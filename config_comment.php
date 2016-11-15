<?php
$server=mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("publisher") or die(mysql_error());
$saw='CREATE TABLE IF NOT EXISTS comments
(
	id INT (10) UNSIGNED NOT NULL AUTO_INCREMENT,
	userid INT (10) UNSIGNED NOT NULL ,
	articleid INT (10) UNSIGNED NOT NULL ,
	comment VARCHAR(200) NOT NULL,
	PRIMARY KEY(id)
)
	ENGINE=MyISAM';
mysql_query($saw) or die(mysql_error());


?>