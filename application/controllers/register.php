<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 
 class register extends CI_Controller {  
      public function __construct(){  
           parent::__construct();  
           $this->load->model("user");  
      }       
      public function index()  
      {  
      //$this->insert();
      $this->load->library('form_validation');
      $this->load->helper(array('form')); 
      $this->load->view('header.php');
      $this->load->view('navbar.php');
      $this->load->view('registration.php');
      $this->load->view('footer.php');      
      }  
      public function insert()  
      {  
           $this->form_validation->set_rules('name', 'Name', 'required');  
           $this->form_validation->set_rules('email', 'Email', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required|numeric');  
           //$this->form_validation->set_rules('city','City','required');  
           if ($this->form_validation->run())  
           {       
           $register=$this->register_model->insertdata($_POST);  
           if($register){  
                     echo "<script>alert('added Sucessfully')</script>";  
                }  
           }  
           $data['title']="Registration";  
        $this->load->view('login',$data);       
      }  
 }  
 ?>  