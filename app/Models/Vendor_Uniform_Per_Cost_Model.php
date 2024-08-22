<?php namespace App\Models;

use CodeIgniter\Model;

class Vendor_Uniform_Per_Cost_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $db = db_connect();
        $this->table = $db->table(VENDOR_UNIFORM_PER_COST_TABLE);
    }

    function get_details($vendor_id)
    {
        $_t = VENDOR_UNIFORM_PER_COST_TABLE;
        $_t1 = UNIFORMS_CUSTOM_SIZES_TABLE;
        $_t2 = UNIFORM_TYPE_TABLE;
        $this->table->select($_t2.'.uniform_type_name');
        $this->table->select($_t.'.*');
        $this->table->select($_t1.'.size_name');
        $this->table->join($_t1,$_t1.'.size_id='.$_t.'.uniform_size_id','left outer');
        $this->table->join($_t2,$_t2.'.uniform_type_id = '.$_t.'.uniform_type_id');
        $this->table->where($_t.'.vendor_id', $vendor_id);
       
        $result = $this->table->get();
        if ($result === false)
        {
            log_message('error', __METHOD__.'error while getting vendor details list with, vendor_id: '.$vendor_id.', last query: '.$this->db->getLastQuery());
            return false;
        }
        return $result;
    }

    function insert_vendor_details($info)
    {
        $result = $this->table->insert($info);
        if ($result === false)
        {
            log_message('error', __METHOD__.'error while trying to insert  details with, info: '.print_r($info, true).', last query: '.$this->db->getLastQuery());
            return false;
        }
        return $result;
    }

    function get_data_by_id($vendor_uniform_cost_id)
    {
        $this->table->where('venodr_uniform_cost_id', $vendor_uniform_cost_id);
        $result = $this->table->get();
        if ($result === false)
        {
            log_message('error', __METHOD__.'error while getting vendor list with,vendor_uniform_cost_id: '.$vendor_uniform_cost_id.', last query: '.$this->db->getLastQuery());
            return false;
        }

        return $result;
    }

    function update_vendor_uniform_cost($vendor_uniform_cost_id, $updated_data)
    {
        $this->table->where('venodr_uniform_cost_id', $vendor_uniform_cost_id);
        $this->table->update($updated_data);

        if($this->db->affectedRows() == 0)
        {
            log_message('error', __METHOD__.'error while trying update vendor uniform cost, vendor_uniform_cost_id: '.$vendor_uniform_cost_id.', updated data: '.print_r($updated_data, true).', last query: '.$this->db->getLastQuery());
            return false;
        }
        return true;
    }

    function delete_vendor_uniform_cost($vendor_uniform_cost_id)
    {
        $this->table->where('venodr_uniform_cost_id', $vendor_uniform_cost_id);
        $query = $this->table->delete();
        if ($query === false)
        {
            log_message('error', __METHOD__.'error while trying to delete with, vendor_uniform_cost_id: '.$vendor_uniform_cost_id.', last query: '.$this->db->getLastQuery());
            return false;
        }
        return $query;
    }

    function get_data_by_type_size($uniform_size_id,$uniform_type_id)
    {
        $_t = VENDOR_UNIFORM_PER_COST_TABLE;
        $_t1 = VENDORS_TABLE;
        $this->table->select($_t1.'.*');
        $this->table->join($_t1,$_t1.'.vendor_id = '.$_t.'.vendor_id');
        $this->table->where($_t.'.uniform_type_id', $uniform_type_id);
        $this->table->where($_t.'.uniform_size_id', $uniform_size_id);
        $result = $this->table->get();
        if ($result === false)
        {
            log_message('error', __METHOD__.'error while getting vendor uniform list with,uniform_size_id: '.$uniform_size_id.',uniform_type_id: '.$uniform_type_id.', last query: '.$this->db->getLastQuery());
            return false;
        }

        return $result;
    }

    function get_vendor_data_by_type_size_vendor($uniform_size_id,$uniform_type_id,$vendor_id)
    {
        $_t = VENDOR_UNIFORM_PER_COST_TABLE;
        $_t1 = VENDORS_TABLE;
        $this->table->select($_t.'.*');
        $this->table->join($_t1,$_t1.'.vendor_id = '.$_t.'.vendor_id');
        $this->table->where($_t.'.uniform_type_id', $uniform_type_id);
        $this->table->where($_t.'.uniform_size_id', $uniform_size_id);
        $this->table->where($_t.'.vendor_id', $vendor_id);
        $result = $this->table->get();
        // var_dump($this->db->getLastQuery());
        // exit();
        if ($result === false)
        {
            log_message('error', __METHOD__.'error while getting vendor uniform list with,uniform_size_id: '.$uniform_size_id.',uniform_type_id: '.$uniform_type_id.', last query: '.$this->db->getLastQuery());
            return false;
        }

        return $result;
    }

  
}