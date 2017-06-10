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
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        
        
        if ($this->form_validation->run() == FALSE) {
            echo "<script>alert('validation->run nije ok')</script>";
            
        } else {
            $added = $this->employee->addfood_db($_POST);
            
            if ($added) {
                 echo "<script>alert('added Sucessfully')</script>";
            } else
                
                $this->load->helper('url');
                redirect('employeeMenu', 'refresh');
        }
        
    }
    
    
}
?>