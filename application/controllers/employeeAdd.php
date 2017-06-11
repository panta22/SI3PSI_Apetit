<!-- Autor Dusan Pantic 533/2010 -->

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class EmployeeAdd extends CI_Controller
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
           
            $this->load->helper("form");
            $this->load->view('header.php');
            $this->load->view('navbar.php', $data);
            $this->load->view('addfood.php',$data); // 
            $this->load->view('footer.php');
        } else {
            
            $this->load->helper('url');
            redirect('login', 'refresh');
            
        }
    }

}