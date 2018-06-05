<?php
class AttendanceController extends CI_Controller
{
    public function index()
    {
         
            $data['title'] = 'All Attendance Records'; 
           // $data['data'] = $this->Student->getStudents();
            
            $this->load->view('templates/header');
            $this->load->view('attendance/index', $data);
            $this->load->view('templates/footer');
    }
}