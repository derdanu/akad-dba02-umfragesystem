<?php
namespace ORM;

/**
 * 
 * Sehr einfache und minimale 
 * Objekt Relationen Abbildung 
 * 
 * Abstrakte Basis Klasse
 * 
 * Alle ORM Klassen Erben von dieser Klasse
 * 
 */
abstract class Base {
	
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
		
		$this->dbh = new \Database();
		
	}
	
	/**
	 * 
	 * Abstrake Funktion mit dem Insert Statements des Datensatzes
	 * 
	 * @return	string	Insert Statement
	 * 
	 */
	abstract protected function getInsertStmt();

	/**
	 * 
	 * Getter Methode
	 * 
	 */
	public function __get($key) {
		return $this->{$key};
	}

	/**
	 * 
	 * Setter Methode
	 * 
	 */
	public function __set($key, $val) {
   		$this->{$key} = $val;
   	}

	/**
	 * 
	 * Save Funktion
	 * 
	 * Daten werden peristent auf die Datenbank geschrieben
	 * 
	 */
	 public function save() {
	 
	 	$stmt = $this->getInsertStmt();	
	 	$stmt->execute();
	 	
	 }
	 
}
?>