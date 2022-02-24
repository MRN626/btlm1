<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Agent_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tb_agent by agent_id
     */
    function get_tb_agent($agent_id)
    {
        return $this->db->get_where('tb_agent',array('agent_id'=>$agent_id))->row_array();
    }
    
    /*
     * Get all tb_agent count
     */
    function get_all_tb_agent_count()
    {
        $this->db->from('tb_agent');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all tb_agent
     */
    function get_all_tb_agent($params = array())
    {
        $this->db->order_by('agent_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tb_agent')->result_array();
    }
        
    /*
     * function to add new tb_agent
     */
    function add_tb_agent($params)
    {
        $this->db->insert('tb_agent',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tb_agent
     */
    function update_tb_agent($agent_id,$params)
    {
        $this->db->where('agent_id',$agent_id);
        return $this->db->update('tb_agent',$params);
    }
    
    /*
     * function to delete tb_agent
     */
    function delete_tb_agent($agent_id)
    {
        return $this->db->delete('tb_agent',array('agent_id'=>$agent_id));
    }
}