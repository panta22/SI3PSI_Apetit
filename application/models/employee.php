<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Employee extends CI_Model
{
    // function login_db($username, $password)
    // {
    //     $this->db->select('id, username, password, type');
    //     $this->db->from('users');
    //     $this->db->where('username', $username);
    //     $this->db->where('password', $password);
    //     // $this->db->where('type', $type);
    //     $this->db->limit(1);
        
    //     $query = $this->db->get();
        
    //     if ($query->num_rows() == 1) {
    //         return $query->result();
    //     } else {
    //         return false;
    //     }
    // }
    
    function addfood_db($options = array())
    {
        $this->db->trans_start();
        if (isset($options['category_id']))
            $this->db->set('category_id', strip_tags($options['category_id']));
        
        if (isset($options['name']))
            $this->db->set('name', strip_tags($options['name']));
        
        if (isset($options['price']))
            $this->db->set('price', strip_tags($options['price']));

        if (isset($options['description']))
            $this->db->set('description', strip_tags($options['description']));
        
        $this->db->insert("specialty");
        
        // $userID = $this->db->insert_id();
        
        // if (isset($options['address']))
        //     $this->db->set('address', strip_tags($options['address']));
        
        // if (isset($options['apartment']))
        //     $this->db->set('apartment', strip_tags($options['apartment']));
        
        // if (isset($options['floor']))
        //     $this->db->set('floor', strip_tags($options['floor']));
        
        // if (isset($options['phone']))
        //     $this->db->set('phone', strip_tags($options['phone']));
        
        // if (isset($options['city']))
        //     $this->db->set('city', ($options['city']));
        
        // $this->db->set('user_id', $userID);
        
        // $this->db->insert("address");
        
        // $addressID = $this->db->insert_id();
        
        $this->db->trans_complete();
        
        // if ($userID && $addressID)
        //     return TRUE;
        // else
        //     return FALSE;
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

    function delete_db($foodid)
    {

        $this->db->trans_start();

        $this->db->set('status', 0);
        $this->db->where('specialty_id', $foodid);
        $this->db->update('specialty');





        // if (isset($options['category_id']))
        //     $this->db->set('category_id', strip_tags($options['category_id']));
        
        // // if (isset($options['name']))
        // //     $this->db->set('name', strip_tags($options['name']));
        
        // // if (isset($options['price']))
        // //     $this->db->set('price', strip_tags($options['price']));

        // // if (isset($options['description']))
        // //     $this->db->set('description', strip_tags($options['description']));
        
        // $this->db->insert("specialty");

        $this->db->trans_complete();
    }
        
        
        
}
?>

