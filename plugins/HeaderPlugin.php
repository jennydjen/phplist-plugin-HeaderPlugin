<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HeaderPlugin extends phplistPlugin{
    
    public $name = "Header Plugin";
    public $version = '1.0.0';
    public $enabled = false;
    public $authors = 'Jennifer CHAIGNEPAIN';
    public $description = 'Add the parameters in mail header';
        
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