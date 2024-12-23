<?php
// live
// $token = 'e22964676ce967f85b91e57d12ff94ac2431225763881f80edd7907076a81b0c';
// $environment = 'live';

// Sandbox
$token = '7e9c29759f04cdf775fa9f8778631e6bbb19956c6fa1511d84dafef11e1aa69e';
$environment = 'sandbox';
$CardType = stripslashes(trim($_POST['CardType']));

$CardNumber1 = stripslashes(trim($_POST['CardNumber1']));
$CardNumber2 = stripslashes(trim($_POST['CardNumber2']));
$CardNumber3 = stripslashes(trim($_POST['CardNumber3']));
$CardNumber = $CardNumber1.$CardNumber2.$CardNumber3;

$IndividualReferenceNumber = stripslashes(trim($_POST['IndividualReferenceNumber']));

$FullName1 = stripslashes(trim($_POST['FullName1']));

$CardExpiry2 = stripslashes(trim($_POST['CardExpiry2']));
$CardExpiry3 = stripslashes(trim($_POST['CardExpiry3']));
if($CardType == 'B' || $CardType == 'Y' ){
    $CardExpiry1 = stripslashes(trim($_POST['CardExpiry1']));
    $CardExpiry = $CardExpiry3.'-'.$CardExpiry2.'-'.$CardExpiry1;
}else{
    $CardExpiry = $CardExpiry3.'-'.$CardExpiry2;
}

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://".$environment.".ridx.io/dvs/medicare",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\n\t\"CardExpiry\" : \"".$CardExpiry."\",\n\t\"CardNumber\" : \"".$CardNumber."\",\n\t\"CardType\" : \"".$CardType."\",\n\t\"FullName1\" : \"".$FullName1."\",\n\t\"IndividualReferenceNumber\" : ".$IndividualReferenceNumber."\n}",
  CURLOPT_HTTPHEADER => array(
    "token: ".$token,
    "Content-Type: application/json"
  ),
));

$response = curl_exec($curl);
curl_close($curl);
echo json_encode(json_decode($response));
exit;


