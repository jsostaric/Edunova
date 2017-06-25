<?php 
include_once 'config.php';

if(!isset($_POST["username"]) || !isset($_POST["password"])){
	header("location: " . $putanjaAPP . "index.php");
}


if($_POST["username"] === "edunova" && $_POST["password"] === "e") {
	$_SESSION["session"] = $_POST["username"];
	header("location:" . $route . "private/dashboard.php");
} else {
	header("location: " . $route . "public/login.php?neuspio&username=" . $_POST["username"]);
}


 ?>