<!-- Autor Dusan Pantic 533/2010 -->

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
            
            echo "<script>alert('Confirm Password not matched or some fields are not in good format')</script>";
            $this->load->helper('url');
             redirect('register', 'refresh');
            //$this->load->view('footer.php');
        } else {
            $register = $this->user->register_db($_POST);
            
            if ($register) {
                // echo "<script>alert('added Sucessfully')</script>";
                redirect('login', 'refresh');
            } else
                echo "<script>alert('User name already exits! Please use another one.')</script>";
            
             // $this->load->view('login_view');
             $this->load->helper('url');
             redirect('register', 'refresh');
        }
        
    }
    
    
}
?>