<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User extends CI_Model
{
    function login_db($username, $password)
    {
        $this->db->select('id, username, password, type');
        $this->db->from('users');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        // $this->db->where('type', $type);
        $this->db->limit(1);
        
        $query = $this->db->get();
        
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
    
    function register_db($options = array())
    {
        $this->db->trans_start();
        if (isset($options['username']))
            $this->db->set('username', strip_tags($options['username']));
        
        if (isset($options['email']))
            $this->db->set('email', strip_tags($options['email']));
        
        if (isset($options['password']))
            $this->db->set('password', strip_tags($options['password']));
        
        $this->db->insert("users");
        
        $userID = $this->db->insert_id();
        
        if (isset($options['address']))
            $this->db->set('address', strip_tags($options['address']));
        
        if (isset($options['apartment']))
            $this->db->set('apartment', strip_tags($options['apartment']));
        
        if (isset($options['floor']))
            $this->db->set('floor', strip_tags($options['floor']));
        
        if (isset($options['phone']))
            $this->db->set('phone', strip_tags($options['phone']));
        
        if (isset($options['city']))
            $this->db->set('city', ($options['city']));
        
        $this->db->set('user_id', $userID);
        
        $this->db->insert("address");
        
        $addressID = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        if ($userID && $addressID)
            return TRUE;
        else
            return FALSE;
    }


    public function selectSpecs()
    {
        $query = $this->db->get('specialty');
        return $query;
    }

    // public function selectCategory()
    // {
    //     $query = $this->db->get('category_lku');
    //     return $query;
    // }
}
?>

