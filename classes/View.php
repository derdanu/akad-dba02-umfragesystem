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
	// Layout Template
	private $layouttemplate = '_layout';
	// Anzuzeigenedes Template inkl Pfad;
	private $includetemplate;
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
		
		$this->includetemplate = $this->getTemplateOnFilesystem($this->template);
		
		// Überprüfen ob das angeforderte Template Exitiert
		if (file_exists($this->includetemplate)) {
			// Layouttemplate einbinden
			include $this->getTemplateOnFilesystem($this->layouttemplate);
			
		} else {
			
			throw new Exception("Template '{$this->template}' nicht gefunden");
			
		}
			
	}
	
	/**
	 * 
	 * Anhand des Templatenamen den vollen Pfad inkl Datei zurückgeben
	 * 
	 * @param	String	$template	Templatename
	 * 
	 * @return	String	Pfad inkl Dateiname zum Template
	 * 
	 */
	private function getTemplateOnFilesystem($template)	 {
		
		return $this->templatePath . DIRECTORY_SEPARATOR . $template . ".tpl.php";
		
	}	
}
?>
