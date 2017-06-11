<!-- Autor Dusan Pantic 533/2010 -->

<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class UserMenu extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('user', '', TRUE);
    }
    
    function index()
    {
        if ($this->session->userdata('logged_in')) {
            $session_data     = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            
            $this->load->database();
            $this->load->model('user');
            $data['specialities'] = $this->user->selectSpecs();
            $this->load->view('header.php');
            $this->load->view('navbar.php', $data);
            $this->load->view('userBodyMenu.php', $data); 
            $this->load->view('footer.php');
        } else {
            
            $this->load->helper('url');
            redirect('login', 'refresh');
            
        }
    }

    function getOrders(){
        if ($this->session->userdata('logged_in')) {
            $session_data     = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
           
            $this->load->database();
            $this->load->model('user');
            $data['allOrders'] = $this->user->selectOrders($session_data['id']);
            $this->load->view('header.php');
            $this->load->view('navbar.php', $data);
            $this->load->view('userOrders.php', $data); 
            $this->load->view('footer.php');
        } else {
            
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


}


    


?>