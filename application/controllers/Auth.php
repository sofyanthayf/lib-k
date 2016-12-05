<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}


	public function signup() {
		$this->load->view('templates/header');
		$this->load->view('templates/navigation');
		$this->load->view('user/signup');
		$this->load->view('templates/footer');
	}

	public function register() {
		var_dump($_POST);
		$this->user_model->firstRegister();
		$this->sendVerificationEmail($this->input->post('email'), $_SESSION['token']);
		//redirect('/signup');
	}

	public function signin() {

	}


	public function signout() {

	}

	public function sendVerificationEmail($email, $token)
	{
		$this->load->library('email');

		$this->email->from('lib-k@k-innovation.org', 'LIB-K Admin');
		$this->email->to($email);

		$this->email->subject('[LIB-K] Registrasi Member');
		$this->email->message("
						Klik untuk konfirmasi
						<a href='http://localhost:8888/bekraf/registerlogin/verify/$email/$token'> Konfirmasi disini </a>
					");
    	$this->email->set_mailtype('html');

		$this->email->send();
	}

	public function checkemail($email)
	{
		if( $this->user_model->email_registered( urldecode($email) ) ) {
			echo "1";
		} else {
			echo "0";
		}
	}
}
