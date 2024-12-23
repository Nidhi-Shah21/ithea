<?php



require_once 'config.php';

require_once 'PHPMailer.php';



Class SendEmail {

    public static function _init()

    {

        $sysEmail = config('sysEmail');

        $sysCompany = config('sysCompany');

        $mail = new PHPMailer();

        $mail->CharSet = 'UTF-8';

        $mail->SMTPDebug = false;



        //check for smtp

        // if( $e['method'] == 'smtp' ){

            $mail->isSMTP();

            $mail->Host = config('host');

            $mail->SMTPAuth = true;

            $mail->Username = config('username');

            $mail->Password = config('password');

            $mail->SMTPSecure = config('secure');

            $mail->Port = config('port');

        // }

        $mail->SetFrom($sysEmail, $sysCompany);

        return $mail;

    }



    public static function send_email($name,$to,$subject,$message,$cc='',$bcc='',$attachment_path='',$attachment_file='') {

        $mail = self::_init();

        $mail->AddAddress($to, $name);

        // $mail->AddReplyTo($to, $name);



        if($cc != ''){

            $mail->AddAddress($cc);

        }



        if($bcc != ''){

            $mail->AddBCC($bcc);

        }

        $mail->Subject = $subject;

        $mail->MsgHTML($message);

        if( !$mail->Send() ) {

            return false;

            echo '<pre>';

            print_r($mail);

            exit;

        } else {

            return true;

        }

    }

}

