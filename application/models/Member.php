<?php

class Member extends User {

	private $perpustakaan;
	private $tgl_mulai;
	private $status;

    function __construct() {
        parent::__construct();
    }

}