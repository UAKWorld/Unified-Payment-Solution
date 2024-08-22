<?php
namespace App\Libraries;
use App\Models\Users_Model;

class User_Library
{
    function __construct()
    {
        $this->users_model = new Users_Model();
    }

    function verify_user_login_by_email($email, $password)
    {
        $result = $this->users_model->user_login($email, $password);
        if($result === EMAIL_NOT_FOUND)
        {
            log_message('debug', __METHOD__.' email not found: '.$email);
            return EMAIL_NOT_FOUND;
        }
        if($result === PASSWORD_INCORRECT)
        {
            log_message('debug', __METHOD__.' password not match: '.$email);
            return PASSWORD_INCORRECT;
        }
        if($result === false)
        {
            log_message('error', __METHOD__.'error while trying to login with, email: '.$email.', password: '.$password);
            return false;
        }

        return $result;
    }
    
     function get_user_details_approver($school_id,$approver_id)
    {
        $result = $this->users_model->get_user_details_approver($school_id,$approver_id);
        if ($result === false) {
            log_message('error', __METHOD__ . ' error while trying to get user list , school_id: ' . $school_id);
            return false;
        }

        return $result->getResultArray();

    }

    function get_user_details_by_email($email)
    {
        $result = $this->users_model->get_users($email);
        if($result === false)
        {
            log_message('error', __METHOD__.'error while trying to get user with, email: '.$email);
            return false;
        }

        return $result;
    }
    function insert_user($user_data)
    {
        $result = $this->users_model->insert_user($user_data);
        if($result === false)
        {
            log_message('error', __METHOD__.' error while trying to insert user , data: '.print_r($user_data, true));
            return false;
        }

        return $result;
    }
    
    function email_check($email)
    {
        $result = $this->users_model->email_check($email);
        if($result === false)
        {
            log_message('error', __METHOD__.' error while trying to insert user  email check, data: '.print_r($email, true));
            return false;
        }

         return $result->getResultArray();
        
    }
    // function delete_user($user_id)
    // {
    //     $update['updated_on'] = get_current_datetime_for_db();
    //     $update['updated_by'] = session()->get('user_id');

    //     $result = $this->users_model->update_user($user_id, $update);
    //     if($result === false)
    //     {
    //         log_message('error', __METHOD__.' error while trying to update user, role id: '.$user_id.', update data: '.print_r($update));
    //         return false;
    //     }

    //     $result = $this->users_model->delete_user($user_id);
    //     if($result === false)
    //     {
    //         log_message('error', __METHOD__.' error while trying to delete user, user id: '.$user_id);
    //         return false;
    //     }

    //     return true;
    // } 

    function get_user_details($school_id)
    {
        $result = $this->users_model->get_user_details_by_school_id($school_id);
        if ($result === false) {
            log_message('error', __METHOD__ . ' error while trying to get user list , school_id: ' . $school_id);
            return false;
        }

        return $result->getResultArray();

    }
     function delete_user($user_id)
    {
        $update['updated_on'] = get_current_datetime_for_db();
        $update['updated_by'] = session()->get('user_id');

        $result = $this->users_model->update_user($user_id, $update);
        if($result === false)
        {
            log_message('error', __METHOD__.' error while trying to update user, user id: '.$user_id.', update data: '.print_r($update));
            return false;
        }

        $result = $this->users_model->delete_user($user_id);
        if($result === false)
        {
            log_message('error', __METHOD__.' error while trying to delete user, user id: '.$user_id);
            return false;
        }

        return true;
    } 
     function get_user_data_user_id($user_id)
    {
        $result = $this->users_model->get_user_data_user_id($user_id);
        if ($result === false) {
            log_message('error', __METHOD__ . ' error while trying to get user list , user_id: ' . $user_id);
            return false;
        
    }
       
        return $result->getRowArray();
       
    }
    function update_user($user_id,$user_data)
	   {
		$result = $this->users_model->update_user_details($user_id, $user_data);
		 if($result === false)
        {
            log_message('error', __METHOD__.' error while trying to update role, role id: '.$role_id);
            return false;
        }

        return true;
		
	}
	
	function update_otp($user_id,$user_data)
	   {
		$result = $this->users_model->update_user($user_id, $user_data);
		 if($result === false)
        {
            log_message('error', __METHOD__.' error while trying to update user, user id: '.$user_id);
            return false;
        }

        return true;
		
	}
	 function get_priciple_by_branch($school_id,$branch_id)
    {
        $result = $this->users_model->get_priciple_by_branch($school_id,$branch_id);
        if ($result === false) {
            log_message('error', __METHOD__ . ' error while trying to get user list , branch_id: ' . $branch_id);
            return false;
        
    }
       
        return $result->getRowArray();
       
    }
}