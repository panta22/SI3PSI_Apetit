<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
 class register extends CI_Controller {  
      public function __construct(){  
           parent::__construct();
           $this->load->model('user','',TRUE);
           $this->load->helper('url');
      }       
      public function index()  
      {  
      
      $this->load->library('form_validation');
      $this->load->helper(array('form')); 
      $this->load->view('header.php');
      $this->load->view('navbar.php');
      $this->load->view('registration.php');
      $this->load->view('footer.php'); 
      
              
      }  
     
 }  
 ?>  