<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class userChangePass extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('user', '', TRUE);
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index()
	{
		if ($this->session->userdata('logged_in')) {
            $session_data     = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];

            $this->load->helper(array('form'));
            $this->load->view('header.php');
            $this->load->view('navbar.php', $data);
            $this->load->view('userProfile', $data);
            $this->load->view('footer.php');
        }
	}

	function verifyChangePass()
	{
		if ((isset($_POST["oldpassword"])) && (isset($_POST["newpassword"]))) {
			$oldpassword = $_POST["oldpassword"];
			$newpassword = $_POST["newpassword"];

			$this->load->helper('url');

			$result = $this->user->changepass_db($oldpassword, $newpassword);

			if ($this->session->userdata('logged_in')) {
            	$session_data     = $this->session->userdata('logged_in');

				if($result)
				{
					switch ($session_data['type']) {
						case 1:
							redirect('userMenu', 'refresh');
							break;
						case 2:
							redirect('employeeMenu', 'refresh');
							break;
						case 3:
							redirect('adminPage', 'refresh');
							break;
					}

				}
				else{
					 //$this->load->helper('form_validation');
					$this->form_validation->set_message('verifyChangePass', 'Invalid password');
					
					redirect('userChangePass', 'refresh');
				}
			}
		}
	}
}

?>