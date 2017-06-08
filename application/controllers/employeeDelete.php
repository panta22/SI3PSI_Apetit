<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class EmployeeDelete extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('employee', '', TRUE);
    }
    
    function index()
    {

        if (isset($_POST["foodid"])) {
            $foodid = $_POST["foodid"];
            $result = $this->employee->delete_db($foodid);
            $this->load->helper('url');
            redirect('employeeMenu', 'refresh');        
        }
            
        
        
    }
    
    
}
?>