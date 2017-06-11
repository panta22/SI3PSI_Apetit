<!-- Autor Dusan Savic 539/2010 -->

<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// if(! $_SESSION) {
//  session_start(); //we need to call PHP's session object to access it through CI
// }
class EmployeeChangeStatus extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('employee', '', TRUE);
    }
    
    function index()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data     = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            // $data['h'] = $this->user->selectSpecs();

            // $this->load->view('home_view', $data);
            $this->load->database();
            $this->load->model('employee');
            $data['pendingOrders'] = $this->employee->getPendingOrders();
            $this->load->view('header.php');
            $this->load->view('navbar.php', $data);
            $this->load->view('employeePendingOrders.php', $data); 
            $this->load->view('footer.php');
        } else {
            //If no session, redirect to login page
            $this->load->helper('url');
            redirect('login', 'refresh');
            
        }
    }
    

    	function changeStatus()
    {
            if(isset($_POST["order_status"]) && isset($_POST["order_id"])) 	
            {
                    $this->employee->changeStatus($_POST["order_status"], $_POST["order_id"]);
                    redirect("EmployeeChangeStatus", "refresh");
            }
            
    }

    }

