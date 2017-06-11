<!-- Autor Dusan Pantic 533/2010 -->

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class EmployeeMenu extends CI_Controller
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
            $data['specialities'] = $this->employee->selectSpecs();
            $this->load->view('header.php');
            $this->load->view('navbar.php', $data);
            $this->load->view('employeeBodyMenu.php', $data); 
            $this->load->view('footer.php');
        } else {
            
            $this->load->helper('url');
            redirect('login', 'refresh');
            
        }
    }

}

?>