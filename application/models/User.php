<?php
class User extends CI_model
{
    private $f = '';        // filter
    private $o = '';        // order

    private $q = Null;        // query
    private $rs = Null;        // record set
    private $r = Null;        // current record
    private $c = 0;            // record count
    public function __construct()
    {
        $this->load->database();
    }

    public function getUserList()
    {
        $query = $this->db->get('user');
        $result = $query->result();
        return $result;
    }

    public function check_register($user_data)
    {
        $this->db->where('email', $user_data['email']);
        $query = $this->db->get('user');
        if ($query->row()) {
            return true;
        } else {
            return false;
        }
    }
    public function create_user($user_data)
    {
        $this->db->insert('user', $user_data);
    }
    public function check_login($user_data)
    {
        $email = $user_data['email'];
        $password = $user_data['password'];
        $sql = "
        SELECT * FROM `user` 
        WHERE USER.email = '$email' AND USER.password = '$password'
        ";
        $q = $this->db->query($sql);
        $result = $q->result();
        if (count($result) > 0) {
            $user = array(
                'user_info' => $result[0],
                'login' => true
            );
            return $user;
        } else {
            return false;
        }
    }
}
