<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class GuestMenu extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
    	$this->load->database();
    	$this->load->model('user');
    	$data['specialities'] = $this->user->selectSpecs();
        // $data['foodsection'] = $this->user->selectCategory();
    	$this->load->view("header.php");
    	$this->load->view("navbar.php");
    	$this->load->view('guestBodyMenu',$data);
    	// $this->load->view("body.php");
    	$this->load->view("footer.php");
    }

    
}
?>