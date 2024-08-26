<?php namespace App\Models;

use CodeIgniter\Model;

class Card_Managment_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
        $db = db_connect();
        $this->table = $db->table(CARDS);
    }

    public function get_card_details()
    {
        
        $this->table->select('*');
        $result = $this->table->get();
        
        if ($result === false) {
            log_message('error', __METHOD__.' error while fetching card details, last query: '.$this->db->getLastQuery());
            return false;
        }
        return $result;
    }

    public function get_card_details_by_ids($card_ids)
    {
        $db = db_connect();
        $cardIdsStr = implode(',', $card_ids);

        $sql = "SELECT * FROM cards WHERE card_id IN ? ORDER BY FIELD(card_id, ".str_replace("'", '', $cardIdsStr).")";

        $result = $db->query($sql, [$card_ids]);
        if ($result === false) {
            log_message('error', __METHOD__.' error while fetching card details with card ids, last query: '.$this->db->getLastQuery());
            return false;
        }
        return $result;
    }

    public function update_card_status($card_id, $new_card_status)
    {
        
        $this->table->set('card_status', $new_card_status);
        $this->table->where('card_id', $card_id);
        $result = $this->table->update();
        
        if ($result === false) {
            log_message('error', __METHOD__.' error while updating card details, last query: '.$this->db->getLastQuery());
            return false;
        }
        return $result;
    }

    public function completeTransaction($cardId, $balance)
    {
        
        $this->table->set('card_balance', $balance);
        $this->table->where('card_id', $cardId);
        $result = $this->table->update();
        
        if ($result === false) {
            log_message('error', __METHOD__.' error while updating transaction details, last query: '.$this->db->getLastQuery());
            return false;
        }
        return $result;
    }

}
