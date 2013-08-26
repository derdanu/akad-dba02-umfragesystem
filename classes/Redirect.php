<?php
/**
 * 
 * Redirect Klasse
 * 
 */
class Redirect {	
	
	/**
	 * 
	 * Header Redirect durchführen
	 * 
	 * @param	String	$url	URL
	 * 
	 */
	public static function Header($url) {
		
		header("Location: $url");
	}

	/**
	 * 
	 * Controller Redirect durchführen
	 * 
	 * @param	String	$controller	Controllername
	 * 
	 */
	public static function toController($controller) {
		
		header("Location: index.php?controller=$controller");
	}
	
}



?>
