<?php
		//vaikev��rtus, kui nime ei ole kaasas
	function hello($name = "tundmatu"){
		echo "hello ".$name;
	}
	
	$user = "Helen";
	
	hello($user);
	
	echo "<br>";
	
	hello();
?>