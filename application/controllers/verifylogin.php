<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class VerifyLogin extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }
    
    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        
        if ($this->form_validation->run() == FALSE) {
            // redirect('login/index');
            //Field validation failed.  User redirected to login page
            $this->load->view('header.php');
            $this->load->view('navbar.php');
            $this->load->view('login_view');
            $this->load->view('footer.php');
            // echo validation_errors();
        } else {
            
            // $this->load->helper('url');
            redirect('home/index');
            
        }
        
    }
    
    function check_database($password)
    {
        //Field validation succeeded.  Validate against database
        $username = $this->input->post('username');
        
        //query the database
        $result = $this->user->login($username, $password);
        
        if ($result) {
            $sess_array = array();
            foreach ($result as $row) {
                $sess_array = array(
                    'id' => $row->id,
                    'username' => $row->username
                );
                $this->session->set_userdata('logged_in', $sess_array);
            }
            return TRUE;
        } else {
            $this->form_validation->set_message('check_database', 'Invalid username or password');
            return false;
        }
    }
}
?>