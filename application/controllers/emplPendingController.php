<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// if(! $_SESSION) {
//  session_start(); //we need to call PHP's session object to access it through CI
// }
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
            $this->load->view('employeePending.php',$data); // 
            $this->load->view('footer.php');
        } else {
            //If no session, redirect to login page
            $this->load->helper('url');
            redirect('login', 'refresh');
        }
    }

    function confirm(){
        $newstatus = $this->input->post('order_status');
        $orderID = $this->input->post('order_id');
        $this->employee->changeStatus($newstatus, $orderID);
        //$this->load->helper('url');
        redirect('emplPendingController', 'refresh');

        
    }

    

    
}