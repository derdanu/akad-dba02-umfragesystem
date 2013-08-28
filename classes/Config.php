<?php
define('CONFIGFILE', 'config/config.ini');
/**
 * 
 * Config Klasse als Singleton Pattern
 * 
 * $conf = \Config::getInstance();
 * $value = $conf->key;
 * 
 * Die Werte stehen in der Ini Datei und koennen direkt abgerufen werden.
 * 
 */
class Config {
	
	private $config = array();
	
	static private $instance = null;

	static public function getInstance() {
		if (null === self::$instance) {
			self::$instance = new self;
		}
		
		return self::$instance;
	}

	/**
	 * 
	 * Konstruktor
	 * 
	 * Wird nur einmal aufgerufen wegen Singleton Pattern
	 * 
	 * Konfigurationsdatei einlesen
	 * 
	 */
	private function __construct() {
		$this->config = parse_ini_file(CONFIGFILE);
	}
	
	private function __clone(){}

	/**
	 * 
	 * Getter Methode
	 * 
	 * @param	String	$key	Schlüssel
	 * 
	 * @return	String	Wert
	 * 
	 */
	public function __get($key) {
				
		if (array_key_exists($key, $this->config)) {
			return $this->config[$key];
		} else {
			throw new Exception("Config Schluessel '$key' nicht verfuegbar");
		}
		
	}

}