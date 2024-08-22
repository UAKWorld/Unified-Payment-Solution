<?php

namespace App\Controllers;

// use App\Libraries\Card_Managment_Library;

class Card_Managment_Controller extends Default_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->session = \Config\Services::session();
        $this->uri = new \CodeIgniter\HTTP\URI();

        // $this->card_managment_library = new Card_Managment_Library();
    }
    
    public function index()
    {
        $data= array();
        return $this->generateView('content_panel/Cards/homepage', $data);
    }

    public function ajax_success_response($message = SYSTEM_STATUS_MESSAGE_SUCCESS, $response_data = array(), $refresh_page = NO, $redirect_url = null)
    {
        $data['status_code'] = SYSTEM_STATUS_CODE_SUCCESS;
        $data['status_message'] = $this->success_toast_message($message);
        $data['response_data'] = $response_data;
        $data['refresh_page'] = $refresh_page;
        $data['redirect_url'] = $redirect_url;

        echo json_encode($data, JSON_PRETTY_PRINT);
    }

    public function ajax_failure_response($message = SYSTEM_STATUS_MESSAGE_FAILURE, $response_data = array(), $refresh_page = YES, $redirect_url = null)
    {
        $data['status_code'] = SYSTEM_STATUS_CODE_FAILURE;
        $data['status_message'] = $this->failure_toast_message($message);
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
