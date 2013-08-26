<?php
define('DEBUG', 'true');

define('CLASS_DIR', 'classes/');

// PHP Autoloader Funktion definieren.
spl_autoload_register('__autoload'); 

/**
 * 
 * Wir für den Autoloader von Klassen benötigt
 * 
 * @param	String	$class	Klassenname
 * 
 */
function __autoload($class) {
 
	// Namespace Backslashe in Slashe für das Filesystem umwandeln
	$file = str_replace("\\", DIRECTORY_SEPARATOR, $class).".php";
 
 	// Klasse einbinden ansonsten Exception werfen.
	if (file_exists(CLASS_DIR . $file)) {
		require_once CLASS_DIR . $file;
	} else {
		throw new Exception("Autoloaderfehler: " . $file . " not found.");
	}
} 
 
// FrontController aufrufen 
try {
	$c = new \FrontController();
	$c->run();	
} catch (Exception $e)  {	
	$view = new \View();
	$view->setTemplate('exception');
	$view->assign('exception', $e->getMessage());
	$view->display();
}

if (DEBUG) {
	print "<hr>Debug<br>";
	print "<pre>";
	print_r($_GET);
	print_r($_POST);
	print "</pre>";
}


?>
