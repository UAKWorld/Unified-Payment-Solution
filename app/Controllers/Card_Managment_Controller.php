<?php

namespace App\Controllers;

use App\Libraries\Card_Managment_Library;

class Card_Managment_Controller extends Default_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->session = \Config\Services::session();
        $this->uri = new \CodeIgniter\HTTP\URI();

        $this->card_managment_library = new Card_Managment_Library();
    }
    
    public function index()
    {
        $data= array();

        $card_details = $this->card_managment_library->get_card_details();
        if($card_details === false) {
            log_message('error', __METHOD__.' could not fetch card details');
            $data['card_details'] = '';
            return $this->generateView('content_panel/Cards/homepage', $data);
        }

        $data['card_details'] = $card_details;

        return $this->generateView('content_panel/Cards/homepage', $data);
    }

    public function memeberships()
    {
        $data= array();
        return $this->generateView('content_panel/Memberships/membershippage', $data);
    }


    public function subscriptions()
    {
        $data= array();
        return $this->generateView('content_panel/Subsciptions/subscriptionpage', $data);
    }

    public function manage_card()
    {
        
        $card_id= $this->request->getPost('cardId');
        $new_card_status= $this->request->getPost('updateValue');

        $update_status = $this->card_managment_library->update_card_status($card_id, $new_card_status);
        if($update_status === false) {
            log_message('error', __METHOD__.' could not update card details, card id: '.$card_id.', new card status: '.$new_card_status);
            $this->ajax_failure_response();
        }

        $this->ajax_success_response();
        return;
    }

    public function start_under_price_transaction()
    {
         
        $currentBalance= $this->request->getPost('currentBalance');
        $randomPrice= $this->request->getPost('generateRandomPrice');
        $balance = bcsub($currentBalance, $randomPrice);
        $cardId = $this->request->getPost('cardId');
        
        $transaction_details[$cardId]['balance']= $balance;
        $transaction_details[$cardId]['cardId']= $this->request->getPost('cardId');


        $transaction_result= $this->completeTransaction($transaction_details);

        if(!$transaction_result) {
            $this->ajax_failure_response();
            return;
        }

        $response_data['randomPrice'] = $randomPrice;

        $this->ajax_success_response('', $response_data);
        return;
    }

    public function manage_other_card_transactions()
    {
        $price_to_be_paid= $this->request->getPost('failedTranscationPrice');

        $card_details = $this->card_managment_library->get_card_details_by_ids($_POST['cards']);
        if($card_details === false || empty($card_details)) {
            log_message('error', __METHOD__.' could not fetch card details with ids: '.print_r($_POST['cards'], true));
            $this->ajax_failure_response();
            return;
        }
        $transaction_details = [];

        foreach($card_details as $det) {

            if($price_to_be_paid > $det['card_balance']) {
                $price_to_be_paid = bcsub($price_to_be_paid, $det['card_balance']);
                $card_new_balance= 0;
            } else {
                $card_new_balance = bcsub($det['card_balance'], $price_to_be_paid);
                $price_to_be_paid = 0;
            }
            

            $transaction_details[$det['card_id']]['balance']= $card_new_balance;
            $transaction_details[$det['card_id']]['cardId']= $det['card_id'];

            if($price_to_be_paid == 0) {
                break;
            }
        }
      
        if($price_to_be_paid != 0) {
            $info['status_code'] = 500;
            $info['message'] = 'transactionFailed';
            echo json_encode($info, JSON_PRETTY_PRINT);
            return;
        }

        // update the new prices and card details
        $update_details= $this->completeTransaction($transaction_details);
        if($update_details == false) {
            $info['status_code'] = 500;
            $info['message'] = 'error';
            echo json_encode($info, JSON_PRETTY_PRINT);
            return;
        }
        
        $this->ajax_success_response('');
        return;
    }

    private function completeTransaction($transaction_details)
    {
        foreach($transaction_details as $details) {
            $result= $this->card_managment_library->completeTransaction($details['cardId'], $details['balance']);
            if($result === false) {
                log_message('error', __METHOD__.' could not perform transaction successfully, card id: '.$details['cardId'].', amount: '.$details['balance']);
                return false;
            }
        }

        return true;
        
    }

    public function reset_balances()
    {
        $update_info = [
            [
                'card_id'  => 1,
                'card_balance' => 500,
            ],
            [
                'card_id'  => 2,
                'card_balance' => 900,
            ],
            [
                'card_id'  => 3,
                'card_balance' => 300,
            ],
            [
                'card_id'  => 4,
                'card_balance' => 999,
            ],
           
        ];
        
        $result = $this->card_managment_library->update_balances($update_info);
        
        if($result === false) {
            log_message('error', __METHOD__.' could not update card balances, data: '.print_r($update_info, true));
            $this->session->setFlashdata('message', 'failed');
            return redirect()->to('/');
        }
        $this->session->setFlashdata('message', 'success');
        return redirect()->to('/');
    }

    public function ajax_success_response($message = '', $response_data = array(), $refresh_page = 'No', $redirect_url = null)
    {
        $data['status_code'] = 200;
        $data['response_data'] = $response_data;
        $data['refresh_page'] = $refresh_page;
        $data['redirect_url'] = $redirect_url;

        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    public function ajax_failure_response($message = '', $response_data = array(), $refresh_page = 'Yes', $redirect_url = null)
    {
        $data['status_code'] = 500;
        $data['response_data'] = $response_data;
        $data['refresh_page'] = $refresh_page;
        $data['redirect_url'] = $redirect_url;

        echo json_encode($data, JSON_PRETTY_PRINT);
        return;
    }

    public function generateView($page, &$data, $include_navbar = true)
    {
        $data['header'] = 'header/header.php';

        if ($include_navbar) {
            $data['top_navi'] = 'nav/topnav.php';
            $data['sidebar'] = 'nav/sidenav.php';
        }

        $data['content'] = $page.'.php';
        $data['footer'] = 'footer/footer.php';
        $data['session'] = $this->session;
        return view('home', $data);
    }

}
