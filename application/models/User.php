<?php
class User extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getUsers() 
    {
        $query = $this->db->get('user');
        
        return $query->result_array();
    } 
}