<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navigation');
		$this->load->view('public/home');
		$this->load->view('templates/footer');
	}

	public function price()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navigation');
		$this->load->view('public/pricing');
		$this->load->view('templates/footer');
	}

	public function about()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navigation');
		$this->load->view('public/about');
		$this->load->view('templates/footer');
	}

	public function faq()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/navigation');
		$this->load->view('public/faq');
		$this->load->view('templates/footer');
	}
}
