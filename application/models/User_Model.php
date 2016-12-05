<?php

class User_Model extends CI_Model {

	private $id;
	private $email;
	private $username;
	private $password;
	private $nama_depan;
	private $nama_belakang;
	private $sapaan;
	private $tgl_lahir;
	private $alamat;
	private $kota;
	private $negara;
	private $r_lat;
	private $r_long;
	private $telepon;
	private $kantor;
	private $jabatan;
	private $pendidikan;
	private $sekolah;
	private $facebook;
	private $linkedin;
	private $gplus;
	private $token;
	private $role;
	private $tgl_signup;
	private $tgl_update;

	public $userdata;

	public function __construct() {
        parent::__construct();
    }

    /*
     * check if apakah email user sudah terdaftar atau belum
     */
    public function email_registered($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        if (!empty($query->row_array())) {
            return true;
        }
        return false;
    }

    /*
     * set data user berdasarkan email
     */
    public function setEmail( $email ){
    	if( $this->email_registered($email) ){

    		// get_user() berdasarkan email --> simpan ke $userdata
		   	$this->userdata = $this->get_user('email', $email);

    		$this->init_user();
    	}
    }

    public function getEmail(){
    	return $this->email;
    }

    /*
     * check if apakah user ID ada dalam database
     */
    public function id_exists( $id )
    {
        $query = $this->db->get_where('users', array('id' => $id));
        if (!empty($query->row_array())) {
            return true;
        }
        return false;
    }

    /*
     * set data user berdasarkan user ID
     */
    public function setId( $id ){
    	if( $this->id_exists($id) ){

    		// get_user() berdasarkan email --> simpan ke $userdata
		   	$this->userdata = $this->get_user('id', $id);

    		$this->init_user();
    	}
        return false;
    }

    public function getId(){
    	return $this->id;
    }

    /*
     * check if apakah username ada dalam database
     */
    public function username_exists( $username )
    {
        $query = $this->db->get_where('users', array('username' => $username));
        if (!empty($query->row_array())) {
            return true;
        }
        return false;
    }

    /*
     * set data user berdasarkan user ID
     */
    public function setUsername( $username ){
    	if( $this->username_exists($username) ){

    		// get_user() berdasarkan email --> simpan ke $userdata
		   	$this->userdata = $this->get_user('username', $username);

    		$this->init_user();
    	}
        return false;
    }

    public function getUsername(){
    	return $this->username;
    }

    public function getPanggilan(){
    	return $this->sapaan;
    }

    /*
     * verifikasi password berdasarkan email
     */
    public function checkPassword($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        $hash  = $query->row_array()['password'];

        if (password_verify($this->input->post('password'), $hash)) {
            return true;
        }
        return false;
    }

    /*
     * register user pertama kali (email dan password) 
     */
    public function firstRegister()
    {
        $_SESSION['token'] = random_string('alnum', 16);

        $data = [
             	'email'    		=> $this->input->post('email'),
                'nama_depan'    => $this->input->post('nama_depan'),
                'nama_belakang' => $this->input->post('nama_belakang'),
                'sapaan' 		=> $this->input->post('sapaan'),
                'password' 		=> password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'token'    		=> $_SESSION['token'],
                'id'       		=> date('U')
              ];

        $this->db->insert('users', $data);
    }

    /*
     * update data deskriptif user 
     */
    public function update()
    {
        $data = [
					'nama_depan'	=> $this->input->post('nama_depan'),
					'nama_belakang' => $this->input->post('nama_belakang'),
					'sapaan' 		=> $this->input->post('sapaan'),
					'tgl_lahir'		=> $this->input->post('tgl_lahir'),
					'alamat'		=> $this->input->post('alamat'),
					'kota'			=> $this->input->post('kota'),
					'negara'		=> $this->input->post('negara'),
					'r_lat'			=> $this->input->post('r_lat'),
					'r_long'		=> $this->input->post('r_long'),
					'telepon'		=> $this->input->post('telepon'),
					'kantor'		=> $this->input->post('kantor'),
					'jabatan'		=> $this->input->post('jabatan'),
					'pendidikan'	=> $this->input->post('pendidikan'),
					'sekolah'		=> $this->input->post('sekolah'),
					'facebook'		=> $this->input->post('facebook'),
					'linkedin'		=> $this->input->post('linkedin'),
					'gplus'			=> $this->input->post('gplus'),
				];

        $this->db->where('id', $this->id);
        return $this->db->update('users', $data);
    }

    /*
     * update role user (sebelum verifikasi email role=0) 
     */
    public function update_role( $role_nr )
    {
        $data = array('role' => $role_nr);
        $this->db->where('id', $this->id);
        return $this->db->update('users', $data);
    }

 
    /*
     * mengambil semua data user
     */
    private function get_user($key, $value)
    {
        $query = $this->db->get_where('users', array($key => $value));
        if (!empty($query->row_array())) {
            return $query->row_array();
        }
        return false;
    }

    /*
     * inisialisasi attribut user dari $userdata
     * $userdata di ambil dari get_user();
     */
    private function init_user(){

    	if( $this->userdata ) {

			$this->id = $this->userdata['id'];
			$this->email = $this->userdata['email'];
			$this->username = $this->userdata['username'];
			$this->nama_depan = $this->userdata['nama_depan'];
			$this->nama_belakang = $this->userdata['nama_belakang'];

			if( $this->userdata['sapaan'] == 1 ){
				$this->sapaan = $this->userdata['nama_depan'];
			} else {
				$this->sapaan = $this->userdata['nama_belakang'];
			}

			$this->tgl_lahir = $this->userdata['tgl_lahir'];
			$this->alamat = $this->userdata['alamat'];
			$this->kota = $this->userdata['kota'];
			$this->negara = $this->userdata['negara'];
			$this->r_lat = $this->userdata['r_lat'];
			$this->r_long = $this->userdata['r_long'];
			$this->telepon = $this->userdata['telepon'];
			$this->kantor = $this->userdata['kantor'];
			$this->jabatan = $this->userdata['jabatan'];
			$this->pendidikan = $this->userdata['pendidikan'];
			$this->sekolah = $this->userdata['sekolah'];
			$this->facebook = $this->userdata['facebook'];
			$this->linkedin = $this->userdata['linkedin'];
			$this->gplus = $this->userdata['gplus'];
			$this->token = $this->userdata['token'];
			$this->role = $this->userdata['role'];
			$this->tgl_signup = $this->userdata['tgl_signup'];
			$this->tgl_update = $this->userdata['tgl_update'];
    	
    	}

    }

}