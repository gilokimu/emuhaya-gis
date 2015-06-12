<?php

/**
 * Description of Api
 *
 * @author john  Kiragu
 */
class Api  extends CI_Controller{
     
     function __construct() {
         parent::__construct();
     }

     public function index()
	{
		$this->load->view('welcome_message');
	}
     
    
}
