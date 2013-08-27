<?php
/**
 * 
 * Database Klasse erweitert PHP PDO
 * 
 * $db = new Database();
 * 
 */
class Database extends PDO {
	
	private $dsn;
	private $user;
	private $pass;
	
	/**
	 * 
	 * Konstruktor.
	 * 
	 * Konfiguration laden und der Elternklasse übergeben.
	 * 
	 */
	public function __construct() {
		
		$conf = \Config::getInstance();

		$this->dsn = $conf->database_type . ":host=" . $conf->database_host . ";port=" . $conf->database_port . ";dbname=" . $conf->database_name; 
		
		$this->user = $conf->database_user;
		$this->pass = $conf->database_pass;

		parent::__construct($this->dsn, $this->user, $this->pass);
		
	}
	

}