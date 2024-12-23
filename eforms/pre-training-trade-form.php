<?php
date_default_timezone_set("Australia/Melbourne");
session_start();

if (isset($_SESSION['link2']) && $_SESSION['link2'] && isset($_SESSION['expiry2']) && $_SESSION['expiry2'] != '') {

    $now = new DateTime();
    $date = new DateTime($_SESSION['expiry2']);
    if ($date < $now) {
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
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html lang="en-au" xml:lang="en-au" xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

    <title>

        ITHEA PRE-TRAINING INTERVIEW FORM-TRADES

    </title>



    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <link href="https://vjs.zencdn.net/7.19.2/video-js.css" rel="stylesheet" />
    <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>

    <style type="text/css">
        input.underline {
            border: none;
            border-bottom: 1px dotted black;
            outline: none;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
        }

        input.blankspace,
        textarea.blankspace {
            border: none;
            outline: none;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            padding-left: 5px;
        }

        .checkbox:active,
        .checkbox:focus {
            box-shadow: none;
        }

        .checkbox:before {
            /*content: "✔";*/
            font-family: "FontAwesome";
            display: inline;
            width: 30px;
            max-width: 30px;
            height: 30px;
            max-height: 30px;
            background: white;
            color: white;
            box-shadow: none;
            padding: 1px 2px;
            font-size: 10px;
            transition: 0.5s;
            border: 1px solid black;
            line-height: normal;
            font-weight: bold;
        }

        .checkbox:checked {
            box-shadow: none;
        }

        .checkbox:checked:before {
            color: black;
            transition: 0.5s;
        }

        * {
            margin: 0;
            padding: 0;
            text-indent: 0;
        }

        .s1 {
            color: #808080;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s2 {
            color: #808080;
            font-family: Wingdings;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s3 {
            color: #808080;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .a {
            color: #808080;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s4 {
            color: #FFF;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 22pt;
        }

        .s5 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s6 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s7 {
            color: #2e2e2e;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .s8 {
            color: #808080;
            /*font-family:Wingdings; */
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .s9 {
            color: #808080;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .s10 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .s11 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 9pt;
        }

        .s12 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .s13 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s14 {
            color: #808080;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .s15 {
            color: #808080;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s16 {
            color: #808080;
            font-family: Wingdings;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s17 {
            color: #808080;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s18 {
            color: #808080;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s19 {
            color: #FFF;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 18pt;
        }

        .h2,
        h2 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s20 {
            color: black;
            font-family: Wingdings;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .p,
        p {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
            margin: 0pt;
            margin-bottom: unset !important;
        }

        .s21 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s22 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .s23 {
            color: black;
            font-family: Wingdings;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .s24 {
            color: #FFF;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s25 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        h3 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s26 {
            color: #FFF;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s28 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s29 {
            color: black;
            font-family: Webdings, serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s30 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s32 {
            color: black;
            font-family: Webdings, serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s33 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s34 {
            color: #FFF;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s35 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 8pt;
            vertical-align: 4pt;
        }

        .h1 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 14pt;
        }

        .s36 {
            color: black;
            font-family: Webdings, serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s37 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s38 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s39 {
            color: black;
            font-family: Webdings, serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s40 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s41 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        .s42 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s43 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s44 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .s45 {
            color: black;
            font-family: Webdings, serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s46 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s47 {
            color: black;
            font-family: Wingdings;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s48 {
            color: black;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: underline;
            font-size: 12pt;
        }

        .s49 {
            color: #FFF;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s50 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s51 {
            color: #777;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s52 {
            color: #808080;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 8pt;
        }

        .s53 {
            color: #777;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 8pt;
        }

        .s54 {
            color: #777;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        .s55 {
            color: #777;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 9pt;
        }

        li {
            display: block;
        }

        #l1 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l2 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l3 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l4 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l5 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l6 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l7 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l8 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l9 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l10 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l11 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l12 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l13 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l14 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l15 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l16 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l17 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l18 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l19 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l20 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l21 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l22 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l23 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l24 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l25 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l26 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l27 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l28 {
            padding-left: 0pt;
        }

        li {
            display: block;
        }

        #l29 {
            padding-left: 0pt;
            counter-reset: g1 0;
        }

        #l29>li:before {
            counter-increment: g1;
            content: counter(g1, decimal)". ";
            color: black;
            margin-left: 25px;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
        }

        #l30 {
            padding-left: 0pt;
        }

        #l30>li:before {
            content: " ";
            color: black;
            font-family: Symbol, serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        #l31 {
            padding-left: 0pt;
        }

        #l31>li:before {
            content: " ";
            color: black;
            font-family: Symbol, serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 11pt;
        }

        li {
            display: block;
        }

        #l32 {
            padding-left: 0pt;
            counter-reset: i1 0;
        }

        #l32>li:before {
            counter-increment: i1;
            content: counter(i1, decimal)". ";
            color: black;
            margin-left: 22px;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
        }

        .toast-bottom-center {
            top: 35% !important;
        }

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

        img.m_logo {
            height: 75px;
        }

        table tr {
            height: auto !important;
        }

        table tr td {
            padding-top: 5px;
            padding-bottom: 5px;
            vertical-align: top;
        }

        input[type="radio" i] {
            margin: 0 5px;
            vertical-align: top;
        }

        /*Loader*/
        .loader {
            display: block;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            z-index: 1032;
        }

        .overlay {
            display: block;
            z-index: 1031;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.8);
            cursor: wait;
        }

        .loader hr {
            border: 0;
            margin: 0;
            width: 40%;
            height: 40%;
            position: fixed;
            border-radius: 50%;
            animation: spin 2s ease infinite
        }

        .loader :first-child {
            background: #ffffff;
            animation-delay: -1.5s
        }

        .loader :nth-child(2) {
            background: #3975c4;
            animation-delay: -1s
        }

        .loader :nth-child(3) {
            background: #ffffff;
            animation-delay: -0.5s
        }

        .loader :last-child {
            background: #3975c4
        }

        @keyframes spin {

            0%,
            100% {
                transform: translate(0)
            }

            25% {
                transform: translate(160%)
            }

            50% {
                transform: translate(160%, 160%)
            }

            75% {
                transform: translate(0, 160%)
            }

        }
    </style>

</head>

<body style="max-width:1024px; width:100%; margin: 0 auto; padding:20px;">

    <div id="spinner">

        <div class="overlay"></div>

        <div class="loader">
            <hr />
            <hr />
            <hr />
            <hr />
        </div>

    </div>

    <form id="mainForm" method="post" action="processindex2.php">

        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">

            <tr>

                <td style="width:15%; padding:5px 10px;">

                    <p class="s1" style="text-align:left;">

                        Institute of Tertiary &amp; Higher Education Australia is a trading name of ITHEA Corporation
                        Pty Ltd

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
                <td colspan="4"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left; font-size:14pt;">
                        MSF30919 Certificate III in Blinds, Awnings, Security Screens and Grilles
                    </p>
                </td>
            </tr>

            <tr>
                <td colspan="4"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        Personal details – <i>Applicant to complete</i>
                    </p>
                </td>
            </tr>

            <tr>
                <td colspan="2"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Family name:<br>
                        <input class="blankspace" id="input1" name="input1" style="width: 96%;" type="text">
                    </p>
                </td>


                <td colspan="2"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;"> Given
                        name(s):<br>
                        <input class="blankspace" id="input2" name="input2" style="width: 96%;" type="text">
                    </p>
                </td>


            </tr>

            <tr>
                <td
                    style="width:25%;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Date of birth:<br>
                        <input class="blankspace" id="input3" name="input3"
                            style="width: 97%; padding: 0; margin-top:3pt;" type="text" placeholder="(DD/MM/YYYY)">
                    </p>
                </td>
                <td
                    style="width:25%;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <div class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Gender:<br>
                        <p class="s8" style="text-indent: 0pt; line-height: 10pt;text-align: left; margin-top:5pt;">
                            <input type="radio" class="checkbox" name="checkbox1" value="1">
                            <span class="s7" style="margin-right:2pt;">Male </span>
                            <input type="radio" class="checkbox" name="checkbox1" value="2">
                            <span class="s7" style="margin-right:2pt;"> Female </span>
                            <input type="radio" class="checkbox" name="checkbox1" value="3">
                            <span class="s7" style="margin-right:2pt;">Non-binary / other</span>
                        </p>
                    </div>
                </td>
                <td
                    style="width:25%;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Contact phone:<br>
                        <input class="blankspace" id="input4" name="input4"
                            style="width: 97%; padding: 0; margin-top:3pt;" type="text">
                    </p>
                </td>
                <td
                    style="width:25%;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        E-mail:<br>
                        <input class="blankspace" id="input5" name="input5"
                            style="width: 97%; padding: 0; margin-top:3pt;" type="text">
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        Education background
                    </p>
                </td>
            </tr>

            <tr style="height:14pt">

                <td colspan="2" rowspan="2"
                    style="width:376pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s9" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        Secondary school:

                        <span class="s7">

                            <input class="blankspace" id="input6" name="input6" style="width: 97%; padding-left:0"
                                type="text" placeholder="highest level completed">

                        </span>

                    </p>

                </td>

                <td rowspan="2"
                    style="width:71pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input class="blankspace" id="input7" name="input7" style="width: 64%;" type="text"
                            placeholder="Year completed">

                    </p>

                </td>

                <td
                    style="width:90pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 4pt;padding-right: 6pt;text-indent: 0pt;text-align: center;">

                        Australian qualification?

                    </p>

                </td>

            </tr>

            <tr style="height:19pt">

                <td
                    style="width:90pt;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8"
                        style="padding-top: 2pt;padding-left: 24pt;padding-right: 23pt;text-indent: 0pt;text-align: center;">

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

                <td colspan="2" rowspan="2"
                    style="width:376pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D0CECE;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <p class="s9" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        Post-secondary school:
                        <input class="blankspace" id="input8" name="input8" style="width: 97%;" type="text"
                            placeholder="highest level completed">
                    </p>
                </td>

                <td rowspan="2"
                    style="width:71pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D0CECE;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <input class="blankspace" id="input9" name="input9" style="width: 64%;" type="text"
                            placeholder="Year completed">

                    </p>

                </td>

                <td
                    style="width:90pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-left: 4pt;padding-right: 6pt;text-indent: 0pt;text-align: center;">

                        Australian qualification?

                    </p>

                </td>

            </tr>

            <tr style="height:20pt">

                <td
                    style="width:90pt;border-left-style:solid;border-left-width:1pt;border-left-color:#0071D0;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D0CECE;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8"
                        style="padding-top: 2pt;padding-left: 24pt;padding-right: 23pt;text-indent: 0pt;text-align: center;">

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

                <td colspan="4"
                    style="width:537pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#D0CECE;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p style="padding-left: 5pt;padding-right: 5pt;text-indent: 0pt;text-align: left;">

                        <span class="s11">Credit transfer</span> <span class="s12"> may be granted to those students who
                            have previously completed a course which provides equivalent learning or competency outcomes
                            to those required within the student’s current course of study. You will be required to
                            present your evidence (usually a statement of results) at the time of enrolment.</span>
                        <span class="s11">National Recognition</span> <span class="s12"> may be granted to those
                            students who have attained recognition by an RTO of an Australian Qualification Framework
                            (AQF) qualification and/or a Statement of Attainment issued by the same RTO or all other
                            RTOs.</span>

                    </p>



                </td>

            </tr>

            <tr style="height:24pt">

                <td colspan="4"
                    style="width:537pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D0CECE;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <span class="s10">
                            Credit transfer: Do you wish to apply for a Credittransfer?
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

                <td colspan="4"
                    style="width:537pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:2pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s11" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Recognition of Prior
                        Learning <span class="s12">(RPL) is an assessment process that recognises the skills and
                            knowledge you have already gained. If you have completed other courses, if you have relevant
                            work experience and work-based training or life experience, you may be able to apply for
                            credit for some or all of the units in the course you are applying for. Please attach copies
                            of supporting documents.</span></p>

                </td>

            </tr>

            <tr style="height:24pt">

                <td colspan="4"
                    style="width:537pt;border-top-style:solid;border-top-width:2pt;border-top-color:#D0CECE;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s8" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <span class="s10">

                            Skills Recognition: Do you wish to apply for Recognition of Prior Learning?

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

            <tr>
                <td colspan="4"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        ABOUT YOU
                    </p>
                </td>
            </tr>


            <tr style="height:22pt">

                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        Do you have any physical impairment that will affect your ability to complete this course?

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox61" value="1">
                        </span>
                        Yes

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox61" value="2">
                        </span>
                        No

                    </p>

                </td>

            </tr>
            <tr style="height:22pt">
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        Do you have a mental impairment that may affect your ability to complete this course?

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
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        If you answered yes – please provide details:
                    </p>
                </td>
            </tr>
            <tr style="height:22pt">
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        Do you agree to complete a survey from the National Centre of Vocational Education and Research
                        (NCEVER) or be contacted by the funding body to discuss your training?

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
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        Plagiarism and cheating are unacceptable. The use of AI will be considered as plagiarism and
                        result in re-submission or failure. Do you agree to submit your own work after reading the
                        learning material?

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

            <tr>
                <td colspan="4"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        DIGITAL LITERACY
                    </p>
                </td>
            </tr>

            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        Do you use a computer?

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="1">
                        </span>
                        Rarely/Not at all

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="2">
                        </span>
                        Sometimes

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="3">
                        </span>
                        Regularly/Often

                    </p>

                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        What do you use the computer for?

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="1">
                        </span>
                        On-line shopping

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="2">
                        </span>
                        Banking

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="3">
                        </span>
                        Social-media

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="4">
                        </span>
                        Work/Study

                    </p>

                </td>
            </tr>

            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        Do you have access to a computer or laptop with Internet, or can you access one?

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

            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        Do you have sufficient digital literacy to complete the course (are you able to use a computer
                        to type, send emails, search for websites, save and print documents).

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






        </table>

        <p style="text-indent: 0pt;text-align: left;background-color: #ccc;height: 2px;margin: 20px 0px 20px 0px;">
            <span></span>
        </p>



        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">

            <tr>

                <td bgcolor="#3975C4" colspan="4" style="">

                    <p class="s4" style="padding-left: 5pt;text-indent: 0pt;line-height: 27pt;text-align: left;">

                        ENGLISH LANGUAGE & LITERACY ASSESSMENT </p>

                </td>

            </tr>
            <tr>
                <td colspan="4"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s5" style="padding: 5pt 0 5pt 5pt; text-indent: 0pt; text-align: left;">This is an
                        assessment to help us identify nay additional support you may need to complete this course.This
                        page will cover: reading and writing. An ITHEA representative will complete each results table.
                    </p>
                </td>

            </tr>
            <tr>
                <td colspan="4"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        Part One: Writing</i>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="width:319pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;"> Think
                        about your normal workday. Describe three (3) things you do in that day at work. You must write
                        at least 30 words. </p>
                </td>
            </tr>
            <tr style="vertical-align:top;">
                <td colspan="4"
                    style="width:319pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
                        <tr>
                            <td>
                                <p class="s7"
                                    style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left; vertical-align:top;">
                                    <span>1.</span><br> <textarea name="" rows="3" id="" spellcheck="false"
                                        style="width:95%; height:100px;"></textarea>
                                </p>
                            </td>
                            <td>
                                <p class="s7"
                                    style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left; vertical-align:top;">
                                    <span>2.</span><br> <textarea name="" rows="3" id="" spellcheck="false"
                                        style="width:95%; height:100px;"></textarea>
                                </p>
                            </td>
                            <td>
                                <p class="s7"
                                    style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left; vertical-align:top;">
                                    <span>3.</span><br> <textarea name="" rows="3" id="" spellcheck="false"
                                        style="width:95%; height:100px;"></textarea>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#808080;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        Results: Writing
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        ACSF level:

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="1">
                        </span>
                        Pre-Level 1

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="2">
                        </span>
                        Level 1

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="3">
                        </span>
                        Level 2

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="4">
                        </span>
                        Level 3

                    </p>

                </td>
            </tr>
        </table>

        <p style="margin: 20px 0px 20px 0px;"></p>
        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tr>
                <td colspan="4"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        Part Two: Reading</i>
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="width:319pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;"> Read
                        through a picking slip / work order from your workplace and answer the following questions. </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0;padding: 5px;">
                    <table cellspacing="0" style="border-collapse:collapse;width: 100%;">

                        <tr>
                            <th
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#f2f2f2;">
                                <p class="s5"
                                    style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                    Question </p>
                            </th>
                            <th
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#f2f2f2;">
                                <p class="s5"
                                    style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                    Answer </p>
                            </th>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">What is the
                                    name of this document?</p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">What is the
                                    order/invoice number for this order?</p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">What product
                                    or products have been ordered?</p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Describe what
                                    this product does in 2-3 sentences.</p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <textarea class="blankspace" name="" rows="3" id="" spellcheck="false"
                                    style="width:97%; height:100px;"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">List two
                                    features of the ordered product (e.g. colour / control). </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <span class="s7" style="display:block; padding-left:5pt;">
                                    1. <input class="blankspace" name="input1" style="width: 96%;" type="text">
                                </span>
                                <span class="s7" style="display:block; padding-left:5pt;">
                                    2. <input class="blankspace" name="input1" style="width: 96%;" type="text">
                                </span>

                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">What date was
                                    this order placed, and what date is it to be delivered or installed? </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <span class="s7" style="display:block; padding-left:5pt;">
                                    Placed: <input class="blankspace" name="input1" style="width: 90%;" type="text">
                                </span>
                                <span class="s7" style="display:block; padding-left:5pt;">
                                    Delivered/installed: <input class="blankspace" name="input1" style="width: 80%;"
                                        type="text">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">What is the
                                    address this product is being installed at or shipped to?</p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <textarea class="blankspace" name="" rows="3" id="" spellcheck="false"
                                    style="width:97%; height:100px;"></textarea>
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#808080;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        Results: Reading
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        ACSF level:

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="1">
                        </span>
                        Pre-Level 1

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="2">
                        </span>
                        Level 1

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="3">
                        </span>
                        Level 2

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="4">
                        </span>
                        Level 3

                    </p>

                </td>
            </tr>
        </table>

        <p style="margin: 10px 0px 0px 0px;"></p>
        <p class="s5" style="padding-top: 5pt; padding-bottom: 5pt; text-align: left;"> This page will cover: Numeracy,
            OralCommunication and learning styles. An ITHEA representative will complete each results table. </p>
        <p style="margin: 10px 0px 20px 0px;"></p>

        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tr>
                <td colspan="4"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        Part Three: Numeracy
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0;">

                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;"> Read
                        through a picking slip / work order from your workplace and answer the following questions. </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0; padding:5px;">
                    <table cellspacing="0" style="border-collapse:collapse;width: 100%;">

                        <tr>
                            <th
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                                <p class="s5"
                                    style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                    Question </p>
                            </th>
                            <th
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                                <p class="s5"
                                    style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                    Answer </p>
                            </th>
                            <th
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                                <p class="s5"
                                    style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                    Question </p>
                            </th>
                            <th
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                                <p class="s5"
                                    style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                    Answer </p>
                            </th>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">42 x 3 = </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">32 + 43 + 76
                                    = </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">80% of 120 =
                                </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">500 ÷ 3 =
                                </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">36 ÷ 6 = </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">86 – 21 =
                                </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">3 x 8 = </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">832 – 541 =
                                </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                    </table>
                    <p style="margin: 20px 0px 20px 0px;"></p>
                    <table cellspacing="0" style="border-collapse:collapse;width: 100%;">

                        <tr>
                            <th
                                style="width:229pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                                <p class="s5"
                                    style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                    Question </p>
                            </th>
                            <th
                                style="width:232pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                                <p class="s5"
                                    style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                    Answer </p>
                            </th>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">Convert 1.5m
                                    to mm = </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">8 What time
                                    is 90 minutes after 2pm? </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">25c + $1.53 +
                                    $12.50 = </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">How many
                                    hours is 180 minutes? </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                    </table>
                    <p style="margin: 20px 0px 20px 0px;"></p>

                    <p class="s7" style="text-indent: 0pt;line-height: 10pt;text-align: left; padding-bottom:5px;">
                        Answer the following questions, you must show your working for each question.</p>

                    <table cellspacing="0" style="border-collapse:collapse;width: 100%;">

                        <tr>
                            <th
                                style="width:229pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                                <p class="s5"
                                    style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                    Question </p>
                            </th>
                            <th
                                style="width:232pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                                <p class="s5"
                                    style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                                    Answer </p>
                            </th>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7"
                                    style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;"> A
                                    client needs three blinds. </p>
                                <ul class="s7" style="padding-left:10px; margin:5px 0 0 0;">
                                    <li>• Each blind has two brackets. </li>
                                    <li>• Each blind requires 3 screws to install each bracket. </li>
                                    <li>• How many screws do you need in total?</li>
                                </ul>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">You are
                                    ordering roller blind chain to make custom lengths. Chain costs 84c per metre. How
                                    much will 8m of chain cost?</p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">An awning is
                                    costed at $7,400.00. Add 10% GST to the total. </p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td
                                style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <p class="s7" style="padding-left: 5pt;text-indent: 0pt;text-align: left;">A customer
                                    has paid a $250 deposit for a $1000 order, what is the balance? (what is left to pay
                                    later)</p>
                            </td>
                            <td
                                style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                                <input class="blankspace" name="input1" style="width: 97%;" type="text">
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#808080;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        Results: Numeracy
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        ACSF level:

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="1">
                        </span>
                        Pre-Level 1

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="2">
                        </span>
                        Level 1

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="3">
                        </span>
                        Level 2

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="4">
                        </span>
                        Level 3

                    </p>

                </td>
            </tr>
        </table>

























        <p style="margin: 20px 0px 20px 0px;"></p>
        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tr>
                <td colspan="4"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        Part Four: Oral communication and learning skills
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="width:319pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        Your assessor will do a short interview with you in person, or via a video call to talk about
                        the course and will ask you some questions about you, your work and how you like to learn. <br>
                        <br> Listen to their questions and answer each one.
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#808080;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        Results: Oral communication
                    </p>
                </td>
            </tr>
            <tr>
                <td colspan="4"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        ACSF level:

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="1">
                        </span>
                        Pre-Level 1

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="2">
                        </span>
                        Level 1

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="3">
                        </span>
                        Level 2

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="4">
                        </span>
                        Level 3

                    </p>

                </td>
            </tr>
        </table>

        <p style="margin: 20px 0px 20px 0px;"></p>
        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tr>
                <td
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left; color:#fff;">
                        Overall Results:
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">

                    <p class="s7" style="padding: 5pt 0 5pt 5pt; text-indent: 0pt;text-align: left;">
                        ACSF level:

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="1">
                        </span>
                        Pre-Level 1

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="2">
                        </span>
                        Level 1

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="3">
                        </span>
                        Level 2

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="4">
                        </span>
                        Level 3

                    </p>

                </td>
            </tr>
        </table>
        <p style="margin: 20px 0px 20px 0px;"></p>
        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tr>
                <td bgcolor="#3975C4" colspan="3"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-left: 5pt;text-indent: 0pt;line-height: 27pt;text-align: center; color:#fff;">
                        PRE-TRAINING INTERVIEW AND ENROLMENT CHECKLIST – To be completed by ITHEA Representative </p>
                </td>
            </tr>
            <tr>
                <th
                    style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Applicant Family name</p>
                </th>
                <th
                    style="width:218pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Applicant Given name(s)</p>
                </th>
                <th
                    style="width:234pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Applicant Date of Birth</p>
                </th>
            </tr>

            <tr>
                <td
                    style="width:128pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <input class="blankspace" id="input3" name="input3" style="width: 97%;" type="text">
                </td>
                <td
                    style="width:128pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <input class="blankspace" id="input3" name="input3" style="width: 97%;" type="text">
                </td>
                <td
                    style="width:128pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <input class="blankspace" id="input3" name="input3" style="width: 97%;" type="text"
                        placeholder="(DD/MM/YYYY)">
                </td>
            </tr>
        </table>

        <p class="s5" style="padding-top: 5pt; padding-bottom: 5pt; text-align: left;"> <em>ITHEA representative must
                use this form to evaluate applicant’s Pre-Training Review to determine that the applicant is enrolled in
                a course according to their needs and abilities, and to recommend appropriate LLN, EAL, learning or
                other specific support arrangements.</em> </p>

        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tr>
                <td bgcolor="#3975C4" colspan="2"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-left: 5pt;text-indent: 0pt;line-height: 27pt;text-align: center; color:#fff;">
                        Pre-training review (LLN, course requirements) </p>
                </td>
            </tr>

            <tr>
                <td colspan="2"
                    style="width:128pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <p class="s7"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: left;">
                        <b>Oral Questions:</b> Ask open questions as part of your interview to help gain insight into
                        applicant speaking and listening abilities: <br>
                        1. What experience have you had with learning / education in the past? What worked for you and
                        what didn’t? (learning styles)<br>
                        2. What do you enjoy about your job, what made you interested in applying to work here? (work
                        objectives)<br>
                        3. What are your hobbies or favourite activities to do outside work? (familiar context)<br>
                        4. What do you hope to learn or achieve from this course? (intent and motivation)
                    </p>
                </td>
            </tr>
            <tr>

                <td colspan="2"
                    style="width:128pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <p class="s7"
                        style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left; vertical-align:top; font-weight:bold;">
                        <span>Trainer notes:</span><br> <textarea name="" rows="3" id="" spellcheck="false"
                            style="width:99%; height:100px; margin-top:5px;"></textarea>
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Has the applicant completed an LLN test?
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Does the applicant require additional support to complete the course?
                    </p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Has language, literacy and numeracy been discussed with the applicant?
                    </p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Appropriate work experience and level of skill and ability to undertake this course successfully
                    </p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Appropriate language, literacy and numeracy level for this course (refer to LLN test result)
                    </p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Student requires additional LLN support to participate in this course (refer to LLN test result)
                    </p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Enrolment in this course aligned with the student's work/career plans
                    </p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Does this enrolment promote or enable access to training for disadvantaged learners?
                    </p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Discussion of learning strategiesandmaterials - Are the learning strategies and materials
                        appropriate for the applicant? Include mode of delivery, expectations, resources and workplace
                        support
                    </p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Does the student require any additional support to successfully complete their training
                        programme? If yes, what is the proposed support?
                    </p>
                    <p class="s7" style="padding-top: 1pt;padding-left: 5pt;text-indent: 0pt;text-align: left;">

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="1">
                        </span>
                        Additional language classes

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="2">
                        </span>
                        Support in class (i.e., modification of texts)

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="3">
                        </span>
                        Translation device/dictionary

                        <span class="s8">
                            <input type="radio" class="checkbox" name="checkbox6" value="4">
                        </span>
                        Other

                    </p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
        </table>


        <p style="text-indent: 0pt;text-align: left;margin: 20px 0px 20px 0px;"></p>

        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tr>
                <td bgcolor="#3975C4" colspan="5"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5"
                        style="padding-left: 5pt;text-indent: 0pt;line-height: 27pt;text-align: center; color:#fff;">
                        Training Plan discussion and explanation</p>
                </td>
            </tr>
            <tr>
                <td colspan="5"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Training plan established, content outlined, negotiated, agreed, signed and dated? </p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Course code and title</p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Delivery method</p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Course duration</p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Units selection</p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Signed by all parties</p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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


        </table>

        <p style="text-indent: 0pt;text-align: left;margin: 20px 0px 20px 0px;"></p>

        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tr>
                <td bgcolor="#3975C4" colspan="2"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5" style="text-indent: 0pt;line-height: 27pt;text-align: center; color:#fff;"> Providing
                        credit to learners discussed </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        RPL/CT/RCC must be discussed. Will applicant be applying for RCC/CT/RPL?
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
                    <p class="s7" style="text-indent: 0pt;line-height: 10pt;text-align: center; padding-bottom: 6px;">
                        If no - go to next section </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Can the applicant provide the original or certified copies of priorqualifications including
                        other supporting evidence and/or documentation
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
                    <p class="s7" style="text-indent: 0pt;line-height: 10pt;text-align: center;padding-bottom: 6px;"> If
                        no - go to next section </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        RPL/Credit Transfer/National Recognition suitable
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
                    <p class="s7" style="text-indent: 0pt;line-height: 10pt;text-align: center;padding-bottom: 6px;"> If
                        no - go to next section </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        RPL / CT application form given to applicant
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
        </table>

        <p style="text-indent: 0pt;text-align: left;margin: 20px 0px 20px 0px;"></p>

        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tr>
                <td bgcolor="#3975C4" colspan="2"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5" style="text-indent: 0pt;line-height: 27pt;text-align: center; color:#fff;"> ITHEA
                        Policies and Procedures Compliance Checklist- Apprentice/trainee (government supported training)
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Student has been signed into a contract with the Australian Apprenticeship Support Network
                        (AASN) and employer
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Student has been registered as an apprentice/trainee through their state/territory portal
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        State/territory specific forms completed<br>
                        SkillsFirst Eligibility form completed (Vic only) ERA completed (Qld only) <br>
                        Draft training plan provided (NSW only)<br>
                        Other: Please specify <input class="blankspace" name="input1" style="width: 37%;" type="text">
                    </p>

                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Fees and charges have been explained and agreed with student or employer
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Learner assessment handbook has been provided
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Role of workplace supervisor (ongoing training, support and supervision), trainers (teaching,
                        assessing and support) and the AASN (checking in regularly to confirm support from trainer and
                        employer) have been explained to the student and supervisor.
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Enrolment to proceed
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Where enrolment is to proceed, web enrolment has been completed, ready for activation in VetTrak
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>
                <td
                    style="width:80%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s7" style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left;">
                        Additional interviews or other pre-enrolment evaluation notes
                    </p>
                </td>
                <td
                    style="width:20%;border-top-style:solid;border-top-width:1pt;border-top-color:#7E7E7E;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <ul style="margin: 10px 0; text-align:center;">
                        <li>
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
            <tr>

                <td colspan="2"
                    style="width:128pt;border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <p class="s7"
                        style="padding-left: 5pt;text-indent: 0pt;line-height: 10pt;text-align: left; vertical-align:top; font-weight:bold;">
                        <span>Trainer notes:</span><br> <textarea name="" rows="3" id="" spellcheck="false"
                            style="width:99%; height:100px; margin-top:5px;"></textarea>
                    </p>
                </td>
            </tr>
        </table>
        <p style="text-indent: 0pt;text-align: left;margin: 20px 0px 20px 0px;"></p>

        <table cellspacing="0" style="border-collapse:collapse;width: 100%;">
            <tr>
                <td bgcolor="#3975C4" colspan="3"
                    style="border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4; background:#3975C4;">
                    <p class="s5" style="text-indent: 0pt;line-height: 27pt;text-align: center; color:#fff;">Final
                        recommendation: To be completed by ITHEA representative</p>
                </td>
            </tr>
            <tr>
                <td colspan="3"
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4">
                    <p class="s5"
                        style="padding-top: 5pt;padding-left: 5pt;text-indent: 0pt;text-align: left; padding-bottom: 5pt;">
                        <b>Enrolment to proceed:</b>

                        <span class="s5">
                            <input type="radio" class="checkbox" name="checkbox6" value="1">
                        </span> Yes

                        <span class="s5">
                            <input type="radio" class="checkbox" name="checkbox6" value="2">
                        </span> No
                    </p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Name of ITHEA Representative</p>
                    </th>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Signature of ITHEA Representative</p>
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#7E7E7E;border-right-style:solid;border-right-width:1pt;border-right-color:#3975C4;background:#f2f2f2;">
                    <p class="s5"
                        style="padding-top: 1pt; padding-bottom: 1pt; padding-left: 5pt;text-indent: 0pt;text-align: center;">
                        Date</p>
                </td>
            </tr>
            <tr>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <input class="blankspace" id="input3" name="input3" style="width: 97%;" type="text">
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <input class="blankspace" id="input3" name="input3" style="width: 97%;" type="text">
                </td>
                <td
                    style="border-top-style:solid;border-top-width:1pt;border-top-color:#3975C4;border-left-style:solid;border-left-width:1pt;border-left-color:#3975C4;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4;border-right-style:solid;border-right-width:1pt;border-right-color:#0071D0">
                    <input class="blankspace" id="input3" name="input3" style="width: 97%;" type="text">
                </td>
            </tr>
        </table>

        <p style="text-indent: 0pt;text-align: left;margin: 20px 0px 20px 0px;"></p>

        <p class="s5" style="text-align:center;">ITHEA representative – this completed document must be filed in the
            student’s administration file held at ITHEA head office.<br>

            Any LLND flags must be noted in VetTrak, and the student’s academic file stored at the relevant training
            campus. </p>

        <p style="text-indent: 0pt;text-align: left;margin: 20px 0px 20px 0px;"></p>


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

        $(document).ready(function () {
            $("#spinner").hide();
        });

        $(document).on('click', '#submitForm', function (e) {

            if ($("#input1").val() == '') { toastr["error"]('Please fill all Info'); $("#input1").focus(); return false; }

            if ($("#input2").val() == '') { toastr["error"]('Please fill all Info'); $("#input2").focus(); return false; }

            if ($("#input3").val() == '') { toastr["error"]('Please fill all Info'); $("#input3").focus(); return false; }

            if ($("#input4").val() == '') { toastr["error"]('Please fill all Info'); $("#input4").focus(); return false; }

            if ($("#input5").val() == '') { toastr["error"]('Please fill all Info'); $("#input5").focus(); return false; }

            if ($("#input6").val() == '') { toastr["error"]('Please fill all Info'); $("#input6").focus(); return false; }

            if ($("#input7").val() == '') { toastr["error"]('Please fill all Info'); $("#input7").focus(); return false; }

            if ($("#input8").val() == '') { toastr["error"]('Please fill all Info'); $("#input8").focus(); return false; }

            //if($("#input9").val() == ''){toastr["error"]('Please fill all Info'); $("#input9").focus(); return false;}

            if ($('input[name="checkbox6"]:checked').val() == 1) {

                if ($("#input10").val() == '') { toastr["error"]('Please fill all Info'); $("#input10").focus(); return false; }

                if ($("#input11").val() == '') { toastr["error"]('Please fill all Info'); $("#input11").focus(); return false; }

                if ($("#input12").val() == '') { toastr["error"]('Please fill all Info'); $("#input12").focus(); return false; }

                if ($("#input13").val() == '') { toastr["error"]('Please fill all Info'); $("#input13").focus(); return false; }

            }

            if ($("#input22").val() == '') { toastr["error"]('Please fill all Info'); $("#input22").focus(); return false; }

            if ($("#input23").val() == '') { toastr["error"]('Please fill all Info'); $("#input23").focus(); return false; }

            if ($("#input24").val() == '') { toastr["error"]('Please fill all Info'); $("#input24").focus(); return false; }

            if ($("#input25").val() == '') { toastr["error"]('Please fill all Info'); $("#input25").focus(); return false; }

            if ($("#input26").val() == '') { toastr["error"]('Please fill all Info'); $("#input26").focus(); return false; }

            if ($("#input27").val() == '') { toastr["error"]('Please fill all Info'); $("#input27").focus(); return false; }

            if ($("#input28").val() == '') { toastr["error"]('Please fill all Info'); $("#input28").focus(); return false; }

            if ($("#input29").val() == '') { toastr["error"]('Please fill all Info'); $("#input29").focus(); return false; }

            if ($("#input30").val() == '') { toastr["error"]('Please fill all Info'); $("#input30").focus(); return false; }

            if ($("#input31").val() == '') { toastr["error"]('Please fill all Info'); $("#input31").focus(); return false; }

            if ($("#input32").val() == '') { toastr["error"]('Please fill all Info'); $("#input32").focus(); return false; }

            if ($("#input33").val() == '') { toastr["error"]('Please fill all Info'); $("#input33").focus(); return false; }

            if ($("#input34").val() == '') { toastr["error"]('Please fill all Info'); $("#input34").focus(); return false; }

            if ($("#input35").val() == '') { toastr["error"]('Please fill all Info'); $("#input35").focus(); return false; }

            if ($("#input36").val() == '') { toastr["error"]('Please fill all Info'); $("#input36").focus(); return false; }

            if ($("#input37").val() == '') { toastr["error"]('Please fill all Info'); $("#input37").focus(); return false; }

            if ($("#input38").val() == '') { toastr["error"]('Please fill all Info'); $("#input38").focus(); return false; }

            if ($('input[name="checkbox80"]:checked').val() == 4) {

                if ($("#input40").val() == '') { toastr["error"]('Please fill all Info'); $("#input40").focus(); return false; }

            }

            if ($("#input41").val() == '') { toastr["error"]('Please fill all Info'); $("#input41").focus(); return false; }

            if ($("#input42").val() == '') { toastr["error"]('Please fill all Info'); $("#input42").focus(); return false; }

            if ($("#input43").val() == '') { toastr["error"]('Please fill all Info'); $("#input43").focus(); return false; }

            if ($("#input44").val() == '') { toastr["error"]('Please fill all Info'); $("#input44").focus(); return false; }

            if ($("#input45").val() == '') { toastr["error"]('Please fill all Info'); $("#input45").focus(); return false; }

            if ($("#input46").val() == '') { toastr["error"]('Please fill all Info'); $("#input46").focus(); return false; }

            if ($("#input47").val() == '') { toastr["error"]('Please fill all Info'); $("#input47").focus(); return false; }

            if ($("#input48").val() == '') { toastr["error"]('Please fill all Info'); $("#input48").focus(); return false; }

            if ($("#input49").val() == '') { toastr["error"]('Please fill all Info'); $("#input49").focus(); return false; }

            if ($("#input50").val() == '') { toastr["error"]('Please fill all Info'); $("#input50").focus(); return false; }

            if ($("#input51").val() == '') { toastr["error"]('Please fill all Info'); $("#input51").focus(); return false; }

            if ($("#input52").val() == '') { toastr["error"]('Please fill all Info'); $("#input52").focus(); return false; }

            if ($('input[name="checkbox81"]:checked').val() == 1) {

                if ($("#input53").val() == '') { toastr["error"]('Please fill all Info'); $("#input53").focus(); return false; }

                if ($("#input54").val() == '') { toastr["error"]('Please fill all Info'); $("#input54").focus(); return false; }

                if ($("#input55").val() == '') { toastr["error"]('Please fill all Info'); $("#input55").focus(); return false; }

            }

            if (!checkWordCount()) {
                return false;
            }

            $('#submitForm').prop('disabled', true);
            $('#submitForm').css('background-color', 'lightgrey');
            $('#submitForm').css('color', 'black');
            $('#submitForm').css('border', 'none');
            $("#spinner").show();
            $('#mainForm').submit();

        });

        function checkWordCount() {
            s = document.getElementById("input56").value;
            s = s.replace(/(^\s*)|(\s*$)/gi, "");
            s = s.replace(/[ ]{2,}/gi, " ");
            s = s.replace(/\n /, "\n");
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