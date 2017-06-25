<?php 

session_start();

$title = "D & D app";

if($_SERVER["HTTP_HOST"] == "localhost") {
	$route = "/dndapp/";
} else if($_SERVER["HTTP_HOST"] == "jsostaric.byethost7.com") {
	$route = "/dndapp/";
} else {
	$route = "/";
}

