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

     function changepass_db($oldpassword, $newpassword) 
    {   
        if ($this->session->userdata('logged_in')) {
            $session_data = $this->session->userdata('logged_in');
            
            $this->db->select('password');
            $this->db->from('users');
            $this->db->where('password', $oldpassword);
            $this->db->where('id', $session_data['id']);
            // $this->db->where('type', $type);
            $this->db->limit(1);
            
            $query = $this->db->get();
            
            if ($query->num_rows() == 1) {
                $this->db->set('password', $newpassword);
                $this->db->where('id', $session_data['id']);
                $this->db->update('users');
                return true;
            } else {
                return false;
            }


        }
        else{
            return FALSE;
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

    public function selectUsers()
    {
        $query = $this->db->get('users');
        return $query;
    }

    public function selectOrders()
    {
        $query = $this->db->select('*');
        $query = $this->db->from('specialty');
        $query = $this->db->join('orders', 'specialty.specialty_id=orders.specialty_id');
        $query = $this->db->get();
        return $query;
        
    }







    // public function selectCategory()
    // {
    //     $query = $this->db->get('category_lku');
    //     return $query;
    // }
}
?>

