<?php 

session_start();

include_once 'functions.php';

$title = "D &amp; D app";

if($_SERVER["HTTP_HOST"] == "localhost") {
	$route = "/dndapp/";
	$mysqlHost="localhost";
	$mysqlDB="dndapp";
	$mysqlUser="edunova";
	$mysqlPass="edunova";
} else if($_SERVER["HTTP_HOST"] == "jsostaric.byethost7.com") {
	$route = "/dndapp/";
	$mysqlHost="sql306.byethost7.com";
	$mysqlDB="b7_20129419_dnd";
	$mysqlUser="b7_20129419";
	$mysqlPass="Jura10os";
} else {
	$route = "/";
}

try{
	$db= new PDO("mysql:host=". $mysqlHost . ";dbname=". $mysqlDB, $mysqlUser,$mysqlPass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	$db->exec("SET CHARACTER SET utf8");
	$db->exec("SET NAMES utf8");
}catch(PDOException $e) {
	echo "Something went wrong";
}

