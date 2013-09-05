<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Dashboard extends Controller {

	public function before()
	{
		parent::before();
	}
	
	public function action_index()
	{
		$this->response->body('This will be the dashboard.');
	}
	
	public function action_test()
	{
			
	}

} 
