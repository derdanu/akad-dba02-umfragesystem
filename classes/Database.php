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
	 * Konfiguration laden und der Elternklasse uebergeben.
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
	

	private function beMoreVerbose() {
		
		$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		
	}


}