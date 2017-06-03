<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->helper('form');
   $this->load->helper('url');
 }

 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('header.php');
   $this->load->view('navbar.php');
   $this->load->view('login_view');
   $this->load->view('footer.php');
 }

}

?>