<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Employee extends CI_Model
{
    
    function addfood_db($options = array())
    {
        $this->db->trans_start();
        
        if (isset($options['name']))
            $this->db->set('name', strip_tags($options['name']));
        
        if (isset($options['price']))
            $this->db->set('price', strip_tags($options['price']));

        if (isset($options['description']))
            $this->db->set('description', strip_tags($options['description']));
        
        $this->db->insert("specialty");
        
        $this->db->trans_complete();
        
    }


    public function selectSpecs()
    {
        $query = $this->db->get('specialty');
        return $query;
    }
    

    function delete_db($foodid)
    {

        $this->db->trans_start();

        $this->db->set('status', 0);
        $this->db->where('specialty_id', $foodid);
        $this->db->update('specialty');

        $this->db->trans_complete();
    }


    public function selectOrders()
    {
        $query = $this->db->select('*');
        $query = $this->db->from('specialty');
        $query = $this->db->join('orders', 'specialty.specialty_id=orders.specialty_id');
        $query = $this->db->join('address', 'address.user_id=orders.user_id'); 
        $query = $this->db->where_not_in('order_status', 'Pending');
        $query = $this->db->get();
        return $query;

    }


    public function getPendingOrders()
    {
        $query = $this->db->select('*');
        $query = $this->db->from('specialty');
        $query = $this->db->join('orders', 'specialty.specialty_id=orders.specialty_id');
        $query = $this->db->join('address', 'address.user_id=orders.user_id'); 
        $query = $this->db->where('order_status', 'Pending');
        $query = $this->db->get();
        return $query;
    }

    public function changeStatus($newstatus, $orderID)
    {
        $this->db->set('order_status', $newstatus);
        $this->db->where('order_id', $orderID);
        $this->db->update('orders');
    }
        
        
        
}
?>

