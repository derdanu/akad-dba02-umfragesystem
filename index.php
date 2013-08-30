<?php
define('CLASS_DIR', 'classes/');

/**
 * 
 * PHP Klassen Autoloader definieren
 * 
 * Andere Variante waere mit spl_autoload_register() 
 * eine oder mehrere Funktionen definieren
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
 
try {
	
	// Session Initalisieren
	$session = \Session::getInstance();
	
	// Frontcontroller Initalsieren und Aufrufen
	$c = new \FrontController();
	$c->run();
	
		
} catch (CustomException\UserNotAuthedException $e) {
	
	displayException($e->getMessage(), "Illegaler Aufruf");
	

} catch (CustomException\InvalidUserPassException $e) {

	displayException("Benutzername und/oder Passwort falsch", "Loginfehler");
	
	
} catch (Exception $e)  {	
	
	displayException($e->getMessage(), "Das h&auml;tte nicht passieren d&uuml;rfen");
	
}

/**
 * 
 * Exception Anzeigen
 *  
 * @param String 	$e	Exceptiontext
 * @param String	$h1	Ueberschrift
 * 
 */
function displayException($e, $h1) {
	
	$view = new \View();
	$view->setTemplate('exception');
	$view->assign('h1', $h1);
	$view->assign('exception', $e);
	$view->display();
	
}

$conf = \Config::getInstance();

// Debugging
if ($conf->application_debugging == 1) {
	print "<br /><br />";
	print "<pre>";
	print '$_GET ';
	print_r($_GET);
	print '$_POST ';
	print_r($_POST);
	print '$_SESSION ';
	print_r($_SESSION);
	print '$_SERVER ';
	print_r($_SERVER);	
	print "</pre>";
}


?>
