<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function register()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|callback_check_duplicate_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|matches[password]');

		if ($this->form_validation->run() === false) {
			$this->load->view('layouts/header');
			$this->load->view('auth/register');
			$this->load->view('layouts/footer');
		} else {
			$this->user_model->insert_user(); //save user
			$this->send_email_verification($this->input->post('email'), $_SESSION['token']); //kirim email
			redirect('login'); //redirect with session info kalo konfirmasi password
		}
	}

	public function send_email_verification($email, $token)
	{
		$this->load->library('email');
		$this->email->from('your@example.com', 'Your Name');
		$this->email->to($email);

		$this->email->subject('register bekraf codeigniter');
		$this->email->message("
						Klik untuk konfirmasi
						<a href='".base_url()."/verify/$email/$token'> Konfirmasi disini </a>
					");
    	$this->email->set_mailtype('html');

		$this->email->send();
	}

	public function signup_verify($email, $token)
	{
		$user = $this->user_model->get_user('email', $email);

		//cek if email exist or not
		if (!$user)
			die('email not exists!');

		//cek token cocok atau ngga
		if ($user['token'] !== $token)
			die('token tidak cocok!');

		//update user role jadi 1 / aktif
		$this->user_model->update_role($user['id'], 1);

		//set session, redirect
		$_SESSION['user_id']   = $user['id'];
		$_SESSION['logged_in'] = true;
		redirect('profile');
	}

	public function signin()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email|callback_check_password|callback_check_role');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() === false) {
			$this->load->view('layouts/header');
			$this->load->view('auth/login');
			$this->load->view('layouts/footer');
		} else {
			$user = $this->user_model->get_user('email', $this->input->post('email'));
			//save data in session
			$_SESSION['user_id']   = $user['id'];
			$_SESSION['logged_in'] = true;
			redirect('profile');
		}
	}


	/*
	 * check_email if already exists or not
	 * call by register form_validation callback
	 * @param $email
	 * @return BOOLEAN
	 */
	public function check_duplicate_email($email)
	{
		if ($this->user_model->check_email($email)) {
			$this->form_validation->set_message('check_duplicate_email', 'email is already exists!');
			return false;
		}
		return true;
	}

	/*
	 * check_email call by form_validation callback
	 * @param $email
	 * @return BOOLEAN
	 */
	public function check_email($email)
	{
		if (!$this->user_model->check_email($email)) {
			$this->form_validation->set_message('check_email', 'email is not on database!');
			return false;
		}
		return true;
	}

	/*
	 * check_password call by form_validation callback
	 * @param $password
	 * @return BOOLEAN
	 */
	public function check_password($email)
	{
		if (!$this->user_model->check_password($email)) {
			$this->form_validation->set_message('check_password', 'password is incorrect!');
			return false;
		}
		return true;
	}

	/*
	 * check role: if 0 can't log in!
	 */
	public function check_role($email)
	{
		$user = $this->user_model->get_user('email', $email);
		if ($user['role'] == 0) {
			$this->form_validation->set_message('check_role', 'email belum diverifikasi');
			return false;
		}
		return true;
	}

	public function forget_password()
	{
		//cek password lama, cocok atau ngga di database
		//kalo cocok -> update data password
	}

	public function signout()
	{
		unset($_SESSION['user_id'], $_SESSION['logged_in']);
		redirect('login');
	}
}
