<!-- Autor Dusan Pantic 533/2010 -->

<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class VerifyAddFood extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('employee', '', TRUE);
    }
    
    function index()
    {
        
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
        
        $config['upload_path'] = APPPATH.'../img/demo/food';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_width'] = 300;
        $config['max_height'] = 300;
        $this->load->library('upload', $config);
       

       if ($this->form_validation->run() == FALSE || $this->upload->do_upload('picture') == FALSE) {
            echo "<script>alert('Adding food unsuccessful')</script>";
            redirect('employeeAdd', 'refresh');
            
        } else {
            $added = $this->employee->addfood_db($_POST);
            
            if ($added) {
                 echo "<script>alert('Added sucessfully')</script>";
            } else
                
                $this->load->helper('url');
                redirect('employeeAdd', 'refresh');
        }
        
    }
    
    
}
?>