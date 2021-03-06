<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Bon_commande_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_bon_commande by bon_commande_id
     */
    function get_tb_bon_commande($bon_commande_id)
    {
        return $this->db->get_where('tb_bon_commande',array('bon_commande_id'=>$bon_commande_id))->row_array();
    }
    
    /*
     * Get all tb_bon_commande count
     */
    function get_all_tb_bon_commande_count()
    {
        $this->db->from('tb_bon_commande');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all tb_bon_commande
     */
    function get_all_tb_bon_commande($params = array())
    {
        $this->db->order_by('bon_commande_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tb_bon_commande')->result_array();
    }
        
    /*
     * function to add new tb_bon_commande
     */
    function add_tb_bon_commande($params)
    {
        $this->db->insert('tb_bon_commande',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_bon_commande
     */
    function update_tb_bon_commande($bon_commande_id,$params)
    {
        $this->db->where('bon_commande_id',$bon_commande_id);
        return $this->db->update('tb_bon_commande',$params);
    }
    
    /*
     * function to delete tb_bon_commande
     */
    function delete_tb_bon_commande($bon_commande_id)
    {
        return $this->db->delete('tb_bon_commande',array('bon_commande_id'=>$bon_commande_id));
    }
}
