<?php

class Redirect {	
	
	public static function Header($url) {
		
		header("Location: $url");
	}

	public static function toController($controller) {
		
		header("Location: index.php?controller=$controller");
	}
	
}



?>
