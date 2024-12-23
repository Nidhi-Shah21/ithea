<?php

date_default_timezone_set("Australia/Melbourne");

session_start();

// local

// const URL = "http://localhost/ithea/token?id=";



// test

const URL = "https://ithea.vic.edu.au/eforms/token.php?id=";



// live

// const URL = "https://ithea.vic.edu.au/eforms/token.php?id=";



if(isset($_SESSION['is_admin']) && !$_SESSION['is_admin']){

    echo json_encode(array('status' => false, 'msg' => "Unauthorized..!"));

    exit;

}



require_once '../includes/email.php';

require_once '../includes/db.php';







if(isset($_GET['id'])){

    $id = $_GET['id'];

}



$db = new DB;



$sql = 'SELECT * FROM `mail_data` WHERE id='.$id;

$data = $db->getData($sql);

$email = $data[0]->email;

$name = $data[0]->name;

$link1 = $data[0]->link1;

$token2 = $data[0]->token2;

$link2 = $data[0]->link2;

$token2 = $data[0]->token2;

$link3 = $data[0]->link3;

$token3 = $data[0]->token3;

$link_expiry = $data[0]->link_expiry;





$date = date('Y-m-d H:i:s');

$token1 = isset($link1) && $link1 == 'Yes'  ? md5(uniqid(rand(), true)) : null;

$token2 = isset($link2) && $link2 == 'Yes'  ? md5(uniqid(rand(), true)) : null;

$token3 = isset($link3) && $link3 == 'Yes'  ? md5(uniqid(rand(), true)) : null;

$params = [

   'email' => $email,

   'name' => $name,

   'link1' => isset($link1) && $link1 == 'Yes'  ? 'Yes' : 'No',

   'token1' => isset($link1) && $link1 == 'Yes'  ? $token1 : null,

   'link2' => isset($link2) && $link2 == 'Yes'  ? 'Yes' : 'No',

   'token2' => isset($link2) && $link2 == 'Yes'  ? $token2 : null,
   
   'link3' => isset($link3) && $link3 == 'Yes'  ? 'Yes' : 'No',

   'token3' => isset($link3) && $link3 == 'Yes'  ? $token3 : null,

   'link_expiry' => date('Y-m-d H:i:s', strtotime('+1 day')),

   'id' => $id

];



$res = $db->updateData('UPDATE `mail_data` SET `email` = :email, `name` = :name, `link1` = :link1, `token1` = :token1, `link2` = :link2, `token2` = :token2, `link3` = :link3, `token3` = :token3, `link_expiry` = :link_expiry where `id` = :id', $params);





$to = $email;

$name = $name;

$_mail = new SendEmail;

$subject = 'ITHEA FORM LINK';







if(isset($link1) && $link1 == 'Yes'){

    $url1 = URL.$token1;

}



if(isset($link2) && $link2 == 'Yes'){

    $url2 = URL.$token2;

}

if(isset($link3) && $link3 == 'Yes'){

    $url3 = URL.$token3;

}







$html  ='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';

$html  .='<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">';

$html  .='<head>';

$html  .='<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->';

$html  .='<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>';

$html  .='<meta content="width=device-width" name="viewport"/>';

$html  .='<!--[if !mso]><!-->';

$html  .='<meta content="IE=edge" http-equiv="X-UA-Compatible"/>';

$html  .='<!--<![endif]-->';

$html  .='<title></title>';

$html  .='<!--[if !mso]><!-->';

$html  .='<!--<![endif]-->';

$html  .='<style type="text/css">body {margin: 0;padding: 0;}table,td,tr { vertical-align: top; border-collapse: collapse;}* { line-height: inherit;}a[x-apple-data-detectors=true] {color: inherit !important;text-decoration: none !important;}</style>';

$html  .='<style id="media-query" type="text/css">@media (max-width: 660px) {.block-grid,.col {min-width: 320px !important;max-width: 100% !important;display: block !important;}.block-grid {width: 100% !important;}.col {width: 100% !important;}.col_cont {margin: 0 auto;}img.fullwidth,img.fullwidthOnMobile {max-width: 100% !important;}.no-stack .col {min-width: 0 !important;display: table-cell !important;}.no-stack.two-up .col {width: 50% !important;}.no-stack .col.num2 {width: 16.6% !important;}.no-stack .col.num3 {width: 25% !important;}.no-stack .col.num4 {width: 33% !important;}.no-stack .col.num5 {width: 41.6% !important;}.no-stack .col.num6 {width: 50% !important;}.no-stack .col.num7 {width: 58.3% !important;}.no-stack .col.num8 {width: 66.6% !important;}.no-stack .col.num9 {width: 75% !important;}.no-stack .col.num10 {width: 83.3% !important;}.video-block {max-width: none !important;}.mobile_hide {min-height: 0px;max-height: 0px;max-width: 0px;display: none;overflow: hidden;font-size: 0px;}.desktop_hide {display: block !important;max-height: none !important;}}</style>';

$html  .='</head>';

$html  .='<body class="clean-body" style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #f8f8f9;">';

$html  .='<!--[if IE]><div class="ie-browser"><![endif]-->';

$html  .='<table bgcolor="#f8f8f9" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="table-layout: fixed; vertical-align: top; min-width: 320px; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f8f8f9; width: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td style="word-break: break-word; vertical-align: top;" valign="top">';

$html  .='<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color:#f8f8f9"><![endif]-->';

$html  .='<div style="background-color:#007abd;">';

$html  .='<div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #007abd;">';

$html  .='<div style="border-collapse: collapse;display: table;width: 100%;background-color:#007abd;">';

$html  .='<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#007abd;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#007abd"><![endif]-->';

$html  .='<!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#007abd;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->';

$html  .='<div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">';

$html  .='<div class="col_cont" style="width:100% !important;">';

$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">';

$html  .='<!--<![endif]-->';

$html  .='<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top">';

$html  .='<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 4px solid #007ABD; width: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='</td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='</div>';

$html  .='<!--<![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='<!--[if (mso)|(IE)]></td></tr></table><![endif]-->';

$html  .='<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='</div>';

$html  .='<div style="background-color:transparent;">';

$html  .='<div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #fff;">';

$html  .='<div style="border-collapse: collapse;display: table;width: 100%;background-color:#fff;">';

$html  .='<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#fff"><![endif]-->';

$html  .='<!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#fff;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->';

$html  .='<div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">';

$html  .='<div class="col_cont" style="width:100% !important;">';

$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">';

$html  .='<!--<![endif]-->';

$html  .='<div align="center" class="img-container center fixedwidth" style="padding-right: 0px;padding-left: 0px;">';

$html  .='<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr style="line-height:0px"><td style="padding-right: 0px;padding-left: 0px;" align="center"><![endif]-->';

$html  .='<div style="font-size:1px;line-height:22px"> </div><img align="center" alt="I m an image" border="0" class="center fixedwidth" src="https://ithea.vic.edu.au/eforms/images/logo.jpg" style="text-decoration: none; -ms-interpolation-mode: bicubic; height: auto; border: 0; width: 100%; max-width: 160px; display: block;" title="I m an image" width="160"/>';

$html  .='<div style="font-size:1px;line-height:25px"> </div>';

$html  .='<!--[if mso]></td></tr></table><![endif]-->';

$html  .='</div>';

$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='</div>';

$html  .='<!--<![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='<!--[if (mso)|(IE)]></td></tr></table><![endif]-->';

$html  .='<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='</div>';

$html  .='<div style="background-color:transparent;">';

$html  .='<div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">';

$html  .='<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">';

$html  .='<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->';

$html  .='<!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#ffffff;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->';

$html  .='<div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">';

$html  .='<div class="col_cont" style="width:100% !important;">';

$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">';

$html  .='<!--<![endif]-->';

$html  .='<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 50px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top">';

$html  .='<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid #BBBBBB; width: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='</td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif"><![endif]-->';

$html  .='<div style="color:#007abd;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;">';

$html  .='<div style="line-height: 1.2; font-size: 12px; color: #007abd; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;">';

$html  .='<p style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;"><span style="font-size: 14px; color: #2b303a;"><strong>Hi '.$name.',</strong></span></p>';

$html  .='<p style="font-size: 16px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 19px; margin: 0;"> </p>';

$html  .='<p style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;"><span style="font-size: 14px; color: #2b303a;"><strong>Please Find Your Form Links Below:</strong></span></p>';

$html  .='<p style="font-size: 16px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 19px; margin: 0;"> </p>';

$html  .='</div>';

$html  .='</div>';

$html  .='<!--[if mso]></td></tr></table><![endif]-->';

$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='</div>';

$html  .='<!--<![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='<!--[if (mso)|(IE)]></td></tr></table><![endif]-->';

$html  .='<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='</div>';

$html  .='<div style="background-color:transparent;">';

$html  .='<div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #fff;">';

$html  .='<div style="border-collapse: collapse;display: table;width: 100%;background-color:#fff;">';

$html  .='<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#fff"><![endif]-->';

$html  .='<!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#fff;width:640px; border-top: 0px solid transparent; border-left: none; border-bottom: 0px solid transparent; border-right: none;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr>'."<td style='padding-top:0px;padding-bottom:0px' width='30' bgcolor='#FFFFFF'><table role='presentation' width='30' cellpadding='0' cellspacing='0' border='0'><tr><td>&nbsp;</td></tr></table></td>".'<td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->';

$html  .='<div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 580px;">';

$html  .='<div class="col_cont" style="width:100% !important;">';

$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='<div style="border-top:0px solid transparent; border-left:30px solid #FFFFFF; border-bottom:0px solid transparent; border-right:30px solid #FFFFFF; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">';

$html  .='<!--<![endif]-->';

$html  .='<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top">';

$html  .='<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 4px solid #007ABD; width: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='</td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 25px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top">';

$html  .='<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" height="0" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 0px solid transparent; height: 0px; width: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td height="0" style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='</td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';



$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='</div>';

$html  .='<!--<![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .="<!--[if (mso)|(IE)]></td><td style='padding-top:0px;padding-bottom:0px' width='30' bgcolor='#FFFFFF'><table role='presentation' width='30' cellpadding='0' cellspacing='0' border='0'><tr><td>&nbsp;</td></tr></table></td></tr></table><![endif]-->";

$html  .='<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='</div>';

$html  .='<div style="background-color:transparent;">';

$html  .='<div class="block-grid two-up" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #fff;">';

$html  .='<div style="border-collapse: collapse;display: table;width: 100%;background-color:#fff;">';

$html  .='<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#fff"><![endif]-->';

if(isset($link1) && $link1 == 'Yes'){

    $html  .='<!--[if (mso)|(IE)]><td align="center" width="320" style="background-color:#fff;width:320px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->';

    $html  .='<div class="col num6" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 318px; width: 320px;">';

    $html  .='<div class="col_cont" style="width:100% !important;">';

    $html  .='<!--[if (!mso)&(!IE)]><!-->';

    $html  .='<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">';

    $html  .='<!--<![endif]-->';

    $html  .='<div align="center" class="button-container" style="padding-top:10px;padding-right:10px;padding-bottom:0px;padding-left:10px;">';

    $html  .= '<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 10px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="'.$url1.'" style="height:36.75pt; width:200.25pt; v-text-anchor:middle;" arcsize="123%" stroke="false" fillcolor="#007abd"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Tahoma, sans-serif; font-size:16px"><![endif]--><a href='.$url1.' style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #007abd; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; width: auto; width: auto; border-top: 1px solid #007abd; border-right: 1px solid #007abd; border-bottom: 1px solid #007abd; border-left: 1px solid #007abd; padding-top: 15px; padding-bottom: 15px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:16px;display:inline-block;"><span style="font-size: 16px; margin: 0; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px;">ELIGIBILITY FORM</span></span></a>';

    $html  .='<!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->';

    $html  .='</div>';

    $html  .='<!--[if (!mso)&(!IE)]><!-->';

    $html  .='</div>';

    $html  .='<!--<![endif]-->';

    $html  .='</div>';

    $html  .='</div>';

    $html  .='<!--[if (mso)|(IE)]></td></tr></table><![endif]-->';

}

if(isset($link2) && $link2 == 'Yes'){

    $html  .='<!--[if (mso)|(IE)]></td><td align="center" width="320" style="background-color:#fff;width:320px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->';

    $html  .='<div class="col num6" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 318px; width: 320px;">';

    $html  .='<div class="col_cont" style="width:100% !important;">';

    $html  .='<!--[if (!mso)&(!IE)]><!-->';

    $html  .='<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">';

    $html  .='<!--<![endif]-->';

    $html  .='<div align="center" class="button-container" style="padding-top:10px;padding-right:10px;padding-bottom:0px;padding-left:10px;">';

    $html  .= '<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 10px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="'.$url2.'" style="height:36.75pt; width:220.5pt; v-text-anchor:middle;" arcsize="123%" stroke="false" fillcolor="#007abd"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Tahoma, sans-serif; font-size:16px"><![endif]--><a href="'.$url2.'" style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #007abd; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; width: auto; width: auto; border-top: 1px solid #007abd; border-right: 1px solid #007abd; border-bottom: 1px solid #007abd; border-left: 1px solid #007abd; padding-top: 15px; padding-bottom: 15px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:16px;display:inline-block;"><span style="font-size: 16px; margin: 0; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px;">PRE-TRAINING FORM</span></span></a>';

    $html  .='<!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->';

    $html  .='</div>';

    $html  .='<!--[if (!mso)&(!IE)]><!-->';

    $html  .='</div>';

    $html  .='<!--<![endif]-->';

    $html  .='</div>';

    $html  .='</div>';

    $html  .='<!--[if (mso)|(IE)]></td></tr></table><![endif]-->';

}

if(isset($link3) && $link3 == 'Yes'){

    $html  .='<!--[if (mso)|(IE)]></td><td align="center" width="320" style="background-color:#fff;width:320px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->';

    $html  .='<div class="col num6" style="display: table-cell; vertical-align: top; max-width: 320px; min-width: 318px; width: 320px;">';

    $html  .='<div class="col_cont" style="width:100% !important;">';

    $html  .='<!--[if (!mso)&(!IE)]><!-->';

    $html  .='<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">';

    $html  .='<!--<![endif]-->';

    $html  .='<div align="center" class="button-container" style="padding-top:10px;padding-right:10px;padding-bottom:0px;padding-left:10px;">';

    $html  .= '<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;"><tr><td style="padding-top: 10px; padding-right: 10px; padding-bottom: 0px; padding-left: 10px" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="'.$url2.'" style="height:36.75pt; width:220.5pt; v-text-anchor:middle;" arcsize="123%" stroke="false" fillcolor="#007abd"><w:anchorlock/><v:textbox inset="0,0,0,0"><center style="color:#ffffff; font-family:Tahoma, sans-serif; font-size:16px"><![endif]--><a href="javascript:void(0);" style="-webkit-text-size-adjust: none; text-decoration: none; display: inline-block; color: #ffffff; background-color: #007abd; border-radius: 60px; -webkit-border-radius: 60px; -moz-border-radius: 60px; width: auto; width: auto; border-top: 1px solid #007abd; border-right: 1px solid #007abd; border-bottom: 1px solid #007abd; border-left: 1px solid #007abd; padding-top: 15px; padding-bottom: 15px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; text-align: center; mso-border-alt: none; word-break: keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:16px;display:inline-block;"><span style="font-size: 16px; margin: 0; line-height: 1.2; word-break: break-word; mso-line-height-alt: 19px;">PRE-TRAINING TRADE FORM</span></span></a>';

    $html  .='<!--[if mso]></center></v:textbox></v:roundrect></td></tr></table><![endif]-->';

    $html  .='</div>';

    $html  .='<!--[if (!mso)&(!IE)]><!-->';

    $html  .='</div>';

    $html  .='<!--<![endif]-->';

    $html  .='</div>';

    $html  .='</div>';

    $html  .='<!--[if (mso)|(IE)]></td></tr></table><![endif]-->';

}

$html  .='<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='</div>';

$html  .='<div style="background-color:transparent;">';

$html  .='<div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #ffffff;">';

$html  .='<div style="border-collapse: collapse;display: table;width: 100%;background-color:#ffffff;">';

$html  .='<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#ffffff"><![endif]-->';

$html  .='<!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#ffffff;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:5px; padding-bottom:5px;"><![endif]-->';

$html  .='<div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">';

$html  .='<div class="col_cont" style="width:100% !important;">';

$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:5px; padding-bottom:5px; padding-right: 0px; padding-left: 0px;">';

$html  .='<!--<![endif]-->';

$html  .='<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 40px; padding-left: 40px; padding-top: 10px; padding-bottom: 10px; font-family: Tahoma, sans-serif"><![endif]-->';

$html  .='<div style="color:#007abd;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;">';

$html  .='<div style="line-height: 1.2; font-size: 12px; color: #007abd; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px;">';

$html  .='<p style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;"><span style="font-size: 14px; color: #2b303a;"><strong>Links Will Expire in 7 Days.</strong></span></p>';

$html  .='<p style="font-size: 16px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 19px; margin: 0;"> </p>';

$html  .='<p style="font-size: 14px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 17px; margin: 0;"><span style="font-size: 14px; color: #2b303a;"><strong>Thanks &amp; Regards,</strong></span></p>';

$html  .='<p style="font-size: 16px; line-height: 1.2; word-break: break-word; text-align: left; mso-line-height-alt: 19px; margin: 0;"> </p>';

$html  .='</div>';

$html  .='</div>';

$html  .='<!--[if mso]></td></tr></table><![endif]-->';

$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='</div>';

$html  .='<!--<![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='<!--[if (mso)|(IE)]></td></tr></table><![endif]-->';

$html  .='<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='</div>';

$html  .='<div style="background-color:transparent;">';

$html  .='<div class="block-grid" style="min-width: 320px; max-width: 640px; overflow-wrap: break-word; word-wrap: break-word; word-break: break-word; Margin: 0 auto; background-color: #2b303a;">';

$html  .='<div style="border-collapse: collapse;display: table;width: 100%;background-color:#2b303a;">';

$html  .='<!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:transparent;"><tr><td align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:640px"><tr class="layout-full-width" style="background-color:#2b303a"><![endif]-->';

$html  .='<!--[if (mso)|(IE)]><td align="center" width="640" style="background-color:#2b303a;width:640px; border-top: 0px solid transparent; border-left: 0px solid transparent; border-bottom: 0px solid transparent; border-right: 0px solid transparent;" valign="top"><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 0px; padding-left: 0px; padding-top:0px; padding-bottom:0px;"><![endif]-->';

$html  .='<div class="col num12" style="min-width: 320px; max-width: 640px; display: table-cell; vertical-align: top; width: 640px;">';

$html  .='<div class="col_cont" style="width:100% !important;">';

$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='<div style="border-top:0px solid transparent; border-left:0px solid transparent; border-bottom:0px solid transparent; border-right:0px solid transparent; padding-top:0px; padding-bottom:0px; padding-right: 0px; padding-left: 0px;">';

$html  .='<!--<![endif]-->';

$html  .='<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 0px; padding-right: 0px; padding-bottom: 0px; padding-left: 0px;" valign="top">';

$html  .='<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 4px solid #007ABD; width: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='</td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='<table border="0" cellpadding="0" cellspacing="0" class="divider" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td class="divider_inner" style="word-break: break-word; vertical-align: top; min-width: 100%; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%; padding-top: 25px; padding-right: 40px; padding-bottom: 10px; padding-left: 40px;" valign="top">';

$html  .='<table align="center" border="0" cellpadding="0" cellspacing="0" class="divider_content" role="presentation" style="table-layout: fixed; vertical-align: top; border-spacing: 0; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; border-top: 1px solid #555961; width: 100%;" valign="top" width="100%">';

$html  .='<tbody>';

$html  .='<tr style="vertical-align: top;" valign="top">';

$html  .='<td style="word-break: break-word; vertical-align: top; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;" valign="top"><span></span></td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='</td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='<!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding-right: 40px; padding-left: 40px; padding-top: 20px; padding-bottom: 30px; font-family: Tahoma, sans-serif"><![endif]-->';

$html  .='<div style="color:#555555;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;line-height:1.2;padding-top:20px;padding-right:40px;padding-bottom:30px;padding-left:40px;">';

$html  .='<div style="line-height: 1.2; font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; color: #555555; mso-line-height-alt: 14px;">';

$html  .='<p style="font-size: 12px; line-height: 1.2; word-break: break-word; text-align: center; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14px; margin: 0;"><span style="color: #95979c; font-size: 12px;">ITHEA Copyright © 2020</span></p>';

$html  .='</div>';

$html  .='</div>';

$html  .='<!--[if mso]></td></tr></table><![endif]-->';

$html  .='<!--[if (!mso)&(!IE)]><!-->';

$html  .='</div>';

$html  .='<!--<![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='<!--[if (mso)|(IE)]></td></tr></table><![endif]-->';

$html  .='<!--[if (mso)|(IE)]></td></tr></table></td></tr></table><![endif]-->';

$html  .='</div>';

$html  .='</div>';

$html  .='</div>';

$html  .='</td>';

$html  .='</tr>';

$html  .='</tbody>';

$html  .='</table>';

$html  .='<!--[if (IE)]></div><![endif]-->';

$html  .='</body>';

$html  .='</html>';



















    $mail = $_mail::send_email($name, $to, $subject, $html, '', '' );



    header("Location: index.php");

    exit;



?>

