<?php
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
 
try {
	
	// Session Initalisieren
	$session = \Session::getInstance();
	
	// Frontcontroller Initalsieren und Aufrufen
	$c = new \FrontController();
	$c->run();
	
		
} catch (CustomException\UserNotAuthedException $e) {
	
	$view = new \View();
	$view->setTemplate('exception');
	$view->assign('h1', "Illegaler Aufruf");
	$view->assign('exception', $e->getMessage());
	$view->display();

} catch (CustomException\InvalidUserPassException $e) {

	$view = new \View();
	$view->setTemplate('exception');
	$view->assign('h1', "Loginfehler");
	$view->assign('exception', "Benutzername und/oder Passwort falsch");
	$view->display();
	
	
} catch (Exception $e)  {	
	
	$view = new \View();
	$view->setTemplate('exception');
	$view->assign('h1', "Das h&auml;tte nicht passieren d&uuml;rfen");
	$view->assign('exception', $e->getMessage());
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
