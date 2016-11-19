<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function register()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navigation');
		$this->load->view('user/signup');
		$this->load->view('templates/footer');
	}

	public function signin()
	{

	}


	public function signout()
	{

	}
}
