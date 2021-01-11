<?php

class Users_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_user_data($user)
    {
        $this->db
            ->select("iduser, password, name, email")
            ->from("tb_users")
            ->where("user", $user);

        $result = $this->db->get();

        if($result === 0){
            return NULL;
        } else {
            return $result->row();
        }
    }
}