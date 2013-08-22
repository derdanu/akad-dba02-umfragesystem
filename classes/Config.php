<?php
define('CONFIGFILE', 'config/config.ini');
/**
 * 
 * Config Klasse als Singleton Pattern
 * 
 * $conf = \Config::getInstance();
 * Die Werte stehen in der Ini Datei und können direkt abgerufen werden.
 * 
 */
class Config
{
	private $config = array();
	
	static private $instance = null;

	static public function getInstance()
	{
		if (null === self::$instance) {
			self::$instance = new self;
		}
		
		return self::$instance;
	}

	private function __construct() {
		// Konfigurationsdatei nur einmal laden.
		$this->config = parse_ini_file(CONFIGFILE);
		print "test";
	}
	private function __clone(){}

	public function __get($key) {
				
		if (array_key_exists($key, $this->config)) {
			return $this->config[$key];
		} else {
			throw new Exception("Config Schluessel '$key' nicht verfuegbar");
		}
		
	}

}