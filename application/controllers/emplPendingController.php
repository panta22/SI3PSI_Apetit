<!-- Autor Dusan Savic 539/2010 -->

<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class EmplPendingController extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('employee');
    }
    
    function index()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data     = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['pending'] = $this->employee->getPendingOrders();
            $this->load->helper("form");
            $this->load->view('header.php');
            $this->load->view('navbar.php', $data);
            $this->load->view('employeePending.php',$data);
            $this->load->view('footer.php');
        } else {
            //If no session, redirect to login page
            $this->load->helper('url');
            redirect('login', 'refresh');
        }
    }

    function confirm(){
        if (isset($_POST['order_status']) && isset($_POST['order_id'])){
            $newstatus = $_POST['order_status'];
            $orderID = $_POST['order_id'];
            $this->employee->changeStatus($newstatus, $orderID);

            redirect('emplPendingController', 'refresh');
        }
        

        
    }

    

    
}