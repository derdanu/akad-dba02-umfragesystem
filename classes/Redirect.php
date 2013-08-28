<?php
/**
 * 
 * Redirect Klasse
 * 
 */
class Redirect {	
	
	/**
	 * 
	 * Header Redirect durchfuehren
	 * 
	 * @param	String	$url	URL
	 * 
	 */
	public static function Header($url) {
		
		header("Location: $url");
	}

	/**
	 * 
	 * Controller Redirect durchfuehren
	 * 
	 * @param	String	$controller	Controllername
	 * 
	 */
	public static function toController($controller) {
		
		header("Location: index.php?controller=$controller");
	}
	
}



?>
