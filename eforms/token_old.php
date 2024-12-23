<?php

session_start();
require_once 'includes/db.php';
$db = new DB;


if(!isset($_GET['id']) && ( !isset($_POST['id']) && !isset($_POST['phone_otp']))){
    header("Location: expiredlink.html");
    exit;
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM `mail_data` WHERE `token1` LIKE '".$id."' OR `token2` LIKE '".$id."' order by `id` desc limit 1";
    $data = $db->getData($sql);
    if(!isset($data[0])){
        header("Location: expiredlink.html");
        exit;
    }else{
        function sendSMS($content) {
            $ch = curl_init('https://api.smsbroadcast.com.au/api-adv.php');
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $content);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $output = curl_exec ($ch);
            curl_close ($ch);
            return $output;
        }

        if($id == $data[0]->token1){
            $otp = $data[0]->phone_otp;
            $otp_sent = $data[0]->is_phone_otp_sent;
        }else{
            $otp = $data[0]->phone_otp2;
            $otp_sent = $data[0]->is_phone_otp2_sent;
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
        if($otp_sent == 0){
            // $sms_msg = 'Ok.';
            $smsbroadcast_response = sendSMS($content);
        }
    }
}

if(isset($_POST['id']) && isset($_POST['phone_otp'])){
    $id = $_POST['id'];
    $phone_otp = $_POST['phone_otp'];
    $sql = "SELECT * FROM `mail_data` WHERE `token1` LIKE '".$id."' OR `token2` LIKE '".$id."' order by `id` desc limit 1";
    $data = $db->getData($sql);
    if(isset($data[0])){

        if(($data[0]->token1 == $id && $data[0]->phone_otp != $phone_otp) || ($data[0]->token2 == $id && $data[0]->phone_otp2 != $phone_otp)){
            $_SESSION['invalid_otp'] = true;
            header("Location: token.php?id=".$id);
            exit;
        }

        if($data[0]->token1 == $id){
            $_SESSION['link1'] = true;
            $_SESSION['expiry1'] = $data[0]->link_expiry;
            header("Location: eligibility-form.php");
            exit;
        }

        if($data[0]->token2 == $id){
            $_SESSION['link2'] = true;
            $_SESSION['expiry2'] = $data[0]->link_expiry;
            header("Location: pre-training-form.php");
            exit;
        }

        header("Location: expiredlink.html");
        exit;
    }else{
        header("Location: expiredlink.html");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

    <!-- begin::Head -->
    <head>
        <base href="">
        <meta charset="utf-8" />
        <title>Verification</title>
        <meta name="description" content="ITHEA">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
        <!--end::Fonts -->

        <style>
            * {box-sizing: border-box;}
            #sift-verification { border: 1px solid #ddd; border-top: 10px solid #4d8ff1; display: block; font-family: Poppins, Helvetica, sans-serif; margin: 40px auto; padding-bottom: 40px; width: 70%;}
            #sift-verification img { display: block; max-height: 60px; margin: 10px auto; max-width: 80%;}
            #sift-verification h1 { text-align: center; font-size: 24px; margin: 0;}
            #sift-verification p {font-size: 14px; margin: 10px 0;}
            #sift-verification a { font-size: 14px; color: #646c9a; text-decoration: none; margin: 10px 0;}
            #sift-verification form { padding-top: 25px; position: relative;}
            #sift-verification input,
            #sift-verification button { border: 1px solid #ddd; border-radius: 3px; cursor: pointer; display: block; height: 40px; font-size: 16px; padding: 10px 15px; width: 100%;}
            #sift-verification input { transition: border-color 0.2s;}
            #sift-verification input:hover { border-color: #accbf8;}
            #sift-verification input.error { background-color: #fff4f4; border-color: #cf5766;}
            #sift-verification input.success { background-color: #f7fff8; border-color: #a1d9a7;}
            #sift-verification button { background-color: #4d8ff1; color: #fff; margin-top: 25px; transition: background-color 0.2s;}
            #sift-verification button:hover { background-color: #3580ef;}
            #sift-verification button[disabled] { background-color: #7cadf5; pointer-events: none; transition: none;}
            #sift-verification .form-container { display: block; margin: 40px auto 0; width: 60%;}
            #sift-verification .input-error-message { color: #f33938; font-size: 12px; position: absolute; top: 0;}
            a.disabled {pointer-events: none;cursor: default;}

        </style>
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="">
        <section id="sift-verification">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
          <img src='https://ithea.vic.edu.au/eforms/images/logo.jpg' />
          <div class="form-container">
            <h1>Two Step Authentication</h1>
            <p>Enter verification code sent to you mobile number: <?php echo str_repeat('x', strlen($data[0]->phone) - 2) . substr($data[0]->phone, -2); ?>.</p>
            <form method="post">
                <?php
                    if(isset($_SESSION['invalid_otp']) && $_SESSION['invalid_otp'] == true){
                        echo '<small class="input-error-message">Invalid Code</small>';
                    }
                    unset($_SESSION['invalid_otp']);
                ?>

                <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']?>">
                <input class='input-code' placeholder='Enter the 5-digit code' type='number' name='phone_otp' />
                <button>Verify</button>
            </form>
            <p>If you have not received your code, <a href="javascript:void(0)" id="resendsms">click here to resend</a></p>
          </div>
        </section>
        <!--end::Page Scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
            $(document).on("click", "#resendsms", function(e) {
                e.preventDefault();
                location.reload();
            });

        </script>
    </body>

    <!-- end::Body -->
</html>
