<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// if(! $_SESSION) {
//  session_start(); //we need to call PHP's session object to access it through CI
// }
class Home extends CI_Controller
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
            // $this->load->view('home_view', $data);
            $this->load->view('header.php');
            $this->load->view('usernavbar.php', $data);
            $this->load->view('body.php');
            $this->load->view('footer.php');
        } else {
            //If no session, redirect to login page
            $this->load->helper('url');
            redirect('login', 'refresh');
            
        }
    }
    
    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        $this->load->helper('url');
        redirect('home', 'refresh');
    }
    
}

?>