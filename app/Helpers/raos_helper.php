<?php

function get_current_datetime_for_db()
{
    return date('Y-m-d H:i:s');
}

// Below method will encode the values.
function raos_encode($str)
{
    return strtr(base64_encode(addslashes(gzcompress(serialize($str),9))), '+/=', '-_~');
}

// Below method will decode the encoded values which was encoded by "itek_encode" method.
function raos_decode($encoded_str)
{
    return unserialize(gzuncompress(stripslashes(base64_decode(strtr($encoded_str, '-_~', '+/=')))));
}

function get_decoded_value($encoded_str)
{
    if ($encoded_str == -1 || empty($encoded_str))
    {
        return false;
    }
    $decoded_str = raos_decode($encoded_str);
    if (empty($decoded_str))
    {
        return false;
    }

    return $decoded_str;
}

function compare_dates_yyyymmdd($date_a, $date_b)
{
    $millis_a = strtotime($date_a);
    $millis_b = strtotime($date_b);
    $comparision = $millis_a - $millis_b;
    return $comparision;
}

function add_days($date, $days)
{
    $time = strtotime($date);
    $time = $time + (86400*$days);
    $new_date = date('Y-m-d',$time);
    return $new_date;
}

function convert_to_user_date($date)
{
    $time = strtotime($date);
    $new_date = date('d M Y',$time);
    return $new_date;
}

function convert_to_system_date($date)
{
    $time = strtotime($date);
    $new_date = date('Y-m-d',$time);
    return $new_date;
}

function get_months_of_year()
{
    return array("1"=>"January","2"=>"February","3"=>"March","4"=>"April","5"=>"May","6"=>"June","7"=>"July","8"=>"August","9"=>"September","10"=>"October","11"=>"November","12"=>"December");
}

function standard_classes()
{
   return array("-1"=>"General","1"=>"NURSERY","2"=>"LKG","3"=>"UKG","4"=>"Class 1","5"=>"Class 2","6"=>"Class 3","7"=>"Class 4","8"=>"Class 5","9"=>"Class 6","10"=>"Class 7","11"=>"Class 8","12"=>"Class 9","13"=>"Class 10");
}

function get_payment_options()
{
    return array(PAYMENT_OPTIONS_CASH =>ucfirst(PAYMENT_OPTIONS_CASH), PAYMENT_OPTIONS_CHEQUE=>ucfirst(PAYMENT_OPTIONS_CHEQUE), PAYMENT_OPTIONS_BANK=>ucfirst(PAYMENT_OPTIONS_BANK),PAYMENT_OPTIONS_PARENT_DEPOSIT=>ucfirst(str_replace('_',' ',PAYMENT_OPTIONS_PARENT_DEPOSIT)), "swipe"=>PAYMENT_OPTIONS_SWIPE,
    PAYMENT_PHONE_PAY =>ucfirst(str_replace('_',' ',PAYMENT_PHONE_PAY)));
}  

function get_rent_payment_options()
{
    return array(PAYMENT_OPTIONS_CASH =>ucfirst(PAYMENT_OPTIONS_CASH), PAYMENT_OPTIONS_BANK=>ucfirst(PAYMENT_OPTIONS_BANK));
}

function generate_receipt()
{
    return rand(1000,9999);
}

function genders()
{
   return array("1"=>"Unisex","2"=>"Boys","3"=>"Girls"); 
}

// function uniform_type()
// {
//   return array("1"=>"Meroon Shirts","2"=>"Meroon Nickers","3"=>"Meroon Skirts","4"=>"Meroon Pants","5"=>"Cream Socks","6"=>"T Shirts","7"=>"White Socks","8"=>"Meroon Belt",
//   "9"=>"Meroon Tie","10"=>"Brown Girls Shirts","11"=>"Brown Boys Shirts","12"=>"Brown Nickers","13"=>"Brown Pants","14"=>"Brown Penofers","15"=>"Brown Socks","16"=>"Brown Tie",
//   "17"=>"Brown Belt","18"=>"Yellow Girls Shirts","19"=>"Yellow Boys Shirts","20"=>"Blue Nickers","21"=>"Blue Pants","22"=>"Blue Penofers","23"=>"Blue Socks","24"=>"SRD Tie",
//   "25"=>"SRD Belt","26"=>"White Skirts","27"=>"White Nickers","28"=>"White Pants","29"=>"Lowers","30"=>"Yellow T Shirts","31"=>"Belton Black Shoe","32"=>"JDM nickers",
//   "33"=>"JDM skirts","34"=>"JDM shirts","35"=>"JDM pants","36"=>"JDM pre nickers","37"=>"JDM pre skirts","38"=>"JDM pre shirts","39"=>"blazers","40"=>"Belt"
//   ); 
// }

function uniform_type()
{
    
      $db  = \Config\Database::connect();

    $builder = $db->table('uniform_type');
   
    $output = $builder->get();
    $uniform_types=$output->getResultArray();
    $data= array();
     $i=1;foreach($uniform_types as $uniform)
      {
      $data[$i++] = $uniform['uniform_type_name'];   
      } 

     return $data;
}

function get_otp_status_options()
{
    return array(OTP_APPROVED =>OTP_APPROVED, OTP_PENDING => OTP_PENDING, OTP_REJECTED =>OTP_REJECTED);
}

function getGUID(){
    // if (function_exists('com_create_guid')){
    //     return str_replace(array('{','}'),array('',''),com_create_guid());
    // }else{
    //     mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
    //     $charid = strtoupper(md5(uniqid(rand(), true)));
    //     $hyphen = chr(45);// "-"
    //     $uuid = substr($charid, 0, 8).$hyphen
    //         .substr($charid, 8, 4).$hyphen
    //         .substr($charid,12, 4).$hyphen
    //         .substr($charid,16, 4).$hyphen
    //         .substr($charid,20,12);
    //     return $uuid;
    // }
    
    
    return sprintf(
			'%04X%04X-%04X-%04X-%04X-%04X%04X%04X',
			mt_rand(0, 65535),
			mt_rand(0, 65535),
			mt_rand(0, 65535),
			mt_rand(16384, 20479),
			mt_rand(32768, 49151),
			mt_rand(0, 65535),
			mt_rand(0, 65535),
			mt_rand(0, 65535)
		);
}

// function convertNumberToWord($num = false)
// {
//     $num = str_replace(array(',', ' '), '' , trim($num));
//     if(! $num) {
//         return false;
//     }
//     $num = (int) $num;
//     $words = array();
//     $list1 = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven',
//         'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'
//     );
//     $list2 = array('', 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety', 'hundred');
//     $list3 = array('', 'thousand', 'million', 'billion', 'trillion', 'quadrillion', 'quintillion', 'sextillion', 'septillion',
//         'octillion', 'nonillion', 'decillion', 'undecillion', 'duodecillion', 'tredecillion', 'quattuordecillion',
//         'quindecillion', 'sexdecillion', 'septendecillion', 'octodecillion', 'novemdecillion', 'vigintillion'
//     );
//     $num_length = strlen($num);
//     $levels = (int) (($num_length + 2) / 3);
//     $max_length = $levels * 3;
//     $num = substr('00' . $num, -$max_length);
//     $num_levels = str_split($num, 3);
//     for ($i = 0; $i < count($num_levels); $i++) {
//         $levels--;
//         $hundreds = (int) ($num_levels[$i] / 100);
//         $hundreds = ($hundreds ? ' ' . $list1[$hundreds] . ' hundred' . ' ' : '');
//         $tens = (int) ($num_levels[$i] % 100);
//         $singles = '';
//         if ( $tens < 20 ) {
//             $tens = ($tens ? ' ' . $list1[$tens] . ' ' : '' );
//         } else {
//             $tens = (int)($tens / 10);
//             $tens = ' ' . $list2[$tens] . ' ';
//             $singles = (int) ($num_levels[$i] % 10);
//             $singles = ' ' . $list1[$singles] . ' ';
//         }
//         $words[] = $hundreds . $tens . $singles . ( ( $levels && ( int ) ( $num_levels[$i] ) ) ? ' ' . $list3[$levels] . ' ' : '' );
//     } //end for loop
//     $commas = count($words);
//     if ($commas > 1) {
//         $commas = $commas - 1;
//     }
//     return implode(' ', $words);
// }
function convertNumberToWord($amount)
{
   $amount_after_decimal = round($amount - ($num = floor($amount)), 2) * 100;
   // Check if there is any number after decimal
   $amt_hundred = null;
   $count_length = strlen($num);
   $x = 0;
   $string = array();
   $change_words = array(0 => '', 1 => 'One', 2 => 'Two',
     3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
     7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
     10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
     13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
     16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
     19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
     40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
     70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
    $here_digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
    while( $x < $count_length ) {
      $get_divider = ($x == 2) ? 10 : 100;
      $amount = floor($num % $get_divider);
      $num = floor($num / $get_divider);
      $x += $get_divider == 10 ? 1 : 2;
      if ($amount) {
       $add_plural = (($counter = count($string)) && $amount > 9) ? 's' : null;
       $amt_hundred = ($counter == 1 && $string[0]) ? ' and ' : null;
       $string [] = ($amount < 21) ? $change_words[$amount].' '. $here_digits[$counter]. $add_plural.' 
       '.$amt_hundred:$change_words[floor($amount / 10) * 10].' '.$change_words[$amount % 10]. ' 
       '.$here_digits[$counter].$add_plural.' '.$amt_hundred;
        }
   else $string[] = null;
   }
   $implode_to_Rupees = implode('', array_reverse($string));
   $get_paise = ($amount_after_decimal > 0) ? "And" . ($change_words[$amount_after_decimal / 10] . " 
   " . $change_words[$amount_after_decimal % 10]) . ' Paise' : '';
   return ($implode_to_Rupees ? $implode_to_Rupees . '' : '') . $get_paise;
}
function str_padding($n)
{
    
$n2 = str_pad($n, 5, 0, STR_PAD_LEFT);
return $n2;
    
}
function branch_str_padding($n)
{
    
    $n2 = str_pad($n, 3, 0, STR_PAD_LEFT);
    return $n2;
    
}

function year_difference($date, $compare_date = NULL)
{
    if (empty($compare_date))
    {
        $compare_date = date('Y-m-d');
    }

    $diff = abs(strtotime($compare_date) - strtotime($date));

    $years = floor($diff / (365*60*60*24));

    return $years;
}

function get_attendance_type_list()
{
    return array(STAFF_ATTENDANCE_TYPE_PRESENT, STAFF_ATTENDANCE_TYPE_ABSENT, STAFF_ATTENDANCE_TYPE_LEAVE, STAFF_ATTENDANCE_TYPE_LATE, STAFF_ATTENDANCE_TYPE_HALF, STAFF_ATTENDANCE_TYPE_PERMISSION);
}

function get_expense_type_list()
{
    return array(FINANCE_EXPENSE_TYPE_ADVANCE, FINANCE_EXPENSE_TYPE_CASH, FINANCE_EXPENSE_TYPE_SALARY,'Vendors');
}

function get_payment_type_list()
{
    return array(PAYMENT_TYPE_FEE, PAYMENT_TYPE_TRANSPOSRT, PAYMENT_TYPE_HOSTEL, PAYMENT_TYPE_OTHER);
}

function get_month_names_by_dates($start_date,$end_date)
{
    $period = new DatePeriod(
        new DateTime($start_date),
        DateInterval::createFromDateString('1 month'),
        new DateTime($end_date)
    );
 
    foreach ($period as $month) {
        //$months[]= strftime('%b', $month->format('U'));
        $index = (int)date('m', $month->format('U'));
        $months[$index]= date('M', $month->format('U'));
    }
    return $months;
    
}

function getDatesFromRange($start, $end, $format = 'Y-m-d') {
      
    // Declare an empty array
    $array = array();
      
    // Variable that store the date interval
    // of period 1 day
    $interval = new DateInterval('P1D');
  
    $realEnd = new DateTime($end);
    $realEnd->add($interval);
  
    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);
  
    // Use loop to store date into array
    foreach($period as $date) {                 
        $array[] = $date->format($format); 
    }
  
    // Return the array elements
    return $array;
}

function get_sms_template_id($template)
{
    $sms_template_list = array('fee_collection_id' => 1707162347504690692,'absent_id' => 1707164058016556644,'admission_id'=> 1707162306414375490,'marks_id'=>1707166972033159040,'credential_id' =>1707171238007439903);

    return isset($sms_template_list[$template]) ? $sms_template_list[$template] : '';
}


function get_hr_mins_from_time($t)
{
	$mins = $t % 60;
	$hrs = ($t - $mins)/60;
	if ($hrs < 10)
	{
		$hrs = '0'.$hrs;
	}
	if($mins == 0)
	{
		$mins = '00';
	}
	if($mins>0 && $mins<10)
	{
		$mins = '0'.$mins;
	}
  
	 $str= $hrs.":".$mins.":".'00';

    // Get Hours
    $h1 = $str[0] - '0';
    $h2 = $str[1] - '0';
 
    $hh = $h1 * 10 + $h2;
 
    // Finding out the Meridien
    // of time ie. AM or PM
    $Meridien;
    if ($hh < 12)
    {
        $Meridien = "AM";
    }
    else
    {
        $Meridien = "PM";
    }    
 
    $hh %= 12;

    $my_hours= '';
    $my_minutes = '';
    $my_time = '';

    // Handle 00 and 12
    // case separately
    if ($hh == 0)
    {
        $my_time.="12";
        // Printing minutes and seconds
        for ($i = 2; $i < 8; ++$i)
        {
            $my_time.=$str[$i];
        }
    }
    else
    {
        $my_time.= $hh;

        // Printing minutes and seconds
        for ($i = 2; $i < 8; ++$i)
        {
            $my_time.= $str[$i];
        }
    }

   $my_time.=" ".$Meridien;

  return $my_time; 
 
}

function get_hr_mins_from_time_without_meridian($t)
{
	$mins = $t % 60;
	$hrs = ($t - $mins)/60;
	if ($hrs < 10)
	{
		$hrs = '0'.$hrs;
	}
	if($mins == 0)
	{
		$mins = '00';
	}
	if($mins>0 && $mins<10)
	{
		$mins = '0'.$mins;
	}
  
	 return $hrs.":".$mins;

}
function tc_status()
{
    return array("1"=>"Given","2"=>"Applied not given","3"=>"Didn't applay");
}
function left_to_graph()
{
    return array("1"=>"Transfered/House Shifted","2"=>"Joined Other School","3"=>"Dilema","4"=>"Govt School","5"=>"Other Branch");
}


function loop_through_week_days()
{
    return array('0'=>'Sunday','1'=>'Monday','2'=>'Tuesday','3'=>'Wednesday','4'=>'Thursday','5'=>'Friday','6'=>'Saturday');

}

function convert_to_latitude_from_DDMM($deg_data)
{
    $deg = substr($deg_data, 0, 2);
    $minutes = substr($deg_data, 2, 9);

    $minutes = bcdiv($minutes, 60,6);
    $value =  (bcadd($deg, $minutes, 6));
    
    // $value1 = $deg_data * 10000;
    // $value = $value1 % 10000;    
    // $value1 = $value1 / 10000;
    // $degree = $value1 / 100;
    // $minutes = ($value1 % 100) + ($value / 10000);
    // $cordinates = ($degree) + ($minutes / 60);
    
    // $value1 = $deg_data * 10000;
    // $value = $value1 % 10000;    
    // $value1 = $value1 / 10000;
    // $degree = round($value1 / 100);
    // $minutes = ($value1 % 100) + ($value / 10000);
    // $cordinates = ($degree) + ($minutes / 60);
    
    return $value;
    
}

function convert_to_longitude_from_DDDMM($deg_data)
{
    $deg = substr($deg_data, 0, 3);
    $min = substr($deg_data, 3, 10);

    $min = bcdiv($min, 60,6);
    $value =  (bcadd($deg, $min, 6));
    
    // $value1 = $deg_data * 10000;
    // $value = $value1 % 10000;    
    // $value1 = $value1 / 10000;
    // $degree = $value1 / 100;
    // $minutes = ($value1 % 100) + ($value / 10000);
    // $cordinates = ($degree) + ($minutes / 60);
   
    // $value1 = $deg_data * 10000;
    // $value = $value1 % 10000;    
    // $value1 = $value1 / 10000;
    // $degree = round($value1 / 100) ;
    // $minutes = ($value1 % 100) + ($value / 10000);
    // $cordinates = ($degree) + ($minutes / 60);
    
  return $value;
  
}

function convert_to_datetime($ddmmyy, $hhmmss, $zone = 'UTC')
{
    $day = substr($ddmmyy, 0, 2);
    $month = substr($ddmmyy, 2, 2);
    $year = substr($ddmmyy, 4, 2);

    $hour = substr($hhmmss, 0, 2);
    $minutes = substr($hhmmss, 2, 2);
    $seconds = substr($hhmmss, 4, 2);

    $final_datetime = date('Y-m-d H:i:s', strtotime($year.'-'.$month.'-'.$day.' '.$hour.':'.$minutes.':'.$seconds));
    
    if($zone == 'IST')
    {
            $final_datetime = date('Y-m-d H:i:s', strtotime($final_datetime.' +330 minutes'));
    }
    return $final_datetime;
}

function extract_sensor_data($raw_sensor_data)
{
    $raw_sensor_data = str_replace('{','',$raw_sensor_data);
    $raw_sensor_data = str_replace('}','',$raw_sensor_data);

    $data = explode(';', $raw_sensor_data);

    $sensor_data = array();
    foreach ($data as $sList)
    {
        $temp = explode(':', $sList);

        if (!empty($temp[0]))
        {
            $sensor_data[$temp[0]] = $temp[1];
        }
    }

    return $sensor_data;
}

function AmountInWords($amount)
{
   $amount_after_decimal = round($amount - ($num = floor($amount)), 2) * 100;
   // Check if there is any number after decimal
   $amt_hundred = null;
   $count_length = strlen($num);
   $x = 0;
   $string = array();
   $change_words = array(0 => '', 1 => 'One', 2 => 'Two',
     3 => 'Three', 4 => 'Four', 5 => 'Five', 6 => 'Six',
     7 => 'Seven', 8 => 'Eight', 9 => 'Nine',
     10 => 'Ten', 11 => 'Eleven', 12 => 'Twelve',
     13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
     16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen',
     19 => 'Nineteen', 20 => 'Twenty', 30 => 'Thirty',
     40 => 'Forty', 50 => 'Fifty', 60 => 'Sixty',
     70 => 'Seventy', 80 => 'Eighty', 90 => 'Ninety');
    $here_digits = array('', 'Hundred','Thousand','Lakh', 'Crore');
    while( $x < $count_length ) {
      $get_divider = ($x == 2) ? 10 : 100;
      $amount = floor($num % $get_divider);
      $num = floor($num / $get_divider);
      $x += $get_divider == 10 ? 1 : 2;
      if ($amount) {
       $add_plural = (($counter = count($string)) && $amount > 9) ? 's' : null;
       $amt_hundred = ($counter == 1 && $string[0]) ? ' and ' : null;
       $string [] = ($amount < 21) ? $change_words[$amount].' '. $here_digits[$counter]. $add_plural.' 
       '.$amt_hundred:$change_words[floor($amount / 10) * 10].' '.$change_words[$amount % 10]. ' 
       '.$here_digits[$counter].$add_plural.' '.$amt_hundred;
        }
   else $string[] = null;
   }
   $implode_to_Rupees = implode('', array_reverse($string));
   $get_paise = ($amount_after_decimal > 0) ? "And" . ($change_words[$amount_after_decimal / 10] . " 
   " . $change_words[$amount_after_decimal % 10]) . ' Paise' : '';
   return ($implode_to_Rupees ? $implode_to_Rupees . '' : '') . $get_paise;
}


function loop_through_working_days()
{
    return array('1'=>'Monday','2'=>'Tuesday','3'=>'Wednesday','4'=>'Thursday','5'=>'Friday','6'=>'Saturday');

}

function is_in_between($t1, $t2, $t3)
{
    if($t3 <= $t1 && $t3 >= $t2)
    {
        return true;
    }
    else
    {
        return false;
    }
}