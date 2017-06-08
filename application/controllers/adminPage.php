<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// if(! $_SESSION) {
//  session_start(); //we need to call PHP's session object to access it through CI
// }
class AdminPage extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
        $this->load->model('admin', '', TRUE);
    }
    
    function index()
    {
        
        if ($this->session->userdata('logged_in')) {
            $session_data     = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['users'] = $this->user->selectUsers();

            //$this->load->view('home_view', $data);
            $this->load->database();
            $this->load->model('user');
            //$data['h'] = $this->user->selectSpecs();
            $this->load->view('header.php');
            $this->load->view('navbar.php', $data);
            $this->load->view('adminBody.php', $data); 
            $this->load->view('footer.php');
        } else {
            //If no session, redirect to login page
            $this->load->helper('url');
            redirect('login', 'refresh');
            
        }
    }

    function changeType()
    {
        if(isset($_POST["type"]) && isset($_POST["userid"])){
            $this->admin->changeType($_POST["type"], $_POST["userid"]);
            redirect("adminPage", "refresh");
        }

    }
    
    function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        $this->load->helper('url');
        redirect('guestMenu', 'refresh');
    }
}
