<!-- Autor Dusan Savic 539/2010 -->

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class EmployeeCompleted extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {

        if ($this->session->userdata('logged_in')) {
            $session_data     = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            
            $this->load->database();
            $this->load->model('employee');
            $data['allOrders'] = $this->employee->selectOrders();
            $this->load->view('header.php');
            $this->load->view('navbar.php', $data);
            $this->load->view('employeeCompleted.php', $data); 
            $this->load->view('footer.php');
        } else {
            
            $this->load->helper('url');
            redirect('login', 'refresh');
            
        }
    }
 
}

?>