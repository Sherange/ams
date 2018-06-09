<?php
class UserController extends CI_Controller
{
    public function index()
    {
         
            $data['title'] = 'All User Records'; 
            // $data['data'] = $this->Student->getStudents();
            
            $this->load->view('templates/header');
            $this->load->view('attendance/index', $data);
            $this->load->view('templates/footer');
    }
   
    public function login () 
    {
        $this->load->view('templates/header');
        $this->load->view('pages/login');
        $this->load->view('templates/footer');
    }
   
    public function registration () 
    {
        if (isset($_POST['register'])){
            $this->form_validation->set_rules('user_name', 'User Name', 'required|min_length[5]|max_length[12]|is_unique[user.user_name]',
                array(
                    'required'      => 'You have not provided %s.',
                    'is_unique'     => 'This %s already exists.'
                )
            );

            if($this->form_validation->run() == true){
                    echo 'form validated';
            }
        }
        $this->load->view('templates/header');
        $this->load->view('pages/register');
        $this->load->view('templates/footer');
    }
}   