<?php
namespace App\Controllers;

use App\Libraries\Uri_Actions_Library;
use App\Libraries\Accounting_Period_Library;

class Default_Controller extends BaseController
{
    protected $helpers = [];
    protected $libraries = [];
    
    public function __construct()
    {
        helper(['url', 'form', 'session']);
        $this->session = \Config\Services::session();

        $this->uri_actions_library = new Uri_Actions_Library();
        $this->accounting_period_library = new Accounting_Period_Library();
      

        set_time_limit(0);
        ini_set('memory_limit', '20000M');
    }
   
    public function set_flash_error($message)
    {
        $message = '<div class="alert text-white bg-danger" role="alert">
                              <div class="iq-alert-icon">
                                 <i class="ri-information-line"></i>
                              </div>
                              <div class="iq-alert-text">'.$message.'</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>';

        $this->session->setFlashdata('message', $message);
    }

    public function set_flash_success($message)
    {
        $message = '       <div class="alert alert-success" role="alert">
                              <div class="iq-alert-icon">
                                 <i class="ri-alert-line"></i>
                              </div>
                              <div class="iq-alert-text">'.$message.'</div>
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <i class="ri-close-line"></i>
                              </button>
                           </div>';

        $this->session->setFlashdata('message', $message);
    }

    public function success_toast_message($messsage)
    {
        $message = '    <div style="position: fixed; right: 10px;">
        <div id="alert_toast" class="toast" data-delay="3000">
            <div class="toast-header iq-bg-success">
                <strong class="mr-auto"><i class="fa fa-globe"></i> Alert!</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                '.$messsage.'
            </div>
        </div>
    </div>';

        return $message;
    }

    public function failure_toast_message($messsage)
    {
        $temp_msg ='';
        if (is_array($messsage)) {
            foreach ($messsage as $msg) {
                $temp_msg .= strip_tags($msg).'<br>';
            }
            $messsage = $temp_msg;
        }

        $final_message = '    <div style="position: fixed; right: 10px;">
        <div id="alert_toast" class="toast" data-delay="30000">
            <div class="toast-header iq-bg-danger">
                <strong class="mr-auto"><i class="fa fa-globe"></i> Alert!</strong>
                <small class="text-muted">just now</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
                '.$messsage.'
            </div>
        </div>
    </div>';

        return $final_message;
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


}
