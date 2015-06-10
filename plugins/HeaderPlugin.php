<?php

class HeaderPlugin extends phplistPlugin{
    
    public $name = "Header Plugin";
    public $version = '1.0.0';
    public $enabled = false;
    public $authors = 'jennydjen';
    public $description = 'Add the parameters in mail header from the config.php';
        
    function __construct() {
    	$this->coderoot = dirname(__FILE__) . '/HeaderPlugin/';
		
	parent::__construct();
    }
    
    public function messageHeaders($mail) {
        global $priority;
        
        $result = array();
        $result["X-Custom-Priority"] = $priority;
        return $result; 
    }
}