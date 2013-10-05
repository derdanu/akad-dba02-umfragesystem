<?php
/**
 * 
 * Database Klasse erweitert PHP PDO
 * 
 * $db = new Database(); // fuer eine eigene Datenbankverbindung.
 * $db = Database::getInstance(); // Empfohlene Methode
 * 
 */
class Database extends PDO {
	
	private $dsn;
	private $user;
	private $pass;
	
	static private $instance = null;
	
	static public function getInstance() {
		if (null === self::$instance) {
			self::$instance = new self;
		}
		
		return self::$instance;
	}
	
	/**
	 * 
	 * Konstruktor wird nur einmalig aufgerufen.
	 * 
	 * Konfiguration laden und der Elternklasse uebergeben.
	 * 
	 * Die Funktion muss public sein da die PDO Elternklasse auch einen public 
	 * Konstruktur liefert. 
	 * 
	 */
	public function __construct() {
				
		$conf = \Config::getInstance();

		$this->dsn = $conf->database_type . ":host=" . $conf->database_host . ";port=" . $conf->database_port . ";dbname=" . $conf->database_name; 
		
		$this->user = $conf->database_user;
		$this->pass = $conf->database_pass;

		parent::__construct($this->dsn, $this->user, $this->pass);

    	
    	if ($conf->database_verbose == 1) $this->beMoreVerbose(); 
    	
		
	}
	
	/**
	 * 
	 * Error Modus erhoehen
	 * 
	 */
	private function beMoreVerbose() {
		
		$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		
	}


}