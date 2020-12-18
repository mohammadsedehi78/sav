<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_handler extends MY_Controller {

	function __construct(){
		parent::__construct();
	}

	function index()
	{
		$login_status = Modules::run('login/is_logged_in');
		if($login_status)
		{
			echo Modules::run('login/login_page');	
		}
		else
		{
			echo Modules::run('signin/signin_page');
		}
	}

}
