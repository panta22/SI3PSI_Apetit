<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');



 class UserOrder extends CI_Controller {  

    var $userID = null;
    var $specialty_id = null;
    var $price = null;

    public function __construct(){  
          
          parent::__construct();
          $this->load->model('user','',TRUE);
          $this->load->helper('url');
    }       


    public function index()  
    {  
    
        if ($this->session->userdata('logged_in')) {
            $session_data     = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            if (isset($_POST["foodid"])) {
                $data['foodid'] = $_POST["foodid"];



                
                $data['order'] = $this->user->selectSpec($data['foodid']);
                $data['address'] = $this->user->selectAddr($session_data['id']);


                // $userID = $session_data['id'];
                // $specialty_id = $_POST["foodid"];
                // foreach ($data['order']->result() as $key) {
                //     $price = $key->price;
                // }

                // $userID = $session_data['id'];
                // $GLOBALS['ordSpecId'] = $_POST["foodid"];
                // foreach ($data['order']->result() as $key) {
                //     $GLOBALS['ordPrice'] = $key->price;
                // }


                $this->load->library('form_validation');
                $this->load->helper(array('form')); 
                $this->load->view('header.php');
                $this->load->view('navbar.php', $data);
                $this->load->view('userOrder.php', $data);
                $this->load->view('footer.php');       
            } 
        }  
    }



    public function orderConfirm(){
        $specialty_id = null;
        $session_data = $this->session->userdata('logged_in');

        $userID = $session_data['id'];

        if (isset($_POST["foodid"])) {
            $specialty_id = $_POST["foodid"];
        }


        $order = $this->user->order_db($userID, $specialty_id);
        redirect('userMenu','refesh');
    }


} 
?>  