<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Libk_404 extends CI_Controller 
{
    public function __construct() 
    {
        parent::__construct(); 
    } 

    public function index() 
    { 
        $this->output->set_status_header('404'); 
        $data['content'] = 'libk404'; // View name 
        $this->load->view('index',$data);//loading in my template 
    } 
} 