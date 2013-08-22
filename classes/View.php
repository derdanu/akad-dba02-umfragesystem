<?php
/**
 * 
 * View Klasse
 * 
 */
class View {
	
	// Template Pfad
	private $templatePath = 'templates';
	// Default Template index.tpl.php
	private $template = 'index';
	// Variablen innerhalb des Templates
	private $view = array();
	

	/**
	 * 
	 * Template Variable zuweisen
	 * 
	 * @param	String	$key	Schlüssel
	 * @param	String	$value	Wert
	 * 
	 */
	public function assign($key, $value) {
		$this->view[$key] = $value;  
	}  	  	
	
	/**
	 * 
	 * Template setzen
	 * 
	 * @param	String	$template	Templatename
	 * 
	 */
	public function setTemplate($template) {
		$this->template = $template;  
	}  
	
	/**
	 * 
	 * Template anzeigen
	 * 
	 */
	public function display() {
		$file = $this->templatePath . DIRECTORY_SEPARATOR . $this->template . ".tpl.php";
		
		if (file_exists($file)) {
			
			include $file;
			
		} else {
			
			throw new Exception("Template '{$this->template}' nicht gefunden");
			
		}
			
	}		
}
?>
