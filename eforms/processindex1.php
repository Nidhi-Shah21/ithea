<?php

require __DIR__ . '/vendor/autoload.php';
require_once 'includes/email1.php';
require_once 'includes/db.php';
require_once 'includes/config.php';

use Dompdf\Dompdf;
// echo "<pre>";
// print_r($_POST);
// exit;

$db = new DB;
if(isset($_POST) && isset($_POST['fname']) && $_POST['fname'] != '' && isset($_POST['todaydate']) && $_POST['todaydate'] != ''){
    
    $str = serialize($_POST);
    $params = [
        'form_type' => 'eligibility',
        'data' => $str
    ];

    $_sql = "INSERT INTO eforms_data(`form_type`,`data`) VALUES(:form_type,:data)";
    $res = $db->insertData($_sql, $params);
}else{
    header("Location: eligibility-form.php");
    exit;
    die();
}

//Generate PDF;


$highestQualification = isset($_POST['highestQualification']) ? $_POST['highestQualification'] : '-';
$highestQualification2 = isset($_POST['highestQualification2']) ? $_POST['highestQualification2'] : '-';
$section6 = isset($_POST['section6']) ? $_POST['section6'] : '';
$section7 = isset($_POST['section7']) ? $_POST['section7'] : '';
$section8 = isset($_POST['section8']) ? $_POST['section8'] : '';
//$section11 = isset($_POST['section11']) ? $_POST['section11'] : '';
$section11 = 1;
$section12 = isset($_POST['section12']) ? $_POST['section12'] : '';
$section13 = isset($_POST['section13']) ? $_POST['section13'] : '';
$section14 = isset($_POST['section14']) ? $_POST['section14'] : '';
$section15 = isset($_POST['section15']) ? $_POST['section15'] : '';
$section16 = isset($_POST['section16']) ? $_POST['section16'] : '';
$section17 = isset($_POST['section17']) ? $_POST['section17'] : '';
$section18 = isset($_POST['section18']) ? $_POST['section18'] : '';
$section19 = isset($_POST['section19']) ? $_POST['section19'] : '';
$section20 = isset($_POST['section20']) ? $_POST['section20'] : '';
$section21 = isset($_POST['section21']) ? $_POST['section21'] : '';
$section22 = isset($_POST['section22']) ? $_POST['section22'] : '';
$section23 = isset($_POST['section23']) ? $_POST['section23'] : '';
$section24 = isset($_POST['section24']) ? $_POST['section24'] : '';
$section25 = isset($_POST['section25']) ? $_POST['section25'] : '';
$section26 = isset($_POST['section26']) ? $_POST['section26'] : '';
$section27 = isset($_POST['section27']) ? $_POST['section27'] : '';
$section28 = isset($_POST['section28']) ? $_POST['section28'] : '';
$section29 = isset($_POST['section29']) ? $_POST['section29'] : '';
$section30 = isset($_POST['section30']) ? $_POST['section30'] : '';
$section31 = isset($_POST['section31']) ? $_POST['section31'] : '';
$section32 = isset($_POST['section32']) ? $_POST['section32'] : '';
$section33 = isset($_POST['section33']) ? $_POST['section33'] : '';
$section34 = isset($_POST['section34']) ? $_POST['section34'] : '';



$dompdf = new Dompdf();

$a = file_get_contents('rawindex1.html');


// section11 == 0 == Skills Set
// section11 == 1 == Qualification

if($section11 == 0){

    $find = 'section21_'.$section21;
    $replace = ''.$section21;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section21','',$a);

    $find = 'section22_'.$section22;
    $replace = ''.$section22;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section22','',$a);

    $find = '_section23';
    $replace = '';
    if($section23 == 1){
        $replace = '_checked';
    }
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section23_','',$a);

    $find = '_section24';
    $replace = '';
    if($section24 == 1){
        $replace = '_checked';
    }
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section24_','',$a);

    $find = '_section25';
    $replace = '';
    if($section25 == 1){
        $replace = '_checked';
    }
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section25_','',$a);

    if(!isset($_POST['section26']))
        $a = str_replace('section26_','',$a);
    $find = 'section26_'.$section26;
    $replace = '_'.$section26;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section26_','',$a);

    if(!isset($_POST['section27']))
        $a = str_replace('section27_','',$a);
    $find = 'section27_'.$section27;
    $replace = '_'.$section27;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section27_','',$a);

    if(!isset($_POST['section28']))
        $a = str_replace('section28_','',$a);
    $find = 'section28_'.$section28;
    $replace = '_'.$section28;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section28_','',$a);

    if(!isset($_POST['section29']))
        $a = str_replace('section29_','',$a);
    $find = 'section29_'.$section29;
    $replace = '_'.$section29;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section29_','',$a);


    if(!isset($_POST['section30']))
        $a = str_replace('section30_','',$a);
    $find = 'section30_'.$section30;
    $replace = '_'.$section30;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section30_','',$a);

    $find = '_section31';
    $replace = '';
    if($section31 == 1){
        $replace = '_checked';
    }
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section31_','',$a);

    $find = '_section32';
    $replace = '';
    if($section32 == 1){
        $replace = '_checked';
    }
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section32_','',$a);

    $find = '_section33';
    $replace = '';
    if($section33 == 1){
        $replace = '_checked';
    }
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section33_','',$a);

    $find = '_section34';
    $replace = '';
    if($section34 == 1){
        $replace = '_checked';
    }
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section34_','',$a);


    // ------------------------------------------ Section 11 == 1 Starts Here -----------------------------------------------

    $a = str_replace("XX_highestQualification_XX", '_' , $a);
    $a = str_replace("XX_highestQualification2_XX", '_' , $a);
    $a = str_replace('section6','',$a);
    $a = str_replace('section7','',$a);
    $a = str_replace('section8','',$a);
    $a = str_replace('section12_','',$a);
    $a = str_replace('section13_','',$a);
    $a = str_replace('section14_','',$a);
    $a = str_replace('section15_','',$a);
    $a = str_replace('section16_','',$a);
    $a = str_replace('_section17','',$a);
    $a = str_replace('_section18','',$a);
    $a = str_replace('_section19','',$a);
    $a = str_replace('_section20','',$a);


    // ------------------------------------------ Section 11 == 1 Starts Here -----------------------------------------------
}


if($section11 == 1){


    $a = str_replace("XX_highestQualification_XX", $highestQualification , $a);
    $a = str_replace("XX_highestQualification2_XX", $highestQualification2 , $a);

    $find = 'section6_'.$section6;
    $replace = ''.$section6;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section6','',$a);

    $find = 'section7_'.$section7;
    $replace = ''.$section7;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section7','',$a);

    $find = 'section8_'.$section8;
    $replace = ''.$section8;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section8','',$a);



    if(!isset($_POST['section12']))
        $a = str_replace('section12_','',$a);
    $find = 'section12_'.$section12;
    $replace = '_'.$section12;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section12_','',$a);

    if(!isset($_POST['section13']))
        $a = str_replace('section13_','',$a);
    $find = 'section13_'.$section13;
    $replace = '_'.$section13;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section13_','',$a);

    if(!isset($_POST['section14']))
        $a = str_replace('section14_','',$a);
    $find = 'section14_'.$section14;
    $replace = '_'.$section14;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section14_','',$a);

    if(!isset($_POST['section15']))
        $a = str_replace('section15_','',$a);
    $find = 'section15_'.$section15;
    $replace = '_'.$section15;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section15_','',$a);

    if(!isset($_POST['section16']))
        $a = str_replace('section16_','',$a);
    $find = 'section16_'.$section16;
    $replace = '_'.$section16;
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section16_','',$a);

    $find = '_section17';
    $replace = '';
    if($section17 == 1){
        $replace = '_checked';
    }
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section17_','',$a);

    $find = '_section18';
    $replace = '';
    if($section18 == 1){
        $replace = '_checked';
    }
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section18_','',$a);

    $find = '_section19';
    $replace = '';
    if($section19 == 1){
        $replace = '_checked';
    }
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section19_','',$a);

    $find = '_section20';
    $replace = '';
    if($section20 == 1){
        $replace = '_checked';
    }
    $a = str_replace($find, $replace , $a);
    $a = str_replace('section20_','',$a);


// ------------------------------------------ Section 11 == 1 Starts Here -----------------------------------------------

    $a = str_replace('section21','',$a);
    $a = str_replace('section22','',$a);
    $a = str_replace('_section23','',$a);
    $a = str_replace('_section24','',$a);
    $a = str_replace('_section25','',$a);
    $a = str_replace('section26_','',$a);
    $a = str_replace('section27_','',$a);
    $a = str_replace('section28_','',$a);
    $a = str_replace('section29_','',$a);
    $a = str_replace('section30_','',$a);
    $a = str_replace('_section31','',$a);
    $a = str_replace('_section32','',$a);
    $a = str_replace('_section33','',$a);
    $a = str_replace('_section34','',$a);

// ------------------------------------------ Section 11 == 1 Starts Here -----------------------------------------------

}

$a = str_replace("XX_fname_XX", $_POST['fname'] , $a);
$a = str_replace("XX_qualification_XX", $_POST['qualification'] , $a);
$a = str_replace("XX_placeOfResidence_XX", $_POST['placeOfResidence'] , $a);
$a = str_replace("XX_signature_image_XX", $_POST['signature_image'] , $a);
$a = str_replace("XX_todaydate_XX", $_POST['todaydate'] , $a);



$find = 'section9_'.$_POST['section9'];
$replace = '_'.$_POST['section9'];
$a = str_replace($find, $replace , $a);
$a = str_replace('section9_','',$a);

$find = 'section10_'.$_POST['section10'];
$replace = '_'.$_POST['section10'];
$a = str_replace($find, $replace , $a);
$a = str_replace('section10_','',$a);

$dompdf->loadHtml($a);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
//$dompdf->stream();
file_put_contents('index1.pdf', $dompdf->output());


$dompdf0 = new Dompdf();

$CardNumber1 = stripslashes(trim($_POST['CardNumber1']));
$CardNumber2 = stripslashes(trim($_POST['CardNumber2']));
$CardNumber3 = stripslashes(trim($_POST['CardNumber3']));
$CardNumber = $CardNumber1.$CardNumber2.$CardNumber3;
$IndividualReferenceNumber = stripslashes(trim($_POST['IndividualReferenceNumber']));
$FullName1 = stripslashes(trim($_POST['FullName1']));
$CardExpiry2 = stripslashes(trim($_POST['CardExpiry2']));
$CardExpiry3 = stripslashes(trim($_POST['CardExpiry3']));
$CardExpiry = $CardExpiry2.'-'.$CardExpiry3;

$m = file_get_contents('rawindex0.html');
$m = str_replace('xx_CardNumber_xx', $CardNumber , $m);
$m = str_replace('xx_IndividualReferenceNumber_xx', $IndividualReferenceNumber , $m);
$m = str_replace('xx_FullName1_xx', $FullName1 , $m);
$m = str_replace('xx_CardExpiry_xx', $CardExpiry , $m);

$dompdf0->loadHtml($m);
$dompdf0->setPaper('A4', 'portrait');
$dompdf0->render();
file_put_contents('medicarecard.pdf', $dompdf0->output());

// SEnd Mail
$_mail = new SendEmail;
$to = 'info@ithea.edu.au';
$name = 'ITHEA';
$subject = 'Eligibility Alert - "'.$_POST['fname'].'" ("'.$_POST['qualification'].'")';
$html  = 'You have received a PreTraining from the following student<br>';
$html  .= 'Name: '.$_POST['fname'].'<br>';
$html  .= 'Course: '.$_POST['qualification'].'<br>';
$html  .= 'Address: '.$_POST['placeOfResidence'].'<br>';
$mail = $_mail::send_email($name, $to, $subject, $html, '', '' );



if ( $mail ) {
    header("Location: thankyou.html");
}

header("Location: thankyou.html");
exit;

