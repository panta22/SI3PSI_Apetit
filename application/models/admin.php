<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends CI_Model
{

	function changeType($type, $userid)
	{
		$this->db->set('type', $type);
        $this->db->where('id', $userid);
        $this->db->update('users');
	}
}