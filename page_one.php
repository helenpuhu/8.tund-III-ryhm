<?php

	//page_one.php
	
	require_once("session.php");
	
	$_SESSION["name"] = "Helen";
	
	echo $_SESSION["name"];
?>