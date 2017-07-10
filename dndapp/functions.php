<?php

function provjeraLogin() {
	if (!isset($_SESSION["session"])) {
		header("location: " . $GLOBALS["route"] . "public/login.php?unauthorized");
		exit ;
	}
}
