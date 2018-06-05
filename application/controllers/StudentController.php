<?php
class StudentController extends CI_Controller
{
    public function index()
    {
         
            $data['title'] = 'All Student Records'; 
            $data['data'] = $this->Student->getStudents();
            $this->load->view('templates/header');
            $this->load->view('students/index', $data);
            $this->load->view('templates/footer');
    }
    public function view($id)
    {
            $data['data'] = $this->Student->getStudent($id);

            if (empty($data['data'])){
                show_404();
            }
            $data['title'] = 'All '.$data['data'][0]['name'].' Records'; 
            $this->load->view('templates/header');
            $this->load->view('students/view', $data);
            $this->load->view('templates/footer');
    }
}