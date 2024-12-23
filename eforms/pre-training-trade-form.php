<?php
date_default_timezone_set("Australia/Melbourne");
session_start();

if(isset($_SESSION['link2']) && $_SESSION['link2'] && isset($_SESSION['expiry2']) && $_SESSION['expiry2'] != ''){

    $now = new DateTime();
    $date = new DateTime($_SESSION['expiry2']);
    if($date < $now) {
        unset($_SESSION['link1']);
        unset($_SESSION['expiry1']);
        header("Location: expiredlink.html");
        exit;
    }
} else {
    header("Location: expiredlink.html");
    exit;
}

?>
<!DOCTYPE  html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en-au" xml:lang="en-au" xmlns="http://www.w3.org/1999/xhtml">

    <head>

        <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>

        <title>
        
             ITHEA PRE-TRAINING INTERVIEW FORM-TRADES

        </title>



        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet"/>
        
        <link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet" />
        <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>

        <style type="text/css">

            input.underline { border: none; border-bottom: 1px dotted black; outline: none; font-size: 14px; font-weight: 400; line-height: 1.5; }

            input.blankspace { border: none; outline: none; font-size: 14px; font-weight: 400; line-height: 1.5;padding-left: 5px; }

            .checkbox:active, .checkbox:focus { box-shadow: none;}

            .checkbox:before { content: "X"; font-family: "FontAwesome"; display: inline; width: 30px; max-width: 30px; height: 30px; max-height: 30px; background: white; color: white; box-shadow: none; padding: 2px; font-size: 10px; transition: 0.5s; border: 1px solid black; line-height: 17px; }

            .checkbox:checked { box-shadow: none; }

            .checkbox:checked:before { color: black; transition: 0.5s; }

.            * {margin:0; padding:0; text-indent:0; }

            .s1 { color: #808080; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 7pt; }

            .s2 { color: #808080; font-family:Wingdings; font-style: normal; font-weight: normal; text-decoration: none; font-size: 7pt; }

            .s3 { color: #808080; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 7pt; }

            .a { color: #808080; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 7pt; }

            .s4 { color: #FFF; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 22pt; }

            .s5 { color: black; font-family:"Arial Narrow", sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 12pt; }

            .s6 { color: black; font-family:"Arial Narrow", sans-serif; font-style: italic; font-weight: bold; text-decoration: none; font-size: 12pt; }

            .s7 { color: #808080; font-family:"Arial Narrow", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9pt; }

            .s8 { color: #808080; font-family:Wingdings; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9pt; }

            .s9 { color: #808080; font-family:"Arial Narrow", sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 9pt; }

            .s10 { color: black; font-family:"Arial Narrow", sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 9pt; }

            .s11 { color: black; font-family:"Arial Narrow", sans-serif; font-style: italic; font-weight: bold; text-decoration: none; font-size: 9pt; }

            .s12 { color: black; font-family:"Arial Narrow", sans-serif; font-style: italic; font-weight: normal; text-decoration: none; font-size: 9pt; }

            .s13 { color: black; font-family:"Arial Narrow", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }

            .s14 { color: #808080; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9pt; }

            .s15 { color: #808080; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 7pt; }

            .s16 { color: #808080; font-family:Wingdings; font-style: normal; font-weight: normal; text-decoration: none; font-size: 7pt; }

            .s17 { color: #808080; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 7pt; }

            .s18 { color: #808080; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 7pt; }

            .s19 { color: #FFF; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 18pt; }

            .h2, h2 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 12pt; }

            .s20 { color: black; font-family:Wingdings; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }

            .p, p { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; margin:0pt; margin-bottom: unset!important;}

            .s21 { color: black; font-family:"Arial Narrow", sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 11pt; }

            .s22 { color: black; font-family:"Arial Narrow", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9pt; }

            .s23 { color: black; font-family:Wingdings; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9pt; }

            .s24 { color: #FFF; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 12pt; }

            .s25 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; }

            h3 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 11pt; }

            .s26 { color: #FFF; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }

            .s28 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }

            .s29 { color: black; font-family:Webdings, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }

            .s30 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }

            .s32 { color: black; font-family:Webdings, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }

            .s33 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }

            .s34 { color: #FFF; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }

            .s35 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 8pt; vertical-align: 4pt; }

            .h1 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 14pt; }

            .s36 { color: black; font-family:Webdings, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; }

            .s37 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; }

            .s38 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; }

            .s39 { color: black; font-family:Webdings, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; }

            .s40 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; }

            .s41 { color: black; font-family:Arial, sans-serif; font-style: italic; font-weight: normal; text-decoration: none; font-size: 11pt; }

            .s42 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: none; font-size: 10pt; }

            .s43 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }

            .s44 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9pt; }

            .s45 { color: black; font-family:Webdings, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }

            .s46 { color: black; font-family:"Times New Roman", serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }

            .s47 { color: black; font-family:Wingdings; font-style: normal; font-weight: bold; text-decoration: none; font-size: 12pt; }

            .s48 { color: black; font-family:Arial, sans-serif; font-style: normal; font-weight: bold; text-decoration: underline; font-size: 12pt; }

            .s49 { color: #FFF; font-family:"Century Gothic", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 12pt; }

            .s50 { color: black; font-family:"Arial Narrow", sans-serif; font-style: italic; font-weight: bold; text-decoration: none; font-size: 10pt; }

            .s51 { color: #777; font-family:"Arial Narrow", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 10pt; }

            .s52 { color: #808080; font-family:"Arial Narrow", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 8pt; }

            .s53 { color: #777; font-family:"Arial Narrow", sans-serif; font-style: italic; font-weight: normal; text-decoration: none; font-size: 8pt; }

            .s54 { color: #777; font-family:"Arial Narrow", sans-serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 9pt; }

            .s55 { color: #777; font-family:"Arial Narrow", sans-serif; font-style: italic; font-weight: normal; text-decoration: none; font-size: 9pt; }

            li {display: block; }

            #l1 {padding-left: 0pt; }

            li {display: block; }

            #l2 {padding-left: 0pt; }

            li {display: block; }

            #l3 {padding-left: 0pt; }

            li {display: block; }

            #l4 {padding-left: 0pt; }

            li {display: block; }

            #l5 {padding-left: 0pt; }

            li {display: block; }

            #l6 {padding-left: 0pt; }

            li {display: block; }

            #l7 {padding-left: 0pt; }

            li {display: block; }

            #l8 {padding-left: 0pt; }

            li {display: block; }

            #l9 {padding-left: 0pt; }

            li {display: block; }

            #l10 {padding-left: 0pt; }

            li {display: block; }

            #l11 {padding-left: 0pt; }

            li {display: block; }

            #l12 {padding-left: 0pt; }

            li {display: block; }

            #l13 {padding-left: 0pt; }

            li {display: block; }

            #l14 {padding-left: 0pt; }

            li {display: block; }

            #l15 {padding-left: 0pt; }

            li {display: block; }

            #l16 {padding-left: 0pt; }

            li {display: block; }

            #l17 {padding-left: 0pt; }

            li {display: block; }

            #l18 {padding-left: 0pt; }

            li {display: block; }

            #l19 {padding-left: 0pt; }

            li {display: block; }

            #l20 {padding-left: 0pt; }

            li {display: block; }

            #l21 {padding-left: 0pt; }

            li {display: block; }

            #l22 {padding-left: 0pt; }

            li {display: block; }

            #l23 {padding-left: 0pt; }

            li {display: block; }

            #l24 {padding-left: 0pt; }

            li {display: block; }

            #l25 {padding-left: 0pt; }

            li {display: block; }

            #l26 {padding-left: 0pt; }

            li {display: block; }

            #l27 {padding-left: 0pt; }

            li {display: block; }

            #l28 {padding-left: 0pt; }

            li {display: block; }

            #l29 {padding-left: 0pt;counter-reset: g1 0; }

            #l29> li:before {counter-increment: g1; content: counter(g1, decimal)". "; color: black; margin-left: 25px; font-style: normal; font-weight: normal; text-decoration: none; }

            #l30 {padding-left: 0pt; }

            #l30> li:before {content: " "; color: black; font-family:Symbol, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; }

            #l31 {padding-left: 0pt; }

            #l31> li:before {content: " "; color: black; font-family:Symbol, serif; font-style: normal; font-weight: normal; text-decoration: none; font-size: 11pt; }

            li {display: block; }

            #l32 {padding-left: 0pt;counter-reset: i1 0; }

            #l32> li:before {counter-increment: i1; content: counter(i1, decimal)". "; color: black; margin-left: 22px; font-style: normal; font-weight: normal; text-decoration: none; }

            .toast-bottom-center{top: 35%!important;}

            .btn {

                border: 1px solid #007bff;

                color: #007bff;

                border-radius: .25rem;

                padding: .375rem .75rem;

                background-color: transparent;

                line-height: 1.25rem;

                text-align: center;

                vertical-align: middle;

            }

            img.m_logo { height: 75px; }

            /*Loader*/
            .loader{display: block;position:fixed;top:50%;left:50%;transform:translate(-50%, -50%);width:100px;height:100px;z-index: 1032;}

            .overlay {display: block;z-index: 1031; position: fixed;width: 100%;height: 100%;top: 0;left: 0;right: 0;bottom: 0;background-color: rgba(0,0,0,0.8);cursor: wait;}

            .loader hr{border:0;margin:0;width:40%;height:40%;position:fixed;border-radius:50%;animation:spin 2s ease infinite}

            .loader :first-child{background:#ffffff;animation-delay:-1.5s}

            .loader :nth-child(2){background:#3975c4;animation-delay:-1s}

            .loader :nth-child(3){background:#ffffff;animation-delay:-0.5s}

            .loader :last-child{background:#3975c4}

            @keyframes spin{

                0%,100%{transform:translate(0)} 25%{transform:translate(160%)} 50%{transform:translate(160%, 160%)} 75%{transform:translate(0, 160%)}

            }

        </style>

    </head>

    <body style="max-width:1024px; width:100%; margin: 0 auto; padding:20px;">

        <div id="spinner">

            <div class="overlay"></div>

            <div class="loader"><hr/><hr/><hr/><hr/></div>

        </div>

        <form id="mainForm" method="post" action="processindex2.php">

        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">

            <tr>

                <td style="width:15%; padding:5px 10px;">

                    <p class="s1" style="text-align:left;">

                        Institute of Tertiary &amp; Higher Education Australia is a trading name of ITHEA Corporation Pty Ltd

						</p>

                    <p class="s1" style="line-height:9pt;text-align:left;">
						T: +61 3 9650 3900

                        <span class="s2">

                            </span>
						F: +61 3 9650 3199

                        <span class="s2">

                            

                        </span>
						E: info@ithea.edu.au

                        <span class="s2">

                            </span>
						W: www.ithea.edu.au
                    </p>

                    <p class="s1" style="line-height:9pt;text-align:left;">

                        Main campus &amp; postal:Level 11, 168 Lonsdale Street, Melbourne, Victoria, 3000

                    </p>

                    <p class="s1" style="line-height:9pt;text-align:left;">

                        RTO Number: 22037

                        <span class="s2">

                            </span>
						CRICOS Number: 02892J

                        <span class="s2">

                            </span>
						ACN: 125 368 569

                        <span class="s2">

                            </span>
						ABN: 81 578 106 574

                    </p>

                </td>

                <td style="width:18%; padding:5px 10px; text-align:right;">

                    <img alt="image" src="images/logo.jpg" class="m_logo">

                </td>

            </tr>
			</table>

        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">

            <tr>

                <td bgcolor="#3975C4" colspan="4" style="">

                    <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 27pt;text-align: left;">

                    PRE-TRAINING INTERVIEW FORM- TRADES </p>

                </td>

            </tr>
            <tr>

            <td colspan="4" style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left; font-size:14pt; text-align:center;">
                MSF30919 Certificate III in Blinds, Awnings, Security Screens and Grilles
                </p>

            </td>

            </tr>

            <tr>

                <td colspan="4" style="width:537pt;border-top-style:solid;border-top-width:3pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s5" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Personal details –

                        <i>

                            to be completed by applicant

                        </i>

                    </p>

                </td>

            </tr>

            <tr style="height:33pt">

                <td colspan="3" style="width:319pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Family name:<input class="blankspace" id="input1" name="input1"  style="width: 90%;" type="text">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Given name(s):<input class="blankspace" id="input2" name="input2"  style="width: 77%;" type="text">

                    </p>

                </td>

            </tr>

            <tr style="height:11pt">

                <td rowspan="2" style="width:128pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Date of birth: <input class="blankspace" id="input3" name="input3"  style="width: 64%;" type="text" placeholder="(DD/MM/YYYY)">

                    </p>

                </td>

                <td style="width:48pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Sex:

                    </p>

                </td>

                <td rowspan="2" style="width:143pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Contact telephones:<input class="blankspace" id="input4" name="input4"  style="width: 54%;" type="text">

                    </p>

                </td>

                <td rowspan="2" style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        E-mail:<input class="blankspace" id="input5" name="input5"  style="width: 88%;" type="text">

                    </p>

                </td>

            </tr>

            <tr style="height:23pt">

                <td style="width:48pt;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox1" value="1">

                        <span class="s7">

                            Male

                        </span>

                    </p>

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox1" value="2">

                        <span class="s7">

                            Female

                        </span>

                    </p>

                </td>

            </tr>

            <tr style="height:19pt">

                <td colspan="4" style="width:537pt;border-top-style:solid;border-top-width:2pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s5" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Education background –

                        <i>

                            to be completed by applicant

                        </i>

                    </p>

                </td>

            </tr>

            <tr style="height:14pt">

                <td colspan="2" rowspan="2" style="width:376pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s9" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Secondary school:

                        <span class="s7">

                            <input class="blankspace" id="input6" name="input6"  style="width: 64%;" type="text" placeholder="highest level completed">

                        </span>

                    </p>

                </td>

                <td rowspan="2" style="width:71pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input class="blankspace" id="input7" name="input7"  style="width: 64%;" type="text" placeholder="Year completed">

                    </p>

                </td>

                <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 4pt;padding-right: 6pt;text-indent: 0pt;text-align: center;">

                        Australian qualification?

                    </p>

                </td>

            </tr>

            <tr style="height:19pt">

                <td style="width:90pt;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-top: 2pt;padding-left: 24pt;padding-right: 23pt;text-indent: 0pt;text-align: center;">

                        <input type="radio" class="checkbox" name="checkbox2" value="1">

                        <span class="s7">

                            Yes

                        </span>

                        <input type="radio" class="checkbox" name="checkbox2" value="2">

                        <span class="s7">

                            No

                        </span>

                    </p>

                </td>

            </tr>

            <tr style="height:14pt">

                <td colspan="2" rowspan="2" style="width:376pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D0CECE;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s9" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Post-secondary school:

                        <span class="s7">



                            <input class="blankspace" id="input8" name="input8"  style="width: 64%;" type="text" placeholder="highest level completed">

                        </span>

                    </p>

                </td>

                <td rowspan="2" style="width:71pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D0CECE;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input class="blankspace" id="input9" name="input9"  style="width: 64%;" type="text" placeholder="Year completed">

                    </p>

                </td>

                <td style="width:90pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 4pt;padding-right: 6pt;text-indent: 0pt;text-align: center;">

                        Australian qualification?

                    </p>

                </td>

            </tr>

            <tr style="height:20pt">

                <td style="width:90pt;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D0CECE;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-top: 2pt;padding-left: 24pt;padding-right: 23pt;text-indent: 0pt;text-align: center;">

                        <input type="radio" class="checkbox" name="checkbox3" value="1">

                        <span class="s7">

                            Yes

                        </span>

                        <input type="radio" class="checkbox" name="checkbox3" value="2">

                        <span class="s7">

                            No

                        </span>

                    </p>

                </td>

            </tr>
            
            <tr style="height:46pt">

                <td colspan="4" style="width:537pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D0CECE;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s11" style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: left;">

                        Credit transfer

                        <span class="s12">

                            may be granted to those students who have previously completed a course which provides equivalent learning or competency outcomes to those required within the student’s current course of study. You will be required to present your evidence (usually a statement of results) at the time of enrolment.

                        </span>

                    </p>

                    <p class="s11" style="padding-left: 5pt;padding-right: 9pt;text-indent: 0pt;text-align: left;">

                        National Recognition

                        <span class="s12">

                            may be granted to those students who have attained recognition by an RTO of an Australian Qualification Framework (AQF) qualification and/or a Statement of Attainment issued by the same RTO or all other RTOs.

                        </span>

                    </p>

                </td>

            </tr>

            <tr style="height:13pt">

                <td colspan="4" style="width:537pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D0CECE;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <span class="s10">

                            Credit transfer:

                        </span>

                        <span class="s9">

                            Do you wish to apply for a Credit transfer?

                        </span>

                        <input type="radio" class="checkbox" name="checkbox4" value="1">

                        <span class="s7">

                            Yes

                        </span>

                        <input type="radio" class="checkbox" name="checkbox4" value="2">

                        <span class="s7">

                            No

                        </span>

                    </p>

                </td>

            </tr>
            
            <tr style="height:34pt">

                <td colspan="4" style="width:537pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s11" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Recognition of Prior Learning

                        <span class="s12">

                            (RPL) is an assessment process that recognises the skills and knowledge you have already gained. If you have completed other courses, if you have relevant work experience and work-based training or life experience, you may be able to apply for credit for some or all of the units in the course you are applying for. Please attach copies of supporting documents.

                        </span>

                    </p>

                </td>

            </tr>

            <tr style="height:13pt">

                <td colspan="4" style="width:537pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D0CECE;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <span class="s10">

                            Skills Recognition:

                        </span>

                        <span class="s9">

                            Do you wish to apply for Recognition of Prior Learning?

                        </span>

                        <input type="radio" class="checkbox" name="checkbox5" value="1">

                        <span class="s7">

                            Yes

                        </span>

                        <input type="radio" class="checkbox" name="checkbox5" value="2">

                        <span class="s7">

                            No

                        </span>

                    </p>

                </td>

            </tr>

            <tr style="height:19pt">

                <td colspan="4" style="width:537pt;border-top-style:solid;border-top-width:2pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <span class="s5">

                            Employment / work experience –

                        </span>

                        <span class="s6">

                            to be completed by applicant

                        </span>

                        Are you currently employed?

                        <span class="s8">

                            <input type="radio" class="checkbox" name="checkbox6" value="1">

                        </span>

                        Yes

                        <span class="s8">

                            <input type="radio" class="checkbox" name="checkbox6" value="2">

                        </span>

                        No

                    </p>

                </td>

            </tr>

            <tr style="height:12pt">

                <td colspan="4" style="width:537pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s12" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Details of current / past employment (details of your employment)

                    </p>

                </td>

            </tr>

            <tr style="height:12pt">

                <td style="width:107pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s12" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Dates (from – to)

                    </p>

                </td>

                <td style="width:103pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s12" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Position

                    </p>

                </td>

                <td style="width:103pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s12" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Company

                    </p>

                </td>

                <td style="width:224pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s12" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Duties

                    </p>

                </td>

            </tr>

            <tr style="height:19pt">

                <td style="width:107pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <input class="blankspace" id="input10" name="input10"  style="width: 100%;" type="text">

                </td>

                <td style="width:103pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <input class="blankspace" id="input11" name="input11"  style="width: 100%;" type="text">

                </td>

                <td style="width:103pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <input class="blankspace" id="input12" name="input12"  style="width: 100%;" type="text">

                </td>

                <td style="width:224pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <input class="blankspace" id="input13" name="input13"  style="width: 100%;" type="text">

                </td>

            </tr>

            <tr style="height:19pt">

                <td style="width:107pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <input class="blankspace" id="input14" name="input14"  style="width: 100%;" type="text">

                </td>

                <td style="width:103pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <input class="blankspace" id="input15" name="input15"  style="width: 100%;" type="text">

                </td>

                <td style="width:103pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <input class="blankspace" id="input16" name="input16"  style="width: 100%;" type="text">

                </td>

                <td style="width:224pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <input class="blankspace" id="input17" name="input17"  style="width: 100%;" type="text">

                </td>

            </tr>

            <tr style="height:20pt">

                <td style="width:107pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:3pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <input class="blankspace" id="input18" name="input18"  style="width: 100%;" type="text">

                </td>

                <td style="width:103pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:3pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <input class="blankspace" id="input19" name="input19"  style="width: 100%;" type="text">

                </td>

                <td style="width:103pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:3pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <input class="blankspace" id="input20" name="input20"  style="width: 100%;" type="text">

                </td>

                <td style="width:224pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:3pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <input class="blankspace" id="input21" name="input21"  style="width: 100%;" type="text">

                </td>

            </tr>

            <tr style="height:19pt">

                <td colspan="4" style="width:537pt;border-top-style:solid;border-top-width:3pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s5" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Course/s – please tick the course/s you are interested in applying for –

                        <i>

                            to be completed by applicant

                        </i>

                    </p>

                </td>

            </tr>

            <tr style="height:12pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s13" style="padding-left: 5pt;text-indent: 0pt;line-height: 11pt;text-align: left;">

                        Code

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s13" style="padding-left: 5pt;text-indent: 0pt;line-height: 11pt;text-align: left;">

                        Course

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s13" style="padding-left: 5pt;text-indent: 0pt;line-height: 11pt;text-align: left;">

                        Tick

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s13" style="padding-left: 5pt;text-indent: 0pt;line-height: 11pt;text-align: left;">

                        Delivery method

                    </p>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        BSB30120

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Certificate III in Business

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox9" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l2">

                        <li style="padding-left: 15pt;text-indent: -10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox10" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox10" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox10" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">BSB40120</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Certificate IV in Business

                  </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox11" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l3">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox12" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox12" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox12" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">BSB40520</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Certificate IV in Leadership and Management

                  </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox13" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l4">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox14" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox14" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox14" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">BSB50120</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Diploma of Business

                  </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox15" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l5">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox16" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox16" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox16" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">BSB50420</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Diploma of Leadership and Management

                  </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox17" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l6">

                        <li style="padding-left: 15pt;text-indent: -10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox18" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox18" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox18" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">BSB60120</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Advanced Diploma of Business

                  </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox21" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l8">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox22" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox22" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox22" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CHC33021</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Certificate III in Individual Support (Ageing and Disability)</p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox23"  value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l9">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox24" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox24" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox24" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CHC43015</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Certificate IV in Ageing Support

                  </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox27" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l11">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox28" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox28" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox28" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>
            
            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CHC33021</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Certificate III in Individual Support (Disability)</p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkboxnew1"  value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l9">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkboxnew2" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkboxnew2" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkboxnew2" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CHC43121</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Certificate IV in Disability Support</p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox29" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l12">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox30" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox30" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox30" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CHC40321</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Certificate IV in Child, Youth and Family Intervention</p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox31" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l13">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox32" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox32" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox32" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>
			
			<tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CHC50321</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">Diploma of Child, Youth and Family Intervention</p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox98" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l13">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox99" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox99" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox99" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CHC30121</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Certificate III in Early Childhood Education and Care

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox33" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l14">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox34" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox34" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox34" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CHC50121</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Diploma of Early Childhood Education and Care

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox35" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l15">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox36" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox36" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox36" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CHC52021</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Diploma of Community Services

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox37" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l16">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox38" value="1">

                                </span>

                                Class room -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox38" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox38" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CHC43315</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Certificate IV in Mental Health

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox57" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l26">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox58" value="1">

                                </span>

                                Class room - 

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox58" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox58" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">CHC53315</p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Diploma of Mental Health

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox59" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l27">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox60" value="1">

                                </span>

                                Class room - 

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox60" value="2">

                                </span>

                                <span class="s14">

                                </span>

                                Online -

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox60" value="3">

                                </span>

                                <span class="s14">

                                </span>

                                Distance

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        22636VIC

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Course in Initial EAL

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox39" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l17">

                        <li style="padding-left: 15pt;text-indent: -10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox40" value="1">

                                </span>

                                Class room

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        22637VIC

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Course in EAL (English as an Additional Language)

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox41" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l18">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox42" value="1">

                                </span>

                                Class room

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        22638VIC

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Certificate I in EAL (Access)

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox43" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l19">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox44" value="1">

                                </span>

                                Class room

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        22639VIC

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Certificate II in EAL (Access)

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox45" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l20">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox46" value="1">

                                </span>

                                Class room

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        22640VIC

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Certificate III in EAL (Access)

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox47" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l21">

                        <li style="padding-left: 15pt;text-indent: -10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox48" value="1">

                                </span>

                                Class room

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        22645VIC

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Certificate III in EAL (Further Study)

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox49" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l22">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox50" value="1">

                                </span>

                                Class room

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        22641VIC

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Certificate IV in EAL (Access)

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox51" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l23">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox52" value="1">

                                </span>

                                Class room

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        22644VIC

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Certificate IV in EAL (Employment / Professional)

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox53" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l24">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox54" value="1">

                                </span>

                                Class room

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        22646VIC

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Certificate IV in EAL (Further Study)

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox55" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l25">

                        <li style="padding-left: 15pt;text-indent: -10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox56" value="1">

                                </span>

                                Class room

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

            <tr style="height:11pt">

                <td style="width:50pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        MSF30919

                    </p>

                </td>

                <td style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Certificate III in Blinds, Awnings, Security Screens and Grilles

                    </p>

                </td>

                <td style="width:35pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="checkbox" class="checkbox" name="checkbox61" value="1">

                    </p>

                </td>

                <td style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <ul id="l28">

                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">

                            <p class="s7" style="display: inline;">

                                <span class="s8">

                                    <input type="checkbox" class="checkbox" name="checkbox62" value="1">

                                </span>

                                Apprenticeship

                            </p>

                        </li>

                    </ul>

                </td>

            </tr>

        </table>
		<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin: 20px 0px 20px 0px;">

                    <span>

                    </span>

                </p>
        
        <table cellspacing="0" style="width: 100%; border-collapse:collapse; width: 100%;">

            <tr style="height:23pt">

                <td bgcolor="#3975C4" style="width:538pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E">

                    <p class="s19" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        DIGITAL LITERACY

                    </p>

                </td>

            </tr>

        </table>
        
        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Do you use a computer?
                    </p>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 digilitep" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl1" value="1">
                                </span>
                                Rarely/Not at all&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl1" value="2">
                                </span>
                                Sometimes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl1" value="3">
                                </span>
                                Regularly/Often&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        What do you use the computer for?
                    </p>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 digilitep" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl2" value="1">
                                </span>
                                On-line shopping&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl2" value="2">
                                </span>
                                Banking&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl2" value="3">
                                </span>
                                Social-media&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl2" value="4">
                                </span>
                                Social-media&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl2" value="5">
                                </span>
                                Work/Study
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Do you have access to a computer or laptop with Internet?
                    </p>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 digilitep" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl3" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl3" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Do you have sufficient digital literacy to complete the course?
                    </p>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 digilitep" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl4" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl4" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Can you overcome barriers in accessing technology?
                    </p>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 digilitep" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl5" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="dl5" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
        </table>

		<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin: 20px 0px 20px 0px;">
            <span></span>
        </p>
		
		<table cellspacing="0" style="width: 100%; border-collapse:collapse; width: 100%;">
            <tr style="height:23pt">
                <td bgcolor="#3975C4" style="width:538pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E">
                    <p class="s19" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        ABOUT YOU
                    </p>
                </td>
            </tr>
        </table>
            
        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tbody>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-bottom: 0 !important;">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        <br/><strong>Safety Check<br/>
Some of our courses require a Working with Children’s Check and/or a Police Check, before starting work placement.</strong>
                    </p>
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Do you understand that you will be required to obtain these checks yourself before beginning any work placement?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;vertical-align: bottom;border-bottom: 0 !important;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup1" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou1" name="ay0" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou1" name="ay0" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-top: 0 !important;">
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Do you understand that you will need to provide these checks?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-top: 0 !important;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup1" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou1" name="ay1" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou1" name="ay1" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        <br/><strong>Obligations of the course</strong><br/>
a) Each course has a specified duration or time frame. ITHEA expects each student to devote 20 hours per week in study – whether online or
in class.
                    </p>
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Are you willing and able to devote 20 hours per week in study?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;vertical-align: bottom;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup2" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou2" name="ay2" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou2" name="ay2" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        b) Do you understand that you are required to find your own practical placement? (ITHEA can only assist you when all efforts to find your own placement have been exhausted)
                    </p>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay3" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay3" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-bottom: 0;">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        c) Each course has specified compulsory work placement hours. These hours may begin as early as 7am and finish as late as 6pm.
                    </p>
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Are you willing and able to complete the compulsory work placement hours?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;vertical-align: bottom;border-bottom: 0;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay4" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay4" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-top: 0 !important;border-bottom: 0 !important;">
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Do you have family commitments?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-top: 0 !important;border-bottom: 0 !important;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay5" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay5" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-top: 0 !important;border-bottom: 0 !important;">
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Will you be able to meet those commitments as well as study?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-top: 0 !important;border-bottom: 0 !important;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay6" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay6" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-top: 0 !important;">
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Will you be able to meet work placement commitments as well as study and family?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-top: 0 !important;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay7" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay7" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        d) For funding purposes, you must commence your course within 2 weeks of the Training Plan being signed. If you are unable to save some answers you run the risk of being withdrawn for non-commencement.
                    </p>
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Will you be able to commence within the 2 weeks?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;vertical-align: bottom;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay8" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay8" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        e) Plagiarism and cheating will not be condoned. The use of AI will be considered as plagiarism and result in re-submission or failure.
                    </p>
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Do you agree to submit your own work after reading the learning material?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;vertical-align: bottom;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 digilitep" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="ay9" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox digilite" name="ay9" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        f) Do you have any physical impairment that will affect your ability to complete placement?
                    </p>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;vertical-align: bottom;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay10" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay10" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        g) Do you have a mental impairment that may affect your ability to complete training, assessments and/or placement?
                    </p>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;vertical-align: bottom;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay11" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay11" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4" colspan="2">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        <br/><strong>Reason for study and duration</strong><br/>
Please tell us why you want to do this course. (Please include any prior or current work experience in the sector. Also specify the amount of experience you
possess in months/years.) (minimum of 50 words)<br/><br/>
                    <textarea class="blankspace aboutyou6" id="ay6" name="ay12" style="width: 100%;height:60px;" row="6" spellcheck="false"></textarea>
                        <br/><br/>
                    </p>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-bottom: 0 !important;">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        In some cases, students may be able to complete the course earlier than specified due to prior knowledge and/or experience. Students who wish to complete qualifications early must apply for an interview to be eligible for fast tracking. Upon early completion, students will be required to undertake an independent summative assessment (CAPSTONE). Any charges incurred for this assessment are payable by the student.
                    </p>
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Are you interested in completing your qualification early?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;vertical-align: bottom;border-bottom: 0 !important;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay13" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay13" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-top: 0 !important;">
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Do you agree to pay for the summative assessment?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;border-top: 0 !important;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay14" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay14" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        <br/><strong>Application interview</strong><br/>
After your application has been received you will be contacted via Zoom to verify your compatibility and suitability for the course that you are
applying for.
                    </p>
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                                Do you agree to a face-to-face interview via zoom?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;vertical-align: bottom;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay15" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay15" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
            <tr style="height:11pt">
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        <br/><strong>Survey</strong>
                    </p>
                    <ul class="s7" id="l31" style="margin-left: 45px;">
                        <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">
                            <p class="s7" style="display: inline;">
                               Do you agree to complete a survey from the National Centre of Vocational Education and Research (NCEVER) or be contacted by the
funding body to discuss your training?
                            </p>
                        </li>
                    </ul>
                </td>
                <td style="width:50%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;vertical-align: bottom;">
                    <ul id="l28">
                        <li style="padding-left: 15pt;text-indent: -10pt;line-height: 10pt;text-align: left;">
                            <p class="s7 aboutyoup3" style="display: inline;">
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay16" value="1">
                                </span>
                                Yes&nbsp;&nbsp;
                                <span class="s8">
                                    <input type="radio" class="checkbox aboutyou3" name="ay16" value="2">
                                </span>
                                No&nbsp;&nbsp;
                            </p>
                        </li>
                    </ul>
                </td>
            </tr>
        </tbody></table>
            
		<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin: 20px 0px 20px 0px;">
            <span></span>
        </p>
        
		<?php /*	
		<ol id="l29">
			<li style="padding-top: 4pt;text-indent: -18pt;text-align: left;">
				<h3 style="display: inline;">
					How did you find out about this course?
				</h3>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
				<p class="s32" style="text-indent: 0pt;">
					<input type="text" class="checkbox" name="texthow" style="width:100%;font-size: 14px;font-weight: 400;line-height: 1.5;padding-left: 5px;">
				</p>
            </li>
			<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">
				<span></span>
            </p>
			<p style="text-indent: 0pt;text-align: left;">
				<br>
			</p>
			<li style="padding-top: 4pt;text-indent: -18pt;text-align: left;">
				<h3 style="display: inline;">
					Are you aware that this course is delivered online?
				</h3>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
				<p class="s32" style="text-indent: 0pt;">
					<input type="text" class="checkbox" name="textare" style="width:100%;font-size: 14px;font-weight: 400;line-height: 1.5;padding-left: 5px;">
				</p>
            </li>
			<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">
				<span></span>
            </p>
			<p style="text-indent: 0pt;text-align: left;">
				<br>
			</p>
			<li style="padding-top: 4pt;text-indent: -18pt;text-align: left;">
				<h3 style="display: inline;">
					Do you use a computer?
				</h3>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">
					<input type="radio" class="checkbox" name="checkboxdo" value="1">
					<span class="s33"></span>
					<span class="p">Sometimes</span>
				</p>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">
					<input type="radio" class="checkbox" name="checkboxdo" value="2">
					<span class="s33"></span>
					<span class="p">Regularly/often</span>
				</p>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">
					<input type="radio" class="checkbox" name="checkboxdo" value="3">
					<span class="s33"></span>
					<span class="p">Rarely/not at all</span>
				</p>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
            </li>
			<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">
				<span></span>
            </p>
			<p style="text-indent: 0pt;text-align: left;">
				<br>
			</p>
			<li style="padding-top: 4pt;text-indent: -18pt;text-align: left;">
				<h3 style="display: inline;">
					What do you use the computer for?
				</h3>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">
					<input type="radio" class="checkbox" name="checkboxwhat" value="1">
					<span class="s33"></span>
					<span class="p">Online Shopping</span>
				</p>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">
					<input type="radio" class="checkbox" name="checkboxwhat" value="2">
					<span class="s33"></span>
					<span class="p">Banking</span>
				</p>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">
					<input type="radio" class="checkbox" name="checkboxwhat" value="3">
					<span class="s33"></span>
					<span class="p">Social Media</span>
				</p>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
            </li>
			<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">
				<span></span>
            </p>
			<p style="text-indent: 0pt;text-align: left;">
				<br>
			</p>
			<li style="padding-top: 4pt;text-indent: -18pt;text-align: left;">
				<h3 style="display: inline;">
					Do you use a SMART phone?
				</h3>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">
					<input type="radio" class="checkbox" name="checkboxsmart" value="1">
					<span class="s33"></span>
					<span class="p">Sometimes</span>
				</p>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">
					<input type="radio" class="checkbox" name="checkboxsmart" value="2">
					<span class="s33"></span>
					<span class="p">Regularly/often</span>
				</p>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">
					<input type="radio" class="checkbox" name="checkboxsmart" value="3">
					<span class="s33"></span>
					<span class="p">Rarely/not at all</span>
				</p>
				<p style="text-indent: 0pt;text-align: left;">
					<br>
				</p>
            </li>
        </ol>
			
		<p style="text-indent: 0pt;text-align: left;">
			Note: You may be contacted by Skills First (Victorian Government) as part of quality assurance.
		</p>
		
		*/ ?>
			
        <table cellspacing="0" style="width: 100%; border-collapse:collapse; width: 100%;">

            <tr style="height:23pt">

                <td bgcolor="#3975C4" style="width:538pt;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E">

                    <p class="s19" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        ENGLISH LANGUAGE & LITERACY ASSESSMENT

                    </p>

                </td>

            </tr>

        </table>

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <h2 style="padding-top: 4pt;text-indent: 0pt;text-align: left;">

            This assessment will cover

        </h2>

        <p class="s20" style="text-indent: 0pt;text-align: left;">

            

            <span style="margin: 0 80px 0 0; font-family: Arial, sans-serif;">

                Learning

            </span>

            

            <span style="margin: 0 80px 0 0; font-family: Arial, sans-serif;">

                Reading

            </span>

            

            <span style="margin: 0 80px 0 0; font-family: Arial, sans-serif;">

                Writing

            </span>

            

            <span style="margin: 0 80px 0 0; font-family: Arial, sans-serif;">

                Oral Communication

            </span>

            

            <span style="margin: 0 80px 0 0; font-family: Arial, sans-serif;">

                Numeracy

            </span>

        </p>

		<p>

			The entire Skills Check is designed to take approximately one hour to complete; that is 15 minutes for each of the four skills checks.

		</p>

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <table cellspacing="0" style="border-collapse:collapse; width: 100%;">

            <tr style="height:18pt">

                <td colspan="4" style="width:538pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s21" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Personal details

                    </p>

                </td>

            </tr>

            <tr style="height:35pt">

                <td colspan="3" style="width:319pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s22" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Family name:<input class="blankspace" id="input22" name="input22"  style="width: 90%;" type="text">

                    </p>

                </td>

                <td style="width:219pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s22" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Given name(s):<input class="blankspace" id="input23" name="input23"  style="width: 80%;" type="text">

                    </p>

                </td>

            </tr>

            <tr style="height:13pt">

                <td rowspan="2" style="width:128pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s22" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Date of birth: <input class="blankspace" id="input24" name="input24"  style="width: 64%;" type="text" placeholder="(DD/MM/YYYY)">

                    </p>

                </td>

                <td style="width:48pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s22" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Sex:

                    </p>

                </td>

                <td rowspan="2" style="width:143pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s22" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        Contact telephones:<input class="blankspace" id="input25" name="input25"  style="width: 54%;" type="text">

                    </p>

                </td>

                <td rowspan="2" style="width:219pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s22" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">

                        E-mail:<input class="blankspace" id="input26" name="input26"  style="width: 88%;" type="text">

                    </p>

                </td>

            </tr>

            <tr style="height:24pt">

                <td style="width:48pt;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s23" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox63" value="1">

                        <span class="s22">

                            Male

                        </span>

                    </p>

                    <p class="s23" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox63" value="2">

                        <span class="s22">

                            Female

                        </span>

                    </p>

                </td>

            </tr>

        </table>

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <p style=";text-indent: 0pt;line-height: 1pt;text-align: left;">

            <span>

                <img alt="image" height="0" src="images/Image_0003.png" width="722"/>

            </span>

        </p>



		<!--<p class="s25" style="padding-top: 0; background-color: #808080; font-weight: 600; text-indent: 0pt;text-align: left;padding: 5px 10px;color: #fff;font-size: 15px;">

			Part One: Oral communication and learning skills

        </p>

        <p class="s25" style="padding-top: 9pt;text-indent: 0pt;text-align: left;">

            This interview should take approximately 15 minutes. There are three tasks and each should take about 5 minutes.

        </p>

        <h3 style="padding-top: 9pt;text-indent: 0pt;text-align: left;">

            Task 1:

            <span class="s25">

                The interviewer will ask you a series of questions

            </span>

        </h3>

        <h3 style="text-indent: 0pt;line-height: 13pt;text-align: left;">

            Task 2

            <span class="s25">

                : Informal discussion.

            </span>

        </h3>

        <h3 style="text-indent: 0pt;line-height: 13pt;text-align: left;">

            Task 3:

            <span class="s25">

                Giving an opinion

            </span>

        </h3>

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">

            <tr style="height:15pt">

                <td bgcolor="#808080" colspan="5" style="width:540pt;border-bottom-style:solid;border-bottom-width:1pt">

                    <p class="s26" style="text-indent: 0pt;line-height: 14pt; padding: 5px 7px; text-align: left;">

                        Results:

                        <b>

                            Oral communication

                        </b>

                    </p>

                </td>

            </tr>

            <tr style="height:21pt">

                <td style="width:108pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s28" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        ACSF level:

                    </p>

                </td>

                <td style="width:108pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s29" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox64" value="1">

                        <span class="s30">

                        </span>

                        <span class="s28">

                            Pre-Level 1

                        </span>

                    </p>

                </td>

                <td style="width:108pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s29" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox64" value="2">

                        <span class="s30">

                        </span>

                        <span class="s28">

                            Level 1

                        </span>

                    </p>

                </td>

                <td style="width:107pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s29" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox64" value="3">

                        <span class="s30">

                        </span>

                        <span class="s28">

                            Level 2

                        </span>

                    </p>

                </td>

                <td style="width:109pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s29" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox64" value="4">

                        <span class="s30">

                        </span>

                        <span class="s28">

                            Level 3

                        </span>

                    </p>

                </td>

            </tr>

        </table>-->

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <p style="padding-left: 5pt;text-indent: 0pt;line-height: 1pt;text-align: left;">

            <span>

                <img alt="image" height="0" src="images/Image_0004.png" width="723"/>

            </span>

        </p>

        <p style="padding-top: 8pt;background-color: #808080; padding: 5px 7pt;text-indent: 0pt;text-align: left;">

            <span class="s24">

                Part Two: Reading

            </span>

        </p>

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">

            Read the questions below and tick (

            <span class="s20"></span>

            )

            <u>

                ONE

            </u>

            correct answer:

        </p>

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>



        <ol id="l29">

			<li style="padding-top: 4pt;text-indent: -18pt;text-align: left;">

					<h3 style="display: inline;">

						This medicine should be used before which date?

					</h3>

					<p style="text-indent: 0pt;text-align: left;">

						<br>

					</p>

					<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

						<input type="radio" class="checkbox" name="checkbox65" value="1">

						<span class="s33">

						</span>

						<span class="p">

							24 January 2011

						</span>

					</p>

					<p style="text-indent: 0pt;text-align: left;">

						<br>

					</p>

					<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

						<input type="radio" class="checkbox" name="checkbox65" value="2">

						<span class="s33">

						</span>

						<span class="p">

							30 June 2012

						</span>

					</p>

					<p style="text-indent: 0pt;text-align: left;">

						<br>

					</p>

					<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

						<input type="radio" class="checkbox" name="checkbox65" value="3">

						<span class="s33">

						</span>

						<span class="p">

							20 July 2012

						</span>

					</p>

					<p style="text-indent: 0pt;text-align: left;">

						<br>

					</p>

					<p style="padding-left: 5pt;text-indent: 0pt;line-height: 1pt;text-align: left;">

						<span>

							<img alt="image" src="images/Image_0006.png" width="723" height="0">

						</span>

					</p>

					<p style="text-indent: 0pt;text-align: right; margin-top: -159px;">

						<span>

							<img alt="image" height="138" src="images/Image_005.jpg" width="154"/>

						</span>

					</p>

					<p style="text-indent: 0pt;text-align: left;">

						<br>

					</p>

            </li>



				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

				<br><br>



            <li style="text-indent: -18pt;text-align: left;">

                <h2 style="display: inline;">

                    What time does the clinic open on Saturdays?

                </h2>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox66" value="1">

                    <span class="s33">

                    </span>

                    <span class="p">

                        9.00 am

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox66" value="2">

                    <span class="s33">

                    </span>

                    <span class="p">

                        8.30 am

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

				<p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox66" value="3">

                    <span class="s33">

                    </span>

                    <span class="p">

                        11.30 pm

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: right; margin-top: -150px;">

                    <span>

                        <img alt="image" src="images/Image_007.jpg" width="246" height="199">

                    </span>

                </p>

                <p style="padding-left: 7pt;text-indent: 0pt;text-align: left;">

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-top: 4pt;text-indent: -18pt;text-align: left;">

                <h2 style="display: inline;">

                    What is the meaning of this sign?

                </h2>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p class="s32" style="padding-left: 20px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox67" value="1">

                    <span class="s33">

                    </span>

                    <span class="p">

                        WARNING: Hot liquid

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p class="s32" style="padding-left: 20px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox67" value="2">

                    <span class="s33">

                    </span>

                    <span class="p">

                        WARNING: Slippery floor

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p class="s32" style="padding-left: 20px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox67" value="3">

                    <span class="s33">

                    </span>

                    <span class="p">

                        WARNING: Dangerous chemicals

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: right; margin-top: -120px;">

                    <span>

                        <img alt="image" height="126" src="images/Image_009.jpg" width="120"/>

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <h3 style="padding-top: 4pt;padding-left: 0pt; font-size: 16px; text-indent: 0pt;text-align: left;">

                    Xin works in a hospital. Here is his Weekly Time Sheet.<br>Use it to answer the questions below.

                </h3>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="padding-left: 5pt;text-indent: 0pt;line-height: 1pt;text-align: left;">

                    <span>

                        <img alt="image" height="0" src="images/Image_011.png" width="723"/>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: right; margin-top: -90px; ">

                    <span>

                        <img alt="image" height="187" src="images/Image_010.png" width="auto"/>

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-top: 8pt; text-indent:-18pt; text-align: left;">

                <p style="display: inline; font-weight: 600;">

                    On Wednesday 8

                    <span class="s35">

                        th

                    </span>

                    October, what time does Xin finish work?

                </p>

                <p class="s32" style="padding-top: 6pt;padding-left: 13pt;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox68" value="1">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 100px;">

                        17.30

                    </span>

                    <input type="radio" class="checkbox" name="checkbox68" value="2">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 100px;">

                        18.00

                    </span>

                    <input type="radio" class="checkbox" name="checkbox68" value="3">

                    <span class="s33">

                    </span>

                    <span class="p">

                        10.30

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

			<li style="padding-top: 8pt;text-indent: -18pt;text-align: left;">

                <p style="display: inline; font-weight: 600;">

                    What is the address of the Matter Hospital?

                </p>

                <p class="s32" style="padding-top: 7pt;padding-left: 20px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox69" value="1">

                    <span class="s33">

                    <span class="s33">

                    </span>

                    <span class="p">

                        58 Riverton St. Brisbane 4001

                    </span>

                </p>

                <p class="s32" style="padding-top: 7pt;padding-left: 20px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox69" value="2">

                    <span class="s33">

                    </span>

                    <span class="p">

                        58 Riverview St. Brisbane 4000

                    </span>

                </p>

                <p class="s32" style="padding-top: 7pt;padding-left: 20px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox69" value="3">

                    <span class="s33">

                    </span>

                    <span class="p">

                        85 River St. Sydney 2000

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <h2 style="padding-top: 9pt;padding-left: 0pt;text-indent: 0pt;text-align: left;">

                    Read the following information from a newspaper and answer the questions below

                    <span class="h1">

                        .

                    </span>

                </h2>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="padding-left: 42pt;text-indent: 0pt;text-align: center;">

                    <span>

                        <img alt="image" height="193" src="images/Image_014.jpg" width="608"/>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-top: 12pt;text-indent: -18pt;text-align: left;">

                <p class="s25" style="display: inline; font-weight: 600;">

                    What is the age range of the children in the study?

                </p>

                <p class="s36" style="padding-top: 6pt;padding-left: 20px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox70" value="1">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 100px;">

                        1 to 5 years

                    </span>

                    <input type="radio" class="checkbox" name="checkbox70" value="2">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 100px;">

                        0 to 8 years

                    </span>

                    <input type="radio" class="checkbox" name="checkbox70" value="3">

                    <span class="s37">

                    </span>

                    <span class="s25">

                        1 to 8 years

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="text-indent: -18pt;text-align: left;">

                <p class="s25" style="display: inline; font-weight: 600;">

                    How many children in the study were involved in car crashes?

                </p>

                <p class="s36" style="padding-top: 6pt;padding-left: 20px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox71" value="1">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 50px;">

                        Nearly one hundred

                    </span>

                    <input type="radio" class="checkbox" name="checkbox71" value="2">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 50px;">

                        nearly one thousand

                    </span>

                    <input type="radio" class="checkbox" name="checkbox71" value="3">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 50px;">

                        nearly ten thousand

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <h3 style="padding-top: 4pt;padding-left: 0pt;text-indent: 0pt;text-align: left;">

                    Here is information about blood pressure. Read it and then answer the questions.

                </h3>

				<ul id="l30" style="margin-left: 20px;">

                    <li style="padding-left: 0pt;text-indent: -14pt;line-height: 13pt;text-align: left;">

                        <p class="s25" style="display: inline;">

                            Blood pressure is the force of blood against the walls of the arteries in the heart.

                        </p>

                    </li>

                    <li style="padding-left: 0pt;text-indent: -14pt;line-height: 13pt;text-align: left;">

                        <p class="s25" style="display: inline;">

                            The picture shows a patient having his blood pressure checked.

                        </p>

                    </li>

                    <li style="padding-left: 0pt;text-indent: -14pt;line-height: 13pt;text-align: left;">

                        <p class="s25" style="display: inline;">

                            Blood pressure is a vital sign of life.

                        </p>

                    </li>

                </ul>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-left: 0;text-indent: -18pt;text-align: left;">

                <p class="s25" style="display: inline; font-weight: 600;">

                    Blood pressure is mainly concerned with which part of the body?

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p class="s36" style="padding-left: 18px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox72" value="1">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 130px;">

                        The heart

                    </span>

                    <input type="radio" class="checkbox" name="checkbox72" value="2">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 130px;">

                        The brain

                    </span>

                    <input type="radio" class="checkbox" name="checkbox72" value="3">

                    <span class="s37">

                    </span>

                    <span class="s25">

                        The lungs

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-left: 0;text-indent: -18pt;text-align: left;">

                <p class="s25" style="display: inline; font-weight: 600;">

                    This information:

                </p>

                <p class="s36" style="padding-left: 20px; padding-top: 7px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox73" value="1">

                    <span class="s37">

                    </span>

                    <span class="s25">

                        warns the reader about the dangers of high blood pressure;

                    </span>

                </p>

                <p class="s36" style="padding-top: 7px;padding-left: 20px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox73" value="2">

                    <span class="s37">

                    </span>

                    <span class="s25">

                        informs the reader about blood pressure;

                    </span>

                </p>

                <p class="s36" style="padding-top: 7px;padding-left: 20px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox73" value="3">

                    <span class="s37">

                    </span>

                    <span class="s25">

                        instructs the reader on how to use a blood pressure device.

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

				<p style="text-indent: 0pt;text-align:right;margin-top: -225px;">

                    <span>

                        <img alt="image" src="images/Image_016.jpg" width="119" height="175">

                    </span>

                </p>

                <!--<p style="padding-left: 8pt;text-indent: 0pt;line-height: 1pt;text-align: left;">

                    <span>

                        <img alt="image" height="0" src="images/Image_017.png" width="722"/>

                    </span>

                </p>-->

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <h3 style="padding-top: 4pt;padding-left: 0pt;text-indent: 0pt;text-align: left;">

                    Look at the poster below that contains information about anaphylaxis:

                </h3>
                
                <p style="text-indent: 0pt;margin: 0 auto;text-align: center;">

                    <span>

                        <img alt="image" src="images/Image_018.jpg" width="500">

                    </span>

                </p>

                <table cellspacing="0" style="border-collapse:collapse;">

                    <tr style="height:18pt">

                        <td style="width:502pt">

                            <p class="s38" style="padding-top: 10px;Lay them flapadding-left: 0pt;text-indent: 0pt;line-height: 12pt;text-align: left;">

                                Choose the best answer for each of the following questions, based on the information in the poster.

                            </p>

                        </td>

                    </tr>

                    <tr style="height:92pt">

                        <td style="width:502pt">

                            <p class="s38" style="padding-top: 5pt;padding-left: 22px;padding-right: 274pt;text-indent: -18pt;text-align: left;">

                                10. For a person suffering from a mild to moderate allergic reaction caused by a bee sting, what is the first thing you do?

                            </p>

                            <p class="s39" style="padding-top: 7px; padding-left: 22px;text-indent: 0pt;line-height: 13pt;text-align: left;">

                                <input type="radio" class="checkbox" name="checkbox74" value="1">

                                <span class="s40">

                                </span>

                                <span class="s38">

                                    Give (administer) the EpiPen

                                </span>

                            </p>

                            <p class="s39" style="padding-top: 7px; padding-left: 22px;text-indent: 0pt;line-height: 13pt;text-align: left;">

                                <input type="radio" class="checkbox" name="checkbox74" value="2">

                                <span class="s40">

                                </span>

                                <span class="s38">

                                    Flick out the sting

                                </span>

                            </p>

                            <p class="s39" style="padding-top: 7px; padding-left: 22px;text-indent: 0pt;line-height: 13pt;text-align: left;">

                                <input type="radio" class="checkbox" name="checkbox74" value="3">

                                <span class="s40">

                                </span>

                                <span class="s38">

                                    Quickly phone a member of the family

                                </span>

                            </p>

                        </td>

                    </tr>

                    <tr style="height:133pt">

                        <td style="width:502pt">

                            <p class="s38" style="padding-top: 25pt;padding-left: 22px;padding-right: 296pt;text-indent: -18pt;text-align: justify;">

                                11. Someone is suffering from a severe allergic reaction. You administer an EpiPen.

                            </p>

                            <p class="s38" style="padding-left: 22px;padding-right: 272pt;text-indent: 0pt;text-align: left;">

                                What is the step after pulling off the grey safety cap?

                            </p>

                            <p style="text-indent: 0pt;text-align: left;">

                                <br/>

                            </p>

                            <p class="s39" style="padding-left: 22px;text-indent: 0pt;text-align: left;">

                                <input type="radio" class="checkbox" name="checkbox75" value="1">

                                <span class="s40">

                                </span>

                                <span class="s38">

                                    Form a fist around the EpiPen

                                </span>

                            </p>

                            <p class="s39" style="padding-top: 7px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                                <input type="radio" class="checkbox" name="checkbox75" value="2">

                                <span class="s40">

                                </span>

                                <span class="s38">

                                    Push down hard until you hear a click

                                </span>

                            </p>

                            <p class="s39" style="padding-top: 7px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                                <input type="radio" class="checkbox" name="checkbox75" value="3">

                                <span class="s40">

                                </span>

                                <span class="s38">

                                    Place the black end against their thigh

                                </span>

                            </p>

                        </td>

                    </tr>

                    <tr style="height:113pt">

                        <td style="width:502pt">

                            <p class="s38" style="padding-top: 25pt;padding-left: 22px;padding-right: 263pt;text-indent: -18pt;text-align: left;">

                                12. A client with a history of anaphylaxis complains that their tongue is beginning to swell. What is the first thing that the flowchart advises you to do?

                            </p>

                            <p class="s39" style="padding-top: 7px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                                <input type="radio" class="checkbox" name="checkbox76" value="1">

                                <span class="s40">

                                </span>

                                <span class="s38">

                                    Lay them flat

                                </span>

                            </p>

                            <p class="s39" style="padding-top: 10px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                                <input type="radio" class="checkbox" name="checkbox76" value="2">

                                <span class="s40">

                                </span>

                                <span class="s38">

                                    Phone an ambulance

                                </span>

                            </p>

                            <p class="s39" style="padding-top: 10px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                                <input type="radio" class="checkbox" name="checkbox76" value="3">

                                <span class="s40">

                                </span>

                                <span class="s38">

                                    Stay with the person and call for help

                                </span>

                            </p>

                        </td>

                    </tr>

                </table>


                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>
                
        <h2 style="padding-top: 9pt;padding-bottom: 7px; border-bottom: 2px solid #000;text-indent: 0pt;text-align: justify;">

            Incident / injury report form

        </h2>

                <p style="text-indent: 0pt;text-align: right; float: right; margin-left: 10px; margin-top: 20px;">

                    <span>

                        <img alt="image" height="119" src="images/Image_020.jpg" width="121"/>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: right; float: right; margin-left: 10px; margin-top: 20px;">

                    <span>

                        <img alt="image" height="119" src="images/Image_021.jpg" width="120"/>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: right; float: right; margin-left: 10px; margin-top: 20px;">

                    <span>

                        <img alt="image" height="119" src="images/Image_022.jpg" width="120"/>

                    </span>

                </p>

                <p class="s25" style="padding-top: 10pt;text-indent: 0pt;text-align: justify;">

                    Imagine that there has been an accident or incident at your<br>workplace that needs to be recorded in writing.

                </p>

                <p class="s25" style="text-indent: 0pt;text-align: left;">

                    Use the form on the next page to fill in your details and<br>describe what happened.

                </p>

                <p class="s25" style="text-indent: 0pt;text-align: left;">

                    Pretend that you are the injured person. The witness can be<br>someone you know or someone

                </p>

                <p class="s25" style="text-indent: 0pt;text-align: left;">

                    you have made up. You may use the ideas below or describe an incident<br>from your own experience at work. The incident can be real or imagined, for example:

                </p>

                <ul id="l31" style="margin-left: 45px;">

                    <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">

                        <p class="s25" style="display: inline;">

                            You slip on a wet floor and sprain your ankle

                        </p>

                    </li>

                    <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">

                        <p class="s25" style="display: inline;">

                            An electrical fire starts in the kitchen and you burn your hand

                        </p>

                    </li>

                    <li style="text-indent: -18pt;line-height: 13pt;text-align: left;">

                        <p class="s25" style="display: inline;">

                            You hurt your back while lifting a client

                        </p>

                    </li>

                </ul>

            </li>

        </ol>

        <p class="s41" style="padding-top: 9pt;text-indent: 0pt;text-align: left;">

            You have 15 minutes to complete the task. Write as much as you<br>can and check for mistakes when you are finished.

        </p>

        <p style="padding-top: 9pt;text-indent: 0pt;text-align: justify;">

            Please write clearly and tick the correct boxes.

        </p>

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">

            <tr style="height:12pt">

                <td bgcolor="#BEBEBE" style="padding: 5px 7px;width:540pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s42" style="padding-left: 2pt;text-indent: 0pt;line-height: 11pt;text-align: left;">

                        1. DETAILS OF INJURED PERSON

                    </p>

                </td>

            </tr>

            <tr style="height:125pt">

                <td style="width:540pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s43" style="padding-top: 4pt;padding-left: 10px;padding-right: 10px;padding-bottom: 10pt;text-indent: 0pt;line-height: 130%;text-align: justify;">

                        Name:

                        <span class="s44">

                            <input class="underline" id="input27" name="input27"  style="width: 95%;" type="text">

                        </span><br>

                        Address:

                        <span class="s44">

                            <input class="underline" id="input28" name="input28"  style="width: 93%;" type="text">

                        </span><br>

                        <span class="s46">

							City:

                        </span>

                        <span class="s44">

                            <input class="underline" id="input29" name="input29"  style="width: 35%;" type="text">

                        </span>

                        <span class="s46" style="margin-left: 10px;">

							Postcode:

                        </span>

                        <span class="s44">

                            <input class="underline" id="input30" name="input30"  style="width: 20%;" type="text">

                        </span>

                        <span class="s46" style="margin-left: 10px;">

							Sex:

                        </span>

                        <span class="s45" style="margin-left: 5px;">

                            <input type="radio" class="checkbox" name="checkbox78" value="1">

                        </span>

                        <span class="s46">

                        M

						</span>

                        <span class="s45" style="margin-left: 5px;">

                            <input type="radio" class="checkbox" name="checkbox78" value="2">

                        </span>

                        <span class="s46">

						F

                        </span>

                        <span class="s46" style="margin-left: 10px;">

							Date of birth:

                        </span>

                        <span class="s44">

                            <input class="underline" id="input31" name="input31" type="text" style="width: 10%;" placeholder="DD/MM/YYYY">

                        </span><br>

                        Phone: (H)

                        <span class="s44">

                            <input class="underline" id="input32" name="input32"  style="width: 28%;" type="text">

                        </span>

                        (W)

                        <span class="s44">

                            <input class="underline" id="input33" name="input33"  style="width: 28%;" type="text">

                        </span>

                        Mobile:

                        <span class="s44">

                            <input class="underline" id="input34" name="input34"  style="width: 28.5%;" type="text">

                        </span><br>

                        Email address:

                        <span class="s44">

                            <input class="underline" id="input35" name="input35"  style="width: 90%;" type="text">

                        </span><br>

                        Position:

                        <span class="s44">

                            <input class="underline" id="input36" name="input36"  style="width: 94%;" type="text">

                        </span><br>

                        <span class="s44">

							Experience in the job:

                        </span>

                        <span class="s44">

                            <input class="underline" id="input37" name="input37"  style="width: 35%;" type="text">

                        </span>

                        <span class="s44">

							(years/months)

                        </span>

                        <span class="s44" style="padding-left: 10px;">

							Start time:

                        </span>

                        <span class="s44">

                            <input class="underline" id="input38" name="input38"  style="width: 12%;" type="text">

                        </span>

                        <span class="s45">

                            <input type="radio" class="checkbox" name="checkbox79" value="1">

                        </span>

                        <span class="s46">

							am

                        </span>



                        <span class="s45">

                            <input type="radio" class="checkbox" name="checkbox79" value="2">

                        </span>

                        <span class="s46">

							pm

                        </span>

                        <br>

                        <span class="s46" style="padding-right: 20px;">

							Work arrangement

                        </span>:

                        <span class="s45">

                            <input type="radio" class="checkbox" name="checkbox80" value="1">

                        </span>

                        <span class="s46" style="padding-right: 20px;">

							Casual

                        </span>

                        <span class="s45">

                            <input type="radio" class="checkbox" name="checkbox80" value="2">

                        </span>

                        <span class="s46" style="padding-right: 20px;">

							Full-time

                        </span>

                        <span class="s45">

                            <input type="radio" class="checkbox" name="checkbox80" value="3">

                        </span>

                        <span class="s46" style="padding-right: 20px;">

							Part-time

                        </span>

                        <span class="s45">

                            <input type="radio" class="checkbox" name="checkbox80" value="4">

                        </span>

                        <span class="s46">

							Other

                        </span>

                        <span class="s44">

                            <input class="underline" id="input40" name="input40"  style="width: 52%;" type="text">

                        </span>

                    </p>

                </td>

            </tr>

            <tr style="height:12pt">

                <td bgcolor="#BEBEBE" style="width:540pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s42" style="padding: 5px 7px;text-indent: 0pt;line-height: 11pt;text-align: left;">

                        2. DETAILS OF INCIDENT

                    </p>

                </td>

            </tr>

            <tr style="height:70pt">

                <td style="width:540pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s43" style="padding: 10px;text-indent: 0pt;text-align: left;">

                        Date:

                        <span class="s44">

                            <input class="underline" id="input41" name="input41" type="text" style="width: 10%;" placeholder="DD/MM/YYYY">

                        </span>

                        Time:

                        <span class="s44">

                            <input class="underline" id="input42" name="input42" type="text" style="width: 10%;">

                        </span>

                        Location:

                        <span class="s44">

                            <input class="underline" id="input43" name="input43" type="text" style="width: 65%;">

                        </span>

                    </p>

                    <p class="s43" style="padding: 10px;text-indent: 0pt;text-align: left;">

                        Describe what happened and how:

                    </p>

                    <p class="s44" style="padding: 10px;text-indent: 0pt;text-align: left;">

                        <textarea class="underline" name="input56" style="width: 100%;border: 1px dotted" rows="3" id="input56"></textarea>

                    </p>

                </td>

            </tr>

            <tr style="height:12pt">

                <td bgcolor="#BEBEBE" style="width:540pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s42" style="padding: 5px 7px;text-indent: 0pt;line-height: 11pt;text-align: left;">

                        3. DETAILS OF WITNESSES

                    </p>

                </td>

            </tr>

            <tr style="height:53pt">

                <td style="width:540pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s43" style="padding: 10px;padding-right: 5pt;text-indent: 0pt;line-height: 140%;text-align: justify;">

                        Name:

                        <span class="s44">

                            <input class="underline" id="input44" name="input44"  style="width: 94.5%;" type="text">

                        </span><br>

                        Address:

                        <span class="s44">

                            <input class="underline" id="input45" name="input45"  style="width: 93.5%;" type="text">

                        </span><br>



                        Phone: (H)

                        <span class="s44">

                            <input class="underline" id="input46" name="input46"  style="width: 28%;" type="text">

                        </span>

                        (W)

                        <span class="s44">

                            <input class="underline" id="input47" name="input47"  style="width: 28%;" type="text">

                        </span>

                        Mobile:

                        <span class="s44">

                            <input class="underline" id="input48" name="input48"  style="width: 28.5%;" type="text">

                        </span>

                    </p>

                </td>

            </tr>

            <tr style="height:12pt">

                <td bgcolor="#BEBEBE" style="width:540pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s42" style="padding: 5px 7px;text-indent: 0pt;line-height: 11pt;text-align: left;">

                        4. DETAILS OF INJURY

                    </p>

                </td>

            </tr>

            <tr style="height:69pt">

                <td style="width:540pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s43" style="padding: 10px;text-indent: 0pt;line-height: 140%;text-align: justify;">

                        Nature of injury (e.g. burn, cut, sprain):

                        <span class="s44">

                            <input class="underline" id="input49" name="input49"  style="width: 76%;" type="text">

                        </span><br>

                        Cause of injury (e.g. fall, grabbed by person):

                        <span class="s44">

                            <input class="underline" id="input50" name="input50"  style="width: 72.1%;" type="text">

                        </span><br>

                        Location on body (e.g. back, left forearm):

                        <span class="s44">

                            <input class="underline" id="input51" name="input51"  style="width: 74.2%;" type="text">

                        </span><br>

                        Other issues (chair, another person, hot water):

                        <span class="s44">

                            <input class="underline" id="input52" name="input52"  style="width: 71%;" type="text">

                        </span>

                    </p>

                </td>

            </tr>

            <tr style="height:12pt">

                <td bgcolor="#BEBEBE" style="width:540pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s42" style="padding: 5px 7px;text-indent: 0pt;line-height: 11pt;text-align: left;">

                        5. TREATMENT ADMINISTERED

                    </p>

                </td>

            </tr>

            <tr style="height:51pt">

                <td style="width:540pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s43" style="padding: 10px;text-indent: 0pt;line-height: 130%;text-align: justify;">

                        First Aid given

                        <span class="s45" style="padding-left: 13px;">

                            <input type="radio" class="checkbox" name="checkbox81" value="1" checked>

                        </span>

                        <span class="s46">

							Yes

                        </span>

                        <span class="s45" style="padding-left: 13px;">

                            <input type="radio" class="checkbox" name="checkbox81" value="2">

                        </span>

                        <span class="s46">

							No

                        </span>

                        <span class="s45" style="padding-left: 20px; font-family: inherit;">

							First Aider name:

                        </span>

                        <span class="s44">

                            <input class="underline" id="input53" name="input53"  style="width: 65.8%;" type="text">

                        </span><br>

                        Treatment:

                        <span class="s44">

                            <input class="underline" id="input54" name="input54"  style="width: 92.5%;" type="text">

                        </span><br>

                        Referred to:

                        <span class="s44">

                            <input class="underline" id="input55" name="input55"  style="width: 92%;" type="text">

                        </span>

                    </p>

                </td>

            </tr>

        </table>

        <!--<p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">

            <tr style="height:15pt">

                <td bgcolor="#808080" colspan="5" style="width:540pt;border-bottom-style:solid;border-bottom-width:1pt">

                    <p class="s26" style="padding: 5px 7px;text-indent: 0pt;line-height: 14pt;text-align: left;">

                        Results:

                        <b>

                            Writing

                        </b>

                    </p>

                </td>

            </tr>

            <tr style="height:21pt">

                <td style="width:108pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s28" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        ACSF level:

                    </p>

                </td>

                <td style="width:108pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s29" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox82" value="1">

                        <span class="s30">

                        </span>

                        <span class="s28">

                            Pre-Level 1

                        </span>

                    </p>

                </td>

                <td style="width:108pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s29" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox82" value="2">

                        <span class="s30">

                        </span>

                        <span class="s28">

                            Level 1

                        </span>

                    </p>

                </td>

                <td style="width:107pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s29" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox82" value="3">

                        <span class="s30">

                        </span>

                        <span class="s28">

                            Level 2

                        </span>

                    </p>

                </td>

                <td style="width:109pt;border-top-style:solid;border-top-width:1pt;border-left-style:solid;border-left-width:1pt;border-bottom-style:solid;border-bottom-width:1pt;border-right-style:solid;border-right-width:1pt">

                    <p class="s29" style="padding-top: 2pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="checkbox82" value="4">

                        <span class="s30">

                        </span>

                        <span class="s28">

                            Level 3

                        </span>

                    </p>

                </td>

            </tr>

        </table>-->

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <p style="padding-left: 9pt;text-indent: 0pt;text-align: left;">

        </p>

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <p style="padding: 5px 7px;background-color:#808080; text-indent: 0pt;line-height:100%;text-align: left;">

            <span class="s24" style="">

                Part Three: Numeracy

            </span><br>

		</p>

		<br>

		<p>

            <span class="h2">Read the questions below and tick (</span>

            <span class="s47"></span>

            <span class="h2">)</span>

            <span class="s48">

                ONE

            </span>

            <span class="h2">

                correct answer. Calculators may be used.

            </span>

        </p><br>

        <ol id="l32">

			<li style="padding-left: 0px;text-indent: -18pt;text-align: left;">

                <p style="display: inline;padding-left: 7px;">

                    How much for a coffee and a pie at the staff canteen?

                </p>

                <p class="s32" style="padding-top: 9pt;padding-left: 22px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox83" value="1">

                    <span class="s33">

                    </span>

                    <span class="p">

                        $5.00

                    </span>

                </p>

                <p class="s32" style="padding-top: 9pt;padding-left: 22px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox83" value="2">

                    <span class="s33">

                    </span>

                    <span class="p">

                        $7.00

                    </span>

                </p>

                <p class="s32" style="padding-top: 9pt;padding-left: 22px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox83" value="3">

                    <span class="s33">

                    </span>

                    <span class="p">

                        $6.50

                    </span>

                </p>

                <p style="padding-left: 7pt; padding-top: 10px;text-indent: 0pt;line-height: 1pt;text-align: left;">

                    <span>

                        <img alt="image" height="0" src="images/Image_026.png" width="722"/>

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: right;margin-top: -158px;">

					<span>

						<img alt="image" src="images/Image_025.png" width="382" height="145">

					</span>

				</p>

				<p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

			<li style="padding-left: 0px;text-indent: -18pt;text-align: left;">

                <p style="display: inline;padding-left: 7px;">

                    Which medicine glass is ¾ full?

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="padding-left: 0;text-indent: 22px;text-align: left;">

                    <span class="s32">

                        <input type="radio" class="checkbox" name="checkbox84" value="1">

                    </span>

                    <span class="s33">

                    a

                    </span>

                    <span class="s36" style="padding-left: 50px;">

                        <input type="radio" class="checkbox" name="checkbox84" value="2">

                    </span>

                    <span class="s33">

                    b

                    </span>

                    <span class="s36" style="padding-left: 50px;">

                        <input type="radio" class="checkbox" name="checkbox84" value="3">

                    </span>

                    <span class="s37">

                    c

                    </span>

                    <span class="s36" style="padding-left: 50px;">

                        <input type="radio" class="checkbox" name="checkbox84" value="4">

                    </span>

                    <span class="s37">

                    d

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="text-indent: 0pt;text-align: right; margin-top: -85px;">

                    <span>

                        <img alt="image" height="88" src="images/Image_027.jpg" width="363"/>

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="padding-left: 7pt;text-indent: 0pt;line-height: 1pt;text-align: left;">

                    <span>

                        <img alt="image" height="0" src="images/Image_028.png" width="722"/>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

			<li style="padding-left: 0;text-indent: -18pt;text-align: left;">

                <p style="display: inline;padding-left: 7px;">

                    The graph represents the results of a survey of people’s eye colour.

                </p><br>

                <p style="display: inline;padding-left: 22px;">

				From the graph, the most common eye colour was:

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p class="s32" style="padding-left: 22px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox85" value="1">

                    <span class="s33">

                    </span>

                    <span class="p">

                        Brown

                    </span>

                </p>

                <p class="s32" style="padding-top: 10px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox85" value="2">

                    <span class="s33">

                    </span>

                    <span class="p">

                        Blue

                    </span>

                </p>

                <p class="s32" style="padding-top: 10px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox85" value="3">

                    <span class="s33">

                    </span>

                    <span class="p">

                        Green

                    </span>

                </p>

                <p class="s32" style="padding-top: 10px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox85" value="4">

                    <span class="s33">

                    </span>

                    <span class="p">

                        Hazel

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: right; margin-top: -195px;">

                    <span>

                        <img alt="image" height="256" src="images/Image_029.jpg" width="389"/>

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="padding-left: 21pt;text-indent: 0pt;line-height: 1pt;text-align: left;">

                    <span>

                        <img alt="image" height="0" src="images/Image_030.png" width="304"/>

                    </span>

                </p>

                <h2 style="padding-top: 1pt;padding-left: 0pt;text-indent: 0pt;text-align: left;">

                    Use the electricity bill to answer the following questions.

                </h2>

            </li>

            <li style="padding-top: 10px;padding-left: 0;text-indent: -18pt;text-align: left;">

                <p class="s25" style="display: inline;">

                    How much must be paid by 20 February 2012?

                </p>

                <p class="s36" style="padding-top: 10px;padding-left: 17px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox86" value="1">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 20px;">

                        $220.93

                    </span>

                    <input type="radio" class="checkbox" name="checkbox86" value="2">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 20px;">

                        $210.24

                    </span>

                    <input type="radio" class="checkbox" name="checkbox86" value="3">

                    <span class="s37">

                    </span>

                    <span class="s25">

                        $196.90

                    </span>

                </p>

            </li>

            <li style="padding-top: 20px;padding-left: 0;text-indent: -18pt;text-align: left;">

                <p class="s25" style="display: inline;">

                    Was the electricity bill cheaper than the last bill?

                </p>

                <p class="s36" style="padding-top: 10px;padding-left: 17px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox87" value="1">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 20px;">

                        No

                    </span>

                    <input type="radio" class="checkbox" name="checkbox87" value="2">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 20px;">

                        Yes

                    </span>

                </p>

            </li>

            <li style="padding-top: 20px;padding-left: 0;text-indent: -18pt;line-height: 114%;text-align: left;">

                <p class="s25" style="display: inline;">

                    It is 11 am. Linda arranges to meet a client in ¾ of an hour.

                </p><be><br>

                <p class="s25" style="display: inline; padding-left: 15px;">

                    What time will it be when Linda meets her client?

                </p>

                <p class="s36" style="padding-top: 10px;padding-left: 17px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox88" value="1">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 20px;">

                        11:15 am

                    </span>

                    <input type="radio" class="checkbox" name="checkbox88" value="2">

                    <span class="s37">

                    </span>

                    <span class="s25" style="padding-right: 20px;">

                        11:30 am

                    </span>

                    <input type="radio" class="checkbox" name="checkbox88" value="3">

                    <span class="s37">

                    </span>

                    <span class="s25">

                        11:45 am

                    </span>

                </p>

            </li>

            <li style="padding-top: 20px;padding-left: 0;text-indent: -18pt;line-height: 115%;text-align: left;">

                <p style="display: inline;">

                    Maria is paid $20 per hour. How much did she earn

                </p><br>

				<p style="display: inline; padding-left: 15px; ">

				if she worked for 7 hours?

                </p>

                <p class="s32" style="padding-top: 10px;padding-left: 17px;text-indent: 0pt;line-height: 14pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox89" value="1">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        $140

                    </span>

                    <input type="radio" class="checkbox" name="checkbox89" value="2">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        $27

                    </span>

                    <input type="radio" class="checkbox" name="checkbox89" value="3">

                    <span class="s33">

                    </span>

                    <span class="p">

                        $207

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: right; margin-top: -288px;">

                    <span>

                        <img alt="image" height="268" src="images/Image_031.png" width="372"/>

                    </span>

                </p>

                <p style="padding-left: 9pt;text-indent: 0pt;text-align: left;">

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="padding-top: 4pt;padding-left: 0;text-indent: 0pt;text-align: left;">

                    The following directions are given for the Tablet.

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-left: 0;text-indent: -18pt;text-align: left;">

                <p style="display: inline;">

                    A 15 year old took 2 tablets at 10:00 am. The earliest they could take another tablet is:

                </p>

                <p class="s32" style="padding-top: 10px;padding-left: 13px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox90" value="1">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        1:00 pm

                    </span>

                    <input type="radio" class="checkbox" name="checkbox90" value="2">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        2:00 pm

                    </span>

                    <input type="radio" class="checkbox" name="checkbox90" value="3">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        3:00 pm

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-top: 4pt;padding-left: 0;text-indent: -17pt;text-align: left;">

                <p style="display: inline;">

                    A 15 year old can take a dose of:

                </p>

                <p class="s32" style="padding-top: 9pt;padding-left: 13pt;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox91" value="1">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        Only 1 tablet

                    </span>

                    <input type="radio" class="checkbox" name="checkbox91" value="2">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        3 tablets

                    </span>

                    <input type="radio" class="checkbox" name="checkbox91" value="3">

                    <span class="p">

                        1 to 2 tablets

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: right;margin-top: -152px;">

                    <span>

                        <img alt="image" src="images/Image_033.png" width="357" height="148">

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-left: 0;text-indent: -17pt;text-align: left;">

                <p style="display: inline;">

                    The temperature on the thermometer is:

                </p>

                <p style="padding-top: 10px;padding-left: 19pt;text-indent: 0pt;text-align: left;">

                    <span class="s32">

                        <input type="radio" class="checkbox" name="checkbox92" value="1">

                    </span>

                    <span class="s33" style="padding-right: 20px;">

						39.5°C

                    </span>

                    <span class="s32">

                        <input type="radio" class="checkbox" name="checkbox92" value="2">

                    </span>

                    <span class="s33" style="padding-right: 20px;">

						39.8°C

                    </span>

                    <span class="s36">

                        <input type="radio" class="checkbox" name="checkbox92" value="3">

                    </span>

                    <span class="s37">

						39.0°C

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: right; margin-top: -42px;">

                    <span>

                        <img alt="image" height="40" src="images/Image_035.jpg" width="311"/>

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-top: 4pt;padding-left: 0;text-indent: -18pt;line-height: 114%;text-align: left;">

                <p style="display: inline; ">

                    The amount of alcohol you can drink and then legally drive a car is 0.05%. If a

                </p><br>

				<p style="display: inline; padding-left: 21px;">driver has a blood alcohol reading of 0.005%, can they legally drive?

                </p>

                <p class="s32" style="padding-top: 5px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox93" value="1">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        Yes they can

                    </span>

                    <input type="radio" class="checkbox" name="checkbox93" value="2">

                    <span class="s33">

                    </span>

                    <span class="p">

                        No they can’t

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

				<p style="text-indent: 0pt;text-align: right; margin-top: -85px;">

                    <span>

                        <img alt="image" src="images/Image_036.png" width="120" height="103">

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-left: 0;text-indent: -18pt;text-align: left;">

                <p style="display: inline;">

                    A tablet contains 70mg of drug X. How many mg of drug X does one and a half tablets contain?

                </p>

                <p class="s32" style="padding-top: 10px;padding-left: 17pt;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox94" value="1">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        135mg

                    </span>

                    <input type="radio" class="checkbox" name="checkbox94" value="2">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        120mg

                    </span>

                    <input type="radio" class="checkbox" name="checkbox94" value="3">

                    <span class="s33">

                    </span>

                    <span class="p">

                        105

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

                <p style="padding-left: 7pt;text-indent: 0pt;line-height: 1pt;text-align: left;">

                    <span>

                        <img alt="image" height="0" src="images/Image_038.png" width="722"/>

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-left: 0;text-indent: -18pt;text-align: left;">

                <p style="display: inline;">

                    Sandano’s weekly wage is $320. He is given a wage rise of 5%. What is his new wage?

                </p>

                <p class="s32" style="padding-top: 10px;padding-left: 20px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox95" value="1">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        $325

                    </span>

                    <input type="radio" class="checkbox" name="checkbox95" value="2">

                    <span class="s33">

                    </span>

                    <span class="p" style="padding-right: 20px;">

                        $336

                    </span>

                    <input type="radio" class="checkbox" name="checkbox95" value="3">

                    <span class="s33">

                    </span>

                    <span class="p">

                        $330

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: left;">

                    <br/>

                </p>

            </li>

            <li style="padding-left: 0;text-indent: -18pt;text-align: left;">

                <p style="display: inline;">

                    You have to buy juice for the staff party.

                </p>

                <p style="padding-top: 2pt;padding-left: 23px;text-indent: 0pt;text-align: left;">

                    Which is the best buy if you have to get 2 Litres of juice?

                </p>

                <p class="s32" style="padding-top: 10px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox96" value="1">

                    <span class="s33">

                    </span>

                    <span class="p">

                        A 2L bottle at $3.80

                    </span>

                </p>

                <p class="s32" style="padding-top: 10px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox96" value="2">

                    <span class="s33">

                    </span>

                    <span class="p">

                        4 X 500 ml bottles at $1.75 each

                    </span>

                </p>

                <p class="s32" style="padding-top: 10px;padding-left: 22px;text-indent: 0pt;text-align: left;">

                    <input type="radio" class="checkbox" name="checkbox96" value="3">

                    <span class="s33">

                    </span>

                    <span class="p">

                        2 X 1Litre bottles at $1.75 each

                    </span>

                </p>

				<p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

                <p style="text-indent: 0pt;text-align: right; margin-top: -121px;">

                    <span>

                        <img alt="image" height="103" src="images/Image_040.jpg" width="78"/>

                    </span>

                </p>

            </li>

            <li style="padding-top: 26pt;padding-left: 0;text-indent: -18pt;line-height: 114%;text-align: left;">

                <p style="display: inline;">

                    The ages (in years) of five workers are listed below: 26 28 28 31 37

                </p>

            </li>

        </ol>

        <p style="padding-left: 23px;text-indent: 0pt;text-align: left;">

            The mean average age of the workers is:

        </p>

        <p class="s32" style="padding-top: 10px;padding-left: 23px;text-indent: 0pt;text-align: left;">

            <input type="radio" class="checkbox" name="checkbox97" value="1">

            <span class="s33">

            </span>

            <span class="p" style="padding-right: 20px;">

                28

            </span>

            <input type="radio" class="checkbox" name="checkbox97" value="2">

            <span class="s33">

            </span>

            <span class="p" style="padding-right: 20px;">

                26

            </span>

            <input type="radio" class="checkbox" name="checkbox97" value="3">

            <span class="s33">

            </span>

            <span class="p">

                30

            </span>

        </p>

        <p style="text-indent: 0pt;text-align: left;">

            <br/>

        </p>

        <p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin-top: 20px;">

                    <span>

                    </span>

                </p>

		<br>

        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">

            <tr>

                <td>

                    <p class="s31" style="margin-top:15pt;text-align:center;">

                        <button type="button" class="btn btn-outline-primary" id="submitForm">Submit Form</button>

                    </p>

                </td>

            </tr>

        </table>

        </form>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script type="text/javascript">

            toastr.options = {

              "closeButton": true,

              "debug": false,

              "newestOnTop": false,

              "progressBar": true,

              "positionClass": "toast-bottom-center",

              "preventDuplicates": false,

              "onclick": null,

              "showDuration": "300",

              "hideDuration": "1000",

              "timeOut": "5000",

              "extendedTimeOut": "1000",

              "showEasing": "swing",

              "hideEasing": "linear",

              "showMethod": "fadeIn",

              "hideMethod": "fadeOut"

            }

        </script>

        <script>

            $(document).ready(function() {
                $("#spinner").hide();
            });

            $(document).on('click' , '#submitForm', function(e) {

                if($("#input1").val() == ''){toastr["error"]('Please fill all Info'); $("#input1").focus(); return false;}

                if($("#input2").val() == ''){toastr["error"]('Please fill all Info'); $("#input2").focus(); return false;}

                if($("#input3").val() == ''){toastr["error"]('Please fill all Info'); $("#input3").focus(); return false;}

                if($("#input4").val() == ''){toastr["error"]('Please fill all Info'); $("#input4").focus(); return false;}

                if($("#input5").val() == ''){toastr["error"]('Please fill all Info'); $("#input5").focus(); return false;}

                if($("#input6").val() == ''){toastr["error"]('Please fill all Info'); $("#input6").focus(); return false;}

                if($("#input7").val() == ''){toastr["error"]('Please fill all Info'); $("#input7").focus(); return false;}

                if($("#input8").val() == ''){toastr["error"]('Please fill all Info'); $("#input8").focus(); return false;}

                //if($("#input9").val() == ''){toastr["error"]('Please fill all Info'); $("#input9").focus(); return false;}

                if($('input[name="checkbox6"]:checked').val() == 1){

                    if($("#input10").val() == ''){toastr["error"]('Please fill all Info'); $("#input10").focus(); return false;}

                    if($("#input11").val() == ''){toastr["error"]('Please fill all Info'); $("#input11").focus(); return false;}

                    if($("#input12").val() == ''){toastr["error"]('Please fill all Info'); $("#input12").focus(); return false;}

                    if($("#input13").val() == ''){toastr["error"]('Please fill all Info'); $("#input13").focus(); return false;}

                }

                if($("#input22").val() == ''){toastr["error"]('Please fill all Info'); $("#input22").focus(); return false;}

                if($("#input23").val() == ''){toastr["error"]('Please fill all Info'); $("#input23").focus(); return false;}

                if($("#input24").val() == ''){toastr["error"]('Please fill all Info'); $("#input24").focus(); return false;}

                if($("#input25").val() == ''){toastr["error"]('Please fill all Info'); $("#input25").focus(); return false;}

                if($("#input26").val() == ''){toastr["error"]('Please fill all Info'); $("#input26").focus(); return false;}

                if($("#input27").val() == ''){toastr["error"]('Please fill all Info'); $("#input27").focus(); return false;}

                if($("#input28").val() == ''){toastr["error"]('Please fill all Info'); $("#input28").focus(); return false;}

                if($("#input29").val() == ''){toastr["error"]('Please fill all Info'); $("#input29").focus(); return false;}

                if($("#input30").val() == ''){toastr["error"]('Please fill all Info'); $("#input30").focus(); return false;}

                if($("#input31").val() == ''){toastr["error"]('Please fill all Info'); $("#input31").focus(); return false;}

                if($("#input32").val() == ''){toastr["error"]('Please fill all Info'); $("#input32").focus(); return false;}

                if($("#input33").val() == ''){toastr["error"]('Please fill all Info'); $("#input33").focus(); return false;}

                if($("#input34").val() == ''){toastr["error"]('Please fill all Info'); $("#input34").focus(); return false;}

                if($("#input35").val() == ''){toastr["error"]('Please fill all Info'); $("#input35").focus(); return false;}

                if($("#input36").val() == ''){toastr["error"]('Please fill all Info'); $("#input36").focus(); return false;}

                if($("#input37").val() == ''){toastr["error"]('Please fill all Info'); $("#input37").focus(); return false;}

                if($("#input38").val() == ''){toastr["error"]('Please fill all Info'); $("#input38").focus(); return false;}

                if($('input[name="checkbox80"]:checked').val() == 4){

                    if($("#input40").val() == ''){toastr["error"]('Please fill all Info'); $("#input40").focus(); return false;}

                }

                if($("#input41").val() == ''){toastr["error"]('Please fill all Info'); $("#input41").focus(); return false;}

                if($("#input42").val() == ''){toastr["error"]('Please fill all Info'); $("#input42").focus(); return false;}

                if($("#input43").val() == ''){toastr["error"]('Please fill all Info'); $("#input43").focus(); return false;}

                if($("#input44").val() == ''){toastr["error"]('Please fill all Info'); $("#input44").focus(); return false;}

                if($("#input45").val() == ''){toastr["error"]('Please fill all Info'); $("#input45").focus(); return false;}

                if($("#input46").val() == ''){toastr["error"]('Please fill all Info'); $("#input46").focus(); return false;}

                if($("#input47").val() == ''){toastr["error"]('Please fill all Info'); $("#input47").focus(); return false;}

                if($("#input48").val() == ''){toastr["error"]('Please fill all Info'); $("#input48").focus(); return false;}

                if($("#input49").val() == ''){toastr["error"]('Please fill all Info'); $("#input49").focus(); return false;}

                if($("#input50").val() == ''){toastr["error"]('Please fill all Info'); $("#input50").focus(); return false;}

                if($("#input51").val() == ''){toastr["error"]('Please fill all Info'); $("#input51").focus(); return false;}

                if($("#input52").val() == ''){toastr["error"]('Please fill all Info'); $("#input52").focus(); return false;}

                if($('input[name="checkbox81"]:checked').val() == 1){

                    if($("#input53").val() == ''){toastr["error"]('Please fill all Info'); $("#input53").focus(); return false;}

                    if($("#input54").val() == ''){toastr["error"]('Please fill all Info'); $("#input54").focus(); return false;}

                    if($("#input55").val() == ''){toastr["error"]('Please fill all Info'); $("#input55").focus(); return false;}

                }
                
                if(!checkWordCount()){
                    return false;
                }
                
                $('#submitForm').prop('disabled', true);
                $('#submitForm').css('background-color', 'lightgrey');
                $('#submitForm').css('color', 'black');
                $('#submitForm').css('border', 'none');
                $("#spinner").show();
                $('#mainForm').submit();

            });
            
            function checkWordCount(){
                    s = document.getElementById("input56").value;
                    s = s.replace(/(^\s*)|(\s*$)/gi,"");
                    s = s.replace(/[ ]{2,}/gi," ");
                    s = s.replace(/\n /,"\n");
                    if (s.split(' ').length <= 50) {
                        toastr["error"]('Minimum 50 words required');
                        $("#input56").focus();
                        return false;
                    }
					return true;
                }

        </script>

    </body>

</html>

