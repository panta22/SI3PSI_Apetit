<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// if(! $_SESSION) {
//  session_start(); //we need to call PHP's session object to access it through CI
// }
class UserMenu extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        // $this->load->model('user', '', TRUE);
    }
    
    function index()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data     = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            // $data['h'] = $this->user->selectSpecs();

            // $this->load->view('home_view', $data);
            $this->load->database();
            $this->load->model('user');
            $data['h'] = $this->user->selectSpecs();
            $this->load->view('header.php');
            $this->load->view('navbar.php', $data);
            $this->load->view('userBodyMenu.php', $data); 
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
        redirect('guestMenu', 'refresh');
    }

    function contact()
    {
        $this->load->view('header.php');
        $this->load->view('navbar.php');
        $this->load->view('contact.php');
        $this->load->view('footer.php');
    }

    

}


    


?>