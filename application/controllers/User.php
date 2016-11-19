<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->template('public/home');
	}

	public function view($id, $page='')
	{
		$data['user'] = $id;

		if( $page != '' ){
			$this->load->template('user/'.$page, $data);		
		} else {
			$this->load->template('user/lib', $data);		
		}

	}

	public function signout(){
		$this->load->template('user/signout');
	}
}
