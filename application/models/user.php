<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id, username, password');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', $password);
   $this -> db -> limit(1);
 
   $query = $this -> db -> get();
 
   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }

 function insertdata($options = array()){  
           if(isset($options['name']))  
                $this->db->set('name',strip_tags($options['name']));  
                if(isset($options['email']))  
                $this->db->set('email',strip_tags($options['email']));  
           if(isset($options['password']))  
                $this->db->set('password',strip_tags($options['password']));  
          //  if(isset($options['city']))  
          //       $this->db->set('city',($options['city']));  
          //       $this->db->insert("clist");  
           return $this->db->insert_id();  
      }  
}
?>