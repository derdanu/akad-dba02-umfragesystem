<?php
namespace Controller;

/**
 * 
 * Datenbankinformationen Controller
 * 
 *  
 * 
 */
class Database {
	
	private $view;
	
	/**
	 * 
	 * Kontruktor
	 * 
	 * View Initalisieren
	 * 
	 */
	public function __construct() {
		
		\Session::isUserAuthedCheck();
		
		$this->view = new \View();
		
	}
	
	/**
	 * 
	 * UML Diagramm anzeigen
	 * 
	 */
	public function Diagramm_Action() {
		
		$this->view->setTemplate('database_diagramm');
		$this->view->display();
				
	}
	
	/**
	 * 
	 * SQL Statements anzeigen
	 * 
	 */
	public function CreateTable_Action() {
		
		$this->view->setTemplate('database_create_table');
		$this->view->display();
				
	}		
}
?>
