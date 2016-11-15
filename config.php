<?php
$server=mysql_connect("localhost","root","") or die(mysql_error());
//mysql_query("create database publisher") or die (mysql_error());

mysql_select_db("publisher") or die(mysql_error());
$saw='CREATE TABLE IF NOT EXISTS user
(
	abc INT (10) UNSIGNED NOT NULL AUTO_INCREMENT,
	author VARCHAR(50) NOT NULL,
	subject VARCHAR(50) NOT NULL,
	message VARCHAR(200) NOT NULL,
	PRIMARY KEY(abc)
)
	ENGINE=MyISAM';
mysql_query($saw) or die(mysql_error());
$sw='CREATE TABLE IF NOT EXISTS comments
(
	id INT (10) UNSIGNED NOT NULL AUTO_INCREMENT,
	userid INT (10) UNSIGNED NOT NULL ,
	articleid INT (10) UNSIGNED NOT NULL ,
	comment VARCHAR(200) NOT NULL,
	PRIMARY KEY(id)
)
	ENGINE=MyISAM';
mysql_query($sw) or die(mysql_error());
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