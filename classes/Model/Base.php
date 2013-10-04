<?php
namespace Model;

/**
 * 
 * Basis Datenmodell
 * 
 */
class Base {

	// Datenbank Handler
	protected $dbh;
	
	/**
	 * 
	 * Konstruktor
	 * 
	 * Datenbank Verbindung herstellen.
	 * 
	 */
	public function __construct() {
		
		$this->dbh = \Database::getInstance();
		
	}


		
}


?>
