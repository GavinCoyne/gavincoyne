<?php 
class Controller_Master extends Controller_Template
{
    public $template = 'template';
	
    public function before()
    {
    	$Scripts = array(
    		'jquery-2.0.3.js' => 'jquery-1.10.2.js',
    		'jquery-ui-1.10.3.custom.js' => 'jquery-ui-1.10.3.custom.js',
    		'bootstrap' => 'bootstrap.js',
    		'bootstrap' => 'bootstrap-carousel.js',
    		'system' => 'system.js',

    		
    	);
    	
    	$CSS = array(
    		'jquery-ui-1.10.3.custom.css' => 'jquery-ui-1.10.3.custom.css',
    		'bootstrap' => 'bootstrap.css',
	    	'bootstrap-responsive.css' => 'bootstrap-responsive.css',
    		'system' => 'system.css',

    		
    	);
    	
    	parent::before();
    	$this->template->title = 'Gavin Coyne';
    	$this->template->controlNav = null;
    	$this->template->publicNav = View::factory('templates/publicNav');
		$this->template->content = null;
		$this->template->header = View::factory('templates/head');
		$this->template->scripts = $Scripts;
		$this->template->CSSS = $CSS;
    }
}