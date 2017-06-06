<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class VerifyRegistration extends CI_Controller
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
        
        //    $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        //    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]'); //|matches[password]
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('apartment', 'Apartment', 'required|numeric');
        $this->form_validation->set_rules('floor', 'Floor', 'required|numeric');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            //      $this->load->view('header.php');
            //    $this->load->view('navbar.php');
            echo "<script>alert('validation->run nije ok')</script>";
            //$this->load->view('footer.php');
        } else {
            $register = $this->user->insertdata($_POST);
            
            if ($register) {
                // echo "<script>alert('added Sucessfully')</script>";
            } else
                echo "<script>alert('FAILED')</script>";
            
             // $this->load->view('login_view');
             $this->load->helper('url');
             redirect('home', 'refresh');
        }
        
    }
    
    
}
?>