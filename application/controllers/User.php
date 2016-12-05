<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		$this->load->template('public/home');

	}

	public function view($id, $page='')
	{

		if( $this->user_model->username_exists( $id ) ){
			// jika $id adalah username 
			$this->user_model->setUsername( $id ); // baca user menggunakan username
	
		} elseif ( $this->user_model->id_exists( $id ) ) {
			// jika $id adalah ID user
			$this->user_model->setId( $id );	// baca user menggunakan user ID

			if( $this->user_model->getUsername() ){
				// jika sudah punya username, ganti id menjadi username pada URL
				redirect('/'.$this->user_model->getUsername().'/'.$page);
			}
	
		}

		$data['usermodel'] = $this->user_model;

		if( $page != '' ){
			$this->load->template('user/'.$page, $data); // halaman spesifik user		
		} else {
			$this->load->template('user/lib', $data);	//halaman katalog user
		}

	}

	public function signout(){
		$this->load->template('user/signout');
	}
}
