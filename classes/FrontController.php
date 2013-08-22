<?php
// Namespace der Controller definieren
define('CONTROLLERNAMESPACE', '\\Controller\\');

/**
 * 
 * FrontController Klasse
 * 
 * Get Request: ?controller=test&action=machwas
 * 
 * Ergebsniss: Automatisches Einbinden der Controllerklasse "test"
 * und Aufruf der Methode machwas_Action()
 * 
 * Beim gleichen Request als Post wird die Methode machwas_Action_POST() aufgerufen
 *   
 * 
 */
class FrontController {
	
	private $controller;
	private $action;
		
	/**
	 * 
	 * Konstruktor
	 * 
	 * $c = new FrontCrontroller()
	 * $c->run();
	 *  
	 */
	public function __construct() {

		$controller = $_GET['controller'];		
		$action = $_GET['action'];
		
		
		$this->controller = !empty($controller) ? CONTROLLERNAMESPACE . $controller : CONTROLLERNAMESPACE . "Index";

		$this->action = !empty($action) ? $action : "Index";
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$this->action .= "_POST";
		}
    	$this->action .= "_Action";

	}

	/**
	 * 
	 * FrontController ausführen
	 * 
	 */
	public function run() {
		
		$controller = new $this->controller();

		if(in_array($this->action, get_class_methods($controller))) {
        	$controller->{$this->action}();
      	} else {
			throw new Exception("'{$this->controller}' hat keine Aktion '{$this->action}'");
      	}
    	
  
	}
}

?>
