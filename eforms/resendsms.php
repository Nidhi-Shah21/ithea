<?php

session_start();
require_once 'includes/db.php';
$db = new DB;

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "SELECT * FROM `mail_data` WHERE `token1` LIKE '".$id."' OR `token2` LIKE '".$id."' order by `id` desc limit 1";
    $data = $db->getData($sql);
    if(isset($data[0])){

        function sendSMS($content) {
            $ch = curl_init('https://api.smsbroadcast.com.au/api-adv.php');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $output = curl_exec ($ch);
            curl_close ($ch);
            return $output;
        }
        $otp = rand(10001,99999);
        if($id == $data[0]->token1){
            $params = [
                   'phone_otp' => $otp,
                   'id' => $data[0]->id,
                   'phone_otp_expiry' => time()+120
                ];
            $res = $db->updateData('UPDATE `mail_data` SET `phone_otp` = :phone_otp, `phone_otp_expiry` = :phone_otp_expiry where `id` = :id', $params);
        }else{
            $params = [
                   'phone_otp2' => $otp,
                   'id' => $data[0]->id,
                   'phone_otp2_expiry' => time()+120
                ];
            $res = $db->updateData('UPDATE `mail_data` SET `phone_otp2` = :phone_otp2, `phone_otp2_expiry` = :phone_otp2_expiry where `id` = :id', $params);
        }

        $username = 'ithea';
        $password = 'ithea@1234';
        $destination = $data[0]->phone; //Multiple numbers can be entered, separated by a comma
        $source    = 'ITHEA';
        $text = $otp.' is your OTP to access ITHEA Forms. OTP is confidential and valid for 10 minutes. For security reasons, DO NOT share this OTP with anyone.';


        $content =  'username='.rawurlencode($username).
                    '&password='.rawurlencode($password).
                    '&to='.rawurlencode($destination).
                    '&from='.rawurlencode($source).
                    '&message='.rawurlencode($text);
        // $sms_msg = 'Ok.';
        // $smsbroadcast_response = sendSMS($content);
        $_SESSION['otp_resent'] = true;
        echo json_encode(array('status' => true, 'msg' => "Sms resent successfully.!"));
        exit;

    }else{
        echo json_encode(array('status' => true, 'msg' => "Something Went Wrong.!"));
        exit;
    }
}
?>
