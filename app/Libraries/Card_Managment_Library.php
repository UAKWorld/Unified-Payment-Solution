<?php
namespace App\Libraries;

use App\Models\Card_Managment_Model;

class Card_Managment_Library
{
    public function __construct()
    {
        $this->card_managment_model = new Card_Managment_Model();
    }

    public function get_card_details()
    {
        $result = $this->card_managment_model->get_card_details();
        if($result === false) {
            log_message('error', __METHOD__.' could not fetch card details');
            return false;
        }
        return $result->getResultArray();
    }

    public function get_card_details_by_ids($card_ids)
    {
        $result = $this->card_managment_model->get_card_details_by_ids($card_ids);
        if($result === false) {
            log_message('error', __METHOD__.' could not fetch card details with ids: '.print_r($card_ids, true));
            return false;
        }
        return $result->getResultArray();
    }

    public function update_card_status($card_id, $new_card_status)
    {
        $result = $this->card_managment_model->update_card_status($card_id, $new_card_status);
        if($result === false) {
            log_message('error', __METHOD__.' could not update card details, card id: '.$card_id.', new card status: '.$new_card_status);
            return false;
        }
        return $result;
    }

    public function completeTransaction($cardId, $balance)
    {
        $result = $this->card_managment_model->completeTransaction($cardId, $balance);
        if($result === false) {
            log_message('error', __METHOD__.' could not perform transaction successfully, card id: '.$cardId.', amount: '.$balance);
            return false;
        }
        return $result;
    }

    public function update_balances($update_info)
    {
        $result = $this->card_managment_model->update_balances($update_info);
        if($result === false) {
            log_message('error', __METHOD__.' could not update card balances, data: '.print_r($update_info, true));
            return false;
        }
        return $result;
    }

}