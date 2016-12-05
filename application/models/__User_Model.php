<?php

class User_Model extends CI_Model
{
   public function __construct()
    {
        parent::__construct();
    }

    /*
    * regiseter / save user to database
     */
    public function insert_user()
    {
        $this->load->helper('string'); //untuk random string
        $_SESSION['token'] = random_string('alnum', 16);

        $data = [
                    'email'    => $this->input->post('email'),
                    'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                    'token'    => $_SESSION['token']
                ];

        $this->db->insert('users', $data);
    }

    /*
     * get user data by id/email/etc.
     */
    public function get_user($key, $value)
    {
        $query = $this->db->get_where('users', array($key => $value));
        if (!empty($query->row_array())) {
            return $query->row_array();
        }
        return false;
    }

    /*
     * check if user exists in database or not
     */
    public function check_email($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        if (!empty($query->row_array())) {
            return true;
        }
        return false;
    }

    public function check_password($email)
    {
        $query = $this->db->get_where('users', array('email' => $email));
        $hash  = $query->row_array()['password'];

        if (password_verify($this->input->post('password'), $hash)) {
            return true;
        }
        return false;
    }

    public function is_LoggedIn()
    {
        if (!isset($_SESSION['logged_in'])) {
			return false;
		}
        return true;
    }

    public function update_role($user_id, $role_nr)
    {
        $data = array('role' => $role_nr);
        $this->db->where('id', $user_id);
        return $this->db->update('users', $data);
    }

}
