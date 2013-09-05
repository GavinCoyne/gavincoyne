<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Master  {
 	public function before()
 	{
 		parent::before();
 		$this->template->content ='test';
 	}
	
    public function action_index()
    {
		$this->template->content = View::factory('welcome/carousel');
    }

} // End Welcome
