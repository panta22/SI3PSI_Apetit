<!-- Autor Dusan Pantic 533/2010 -->
<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Menu extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
    	$this->load->database();
    	$this->load->model('user');
    	$data['h'] = $this->user->selectSpecs();
        // $data['foodsection'] = $this->user->selectCategory();
    	$this->load->view("header.php");
    	$this->load->view("navbar.php");
    	$this->load->view('bodymenu',$data);
    	// $this->load->view("body.php");
    	$this->load->view("footer.php");
    }

    function login()
    {
        // $this->session->unset_userdata('logged_in');
        // session_destroy();
        $this->load->helper('url');
        redirect('login', 'refresh');
    }
}
?>