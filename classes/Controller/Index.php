<?php
namespace Controller;

/**
 * 
 * Index Controller
 * 
 * Wird default immer Aufgerufen 
 * 
 */
class Index {
	
	/**
	 * 
	 * Default Index Get Action
	 * 
	 */
	public function Index_Action() {
		
		print "Hello World from " . get_class($this);
		
	}	
}


?>
