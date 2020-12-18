<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends MY_Controller 
{

	function __construct()
	{
		parent::__construct();
	}

	function signin_page()
	{
		$this->load->view('signin_page');
	}
}
