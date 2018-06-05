<?php 
class Student extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function getStudents()
    {
       $query =  $this->db->get('students');

       return $query->result_array();
    }
    public function getStudent($id){
      
        $query =  $this->db->get_where('students', array('students_id' => $id));

        return $query->result_array();
    }
}
