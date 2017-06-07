<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class VerifyAddFood extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('employee', '', TRUE);
    }
    
    function index()
    {
        //This method will have the credentials validation
        $this->load->library('form_validation');
        
        //    $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        //    $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        
        $this->form_validation->set_rules('category_id', 'CategoryID', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required'); //|matches[password]
        // $this->form_validation->set_rules('picture', 'picture');
        // $this->form_validation->set_rules('apartment', 'Apartment', 'required|numeric');
        // $this->form_validation->set_rules('floor', 'Floor', 'required|numeric');
        // $this->form_validation->set_rules('phone', 'Phone', 'required');
        // $this->form_validation->set_rules('city', 'City', 'required');
        
        if ($this->form_validation->run() == FALSE) {
            //Field validation failed.  User redirected to login page
            //      $this->load->view('header.php');
            //    $this->load->view('navbar.php');
            echo "<script>alert('validation->run nije ok')</script>";
            //$this->load->view('footer.php');
        } else {
            $added = $this->employee->addfood_db($_POST);
            
            if ($added) {
                 echo "<script>alert('added Sucessfully')</script>";
            } else
                // echo "<script>alert('FAILED')</script>";
            
             // $this->load->view('login_view');
             $this->load->helper('url');
             redirect('employeeMenu', 'refresh');
        }
        
    }
    
    
}
?>