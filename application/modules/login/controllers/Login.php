<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	function is_logged_in()
	{
		echo "in checking loggin func";
		if(isset($_SESSION['user_id']))
			return true;
		else
			return false;
	}

	function login_page()
	{
		echo "login_page";
	}
}
