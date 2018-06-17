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
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]|max_length[12]',
                array(
                    'required'      => 'You have not provided %s.',
                )
            );
        }

        if($this->form_validation->run() == true){

                    $data = array (
                        'user_name' => $_POST['user_name'],
                        'password' => $_POST['password'],
                        'user_type' => 'Admin',
                        'status' => 'Active'
                    );
                    
                    $this->User->addUser($data);
                    
                    $this->session->set_flashdata("success", "Your account has been registered, You can login now");
        }
        
        $this->load->view('templates/header');
        $this->load->view('pages/register');
        $this->load->view('templates/footer');
    }
}   