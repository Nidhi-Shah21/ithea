<?php
date_default_timezone_set("Australia/Melbourne");
session_start();

if (isset($_SESSION['link1']) && $_SESSION['link1'] && isset($_SESSION['expiry1']) && $_SESSION['expiry1'] != '') {

    $now = new DateTime();
    $date = new DateTime($_SESSION['expiry1']);
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

        SKILLS - EVIDENCE OF ELIGIBILITY and STUDENT DECLARATION

    </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />

    <style type="text/css">
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        input.underline {
            border: none;
            border-bottom: 1px dotted black;
            outline: none;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
        }

        .form-control:focus {
            box-shadow: none;
        }

        .radiobtn {
            margin-right: 7px !important;
        }

        input[type="radio"] {
            margin-right: 10px;
            cursor: pointer;
        }

        label {
            margin-bottom: unset !important;
        }

        .radiobtn {
            width: 35px;
            height: 35px;
            vertical-align: bottom;
            border-radius: 20px;
            background-color: white;
            -webkit-appearance: none;
            /*to disable the default appearance of radio button*/
            -moz-appearance: none;
        }

        .radiobtn:focus {
            outline-color: transparent;
        }

        .radiobtn:checked {
            border: 1px solid #000000;
        }

        .radio span:first-of-type {
            position: relative;
            left: -27px;
            font-size: 15px;
            color: #000000;
        }

        .radio span {
            position: relative;
            top: -10px;
        }

        .radiosquare:active,
        .radiosquare:focus {
            box-shadow: none;
        }

        .radiosquare:before {
            content: "";
            font-family: "FontAwesome";
            display: inline;
            width: 30px;
            max-width: 30px;
            height: 30px;
            max-height: 30px;
            background: white;
            color: white;
            box-shadow: none;
            padding: 2px;
            font-size: 10px;
            transition: 0.5s;
            border: 1px solid black;
            line-height: 17px;
        }

        .radiosquare:checked {
            box-shadow: none;
        }

        .radiosquare:checked:before {
            color: black;
            transition: 0.5s;
        }

        td {
            padding: 4px 0;
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

        .s4 {
            color: #808080;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s5 {
            color: #FFF;
            font-family: "Century Gothic", sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 22pt;
        }

        .s6 {
            color: #FFF;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 22pt;
        }

        .s7 {
            color: #FFF;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 14pt;
        }

        .s8 {
            color: #F00;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s9 {
            color: #F00;
            font-family: Arial, sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s11 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s12 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 7pt;
        }

        .s14 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s15 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s16 {
            color: #008000;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s17 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        h2 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .p,
        p {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
            margin: 0pt;
            margin-bottom: unset !important;
        }

        .s19 {
            color: #F00;
            font-family: Arial, sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s21 {
            color: #F00;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s22 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 6pt;
        }

        .s23 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 8pt;
        }

        .s26 {
            color: black;
            font-family: Wingdings;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 14pt;
        }

        .s27 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 14pt;
        }

        .s28 {
            color: #000;
            font-family: "Century Gothic", sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s30 {
            color: #000;
            font-family: "Century Gothic", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        .s31 {
            color: #F00;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 12pt;
        }

        .s32 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
        }

        .s33 {
            color: black;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 8pt;
        }

        .s35 {
            color: #F00;
            font-family: "Arial Narrow", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-decoration: none;
            font-size: 11pt;
        }

        .s36 {
            color: black;
            font-family: Wingdings;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s37 {
            color: black;
            font-family: "Times New Roman", serif;
            font-style: normal;
            font-weight: normal;
            text-decoration: none;
            font-size: 12pt;
        }

        .s38 {
            color: #F00;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: bold;
            text-decoration: none;
            font-size: 10pt;
        }

        .s39 {
            color: #F00;
            font-family: "Arial Narrow", sans-serif;
            font-style: italic;
            font-weight: normal;
            text-decoration: none;
            font-size: 10pt;
        }

        li {
            display: block;
        }

        #l21 {
            padding-left: 0pt;
            counter-reset: w1 0;
        }

        /*#l21> li:before {counter-increment:w1; content:counter(w1, lower-latin)". "; color:black; font-family:"Arial Narrow", sans-serif; font-style:normal; font-weight:normal; text-decoration:none; font-size:10pt; }*/

        .row {
            align-items: center;
        }

        canvas#signature {
            border: 1px dotted black;
            cursor: url('images/pencil.png'), default;
        }

        .toast-bottom-center {
            top: 35% !important;
        }

        img.m_logo {
            height: 75px;
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
    <form id="mainForm" method="post" action="processindex1.php">

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
                        ABN: 40 125 368 569

                    </p>

                </td>

                <td style="width:18%; padding:5px 10px; text-align:right;">

                    <img alt="image" src="images/logo.jpg" class="m_logo" />

                </td>

            </tr>

            <tr>

                <td colspan="2" style="background:#3975C4;">

                    <p style="padding-top:1pt;text-align:center;">

                        <span class="s5">

                            SKILLS FIRST

                        </span>

                        <span class="s6">

                            PROGRAM 2024

                        </span>

                    </p>

                    <p class="s7" style="padding-left:37pt;padding-right:37pt;text-align:center;">

                        EVIDENCE OF STUDENT ELIGIBILITY AND STUDENT DECLARATION

                    </p>

                </td>

            </tr>

            <tr>

                <td colspan="2" style="border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#3975C4">

                    <p class="s8" style="padding-top:2pt; text-align:center;">

                        Section A

                        <i>

                            -

                        </i>

                        Evidence of citizenship/residency

                    </p>

                    <p class="s9" style="padding-left:6pt;text-align:center;">

                        <!-- To be completed by an authorised delegate of ITHEA - -->

                        <b>

                            DO NOT LEAVE ANY SECTION BLANK

                        </b>

                    </p>

                </td>

            </tr>

        </table>

        <table border="0" cellpadding="0" cellspacing="0" style="width:100%">

            <tr>

                <td>

                    <p style="text-align:left;">

                        <br />

                    </p>



                    <p style="padding-top:5pt;">

                        <span class="row">

                            <label class="col-3 text-right" for="CardType">Medicare Card Type</label><br>

                            <select name="CardType" class="form-control form-control-sm col-6" id="CardType">

                                <option value="">Select Type</option>

                                <option value="G">Green</option>

                                <!-- <option value="B">Blue</option> -->

                                <!-- <option value="Y">Yellow</option> -->

                            </select>

                        </span>

                    </p>

                    <p style="padding-top:5pt;">

                        <span class="row">

                            <label class="col-3 text-right" for="CardNumber1">Medicare Card Number</label><br>

                            <input name="CardNumber1" class="form-control form-control-sm col-2" id="CardNumber1"
                                type="text" maxlength="4" onkeypress="return isNumberKey(event)" value="" />

                            <input name="CardNumber2" class="form-control form-control-sm col-2" id="CardNumber2"
                                type="text" maxlength="5" onkeypress="return isNumberKey(event)" value="" />

                            <input name="CardNumber3" class="form-control form-control-sm col-2" id="CardNumber3"
                                type="text" maxlength="1" onkeypress="return isNumberKey(event)" value="" />

                        </span>

                    </p>

                    <p style="padding-top:5pt;">

                        <span class="row">

                            <label class="col-3 text-right" for="IndividualReferenceNumber">Individual Reference
                                Number</label><br>

                            <!-- <input name="IndividualReferenceNumber" class="form-control form-control-sm col-2" id="IndividualReferenceNumber" type="text" maxlength="1" value="" /> -->

                            <select name="IndividualReferenceNumber" class="form-control form-control-sm col-2"
                                id="IndividualReferenceNumber">

                                <option value="">Select</option>

                                <option value="1">1</option>

                                <option value="2">2</option>

                                <option value="3">3</option>

                                <option value="4">4</option>

                                <option value="5">5</option>

                                <option value="6">6</option>

                                <option value="7">7</option>

                                <option value="8">8</option>

                                <option value="9">9</option>

                            </select>

                        </span>

                    </p>

                    <p style="padding-top:5pt;">

                        <span class="row">

                            <label class="col-3 text-right" for="FullName1">Full Name as shown on card</label><br>

                            <input name="FullName1" class="form-control form-control-sm col-2" id="FullName1"
                                type="text" value="" />

                        </span>

                    </p>

                    <p style="padding-top:5pt;">

                        <span class="row">

                            <label class="col-3 text-right">Expiry Date</label>

                            <!-- <input name="CardExpiry1" class="form-control form-control-sm col-2" id="CardExpiry1"  type="text" placeholder="DD" onblur="if(this.value.length == 1 ? this.value='0'+this.value : '');" maxlength="2" value="" /> -->

                            <!-- <input name="CardExpiry2" class="form-control form-control-sm col-2" id="CardExpiry2" type="text" placeholder="MM" onblur="if(this.value.length == 1 ? this.value='0'+this.value : '');" maxlength="2" value="" /> -->

                            <select name="CardExpiry2" class="form-control form-control-sm col-2" id="CardExpiry2"
                                placeholder="MM">

                                <option value="">Select Month</option>

                                <option value="01">January</option>

                                <option value="02">February</option>

                                <option value="03">March</option>

                                <option value="04">April</option>

                                <option value="05">May</option>

                                <option value="06">June</option>

                                <option value="07">July</option>

                                <option value="08">August</option>

                                <option value="09">September</option>

                                <option value="10">October</option>

                                <option value="11">November</option>

                                <option value="12">December</option>

                            </select>

                            <!-- <input  type="text" placeholder="YYYY" maxlength="4" value="" /> -->

                            <select name="CardExpiry3" class="form-control form-control-sm col-2" id="CardExpiry3">

                                <option value="">Select Year</option>

                                <option value="2019">2019</option>

                                <option value="2020">2020</option>

                                <option value="2021">2021</option>

                                <option value="2022">2022</option>

                                <option value="2023">2023</option>

                                <option value="2024">2024</option>

                                <option value="2025">2025</option>

                                <option value="2026">2026</option>

                                <option value="2027">2027</option>

                                <option value="2028">2028</option>

                                <option value="2029">2029</option>

                                <option value="2030">2030</option>

                            </select>

                        </span>

                    </p>

                    <p style="padding-top:5pt;">

                        <span class="form-check form-check-inline">

                            <label class="col-3 text-right">&nbsp;</label>



                            <label class="col-9 p-0"><input name="" id="consent" type="checkbox"
                                    class="form-check-input" /> I confirm that I am authorised to provide the personal
                                details presented and I consent to my information being checked with the document issuer
                                or official record holder via third party systems for the purpose of confirming my
                                identity.</label>

                        </span>

                    </p>

                    <?php /*?><p style="padding-top:5pt;" >

              <span class="row">

                  <label class="col-3 text-right">&nbsp;</label>

                  <button type="button" class="btn btn-outline-primary" id="manualVerify" style="display: none;">Manual Verify</button>

                  <button type="button" class="btn btn-outline-primary" id="verify">Verify</button>

                  <input type="hidden" id="verifyResult" value="">

              </span>

          </p><?php */ ?>

                </td>

            </tr>

        </table>
        <?php /* <table border="0" cellpadding="0" cellspacing="0" style="width:100%">
  <tr>
      <td>
          <p style="text-align:left;"><br/></p>
          <p style="line-height:1pt;text-align:left;"><span><img alt="image" height="1" src="images/Image_003.png" width="100%"/></span></p>
          <p class="s19" style="padding-top:3pt;padding-left:56pt;line-height:112%;text-align:center;">
              <p style="padding: 10px;background: #EAE8DA;">
                  A <strong>'skill set'</strong> means a course with the title "Course in…" or a single subject, or a small group of subjects (for example "Course in Family Violence", "Infection control Skill Set (Retail)").<br/>
                  A <strong>'qualification'</strong> means a course that has "Certificate" or "Diploma" in the title (for example, "Certificate III in Business", "Diploma of Nursing").
              </p>
              <p style="padding-top:4pt;padding-left:7pt;text-align:justify;">
                  Are you enrolling for <strong>"Skill Set"</strong> or <strong>"Qualification"</strong> course?
              </p>
              <p style="text-align:left;"><br/></p>
              <p class="s11" style="padding-left: 50px; text-align:left;">
                  <label class="radio"><input name="section11" type="radio" value="0" onchange="displaysection('b2')"/><span style="left: 0;top: 0;"><strong>Skill Set</strong></span></label>
                  &nbsp;&nbsp;
                  <label class="radio"><input name="section11" type="radio" value="1" onchange="displaysection('b1')"/><span style="left: 0;top: 0;"><strong>Qualification</strong></span></label>
              </p>
          </p>
      </td>
  </tr>
</table> */ ?>

        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;" id="sectionb1">

            <tr>

                <td>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p style="line-height:1pt;text-align:left;">

                        <span>

                            <img alt="image" height="1" src="images/Image_003.png" width="100%" />

                        </span>

                    </p>

                    <p class="s19" style="padding-top:3pt;padding-left:56pt;line-height:112%;text-align:center;">

                        Section B - (STUDENT DECLARATION)

                    </p>

                    <p class="s19"
                        style="padding-top:3pt;padding-left:56pt;line-height:20px;text-align:center;font-size: 14px">

                        To be completed by the student – don’t leave any question blank unless you are asked to skip a
                        question or go to the declaration. Please ask your training provider for help if you don’t
                        understand a question.

                    </p>

                    <p style="line-height:1pt;text-align:left;">

                        <span>

                            <img alt="image" height="1" src="images/Image_004.png" width="100%" />

                        </span>

                    </p>

                    <p style="padding-top:11pt;padding-left:7pt;line-height:11pt;text-align:left;">

                        Q1. Write the name of the course/s you’re applying for

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p class="s32" style="padding-left:7pt;text-align:left;">

                        <textarea class="form-control" name="highestQualification" id="highestQualification" rows="3"
                            style="width: 100%;"></textarea>

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p class="s23" style="padding-top:2pt;padding-left:38pt;text-align:center;">

                        (write the code and full title of the qualification/s or skill set/s)

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p style="padding-top:4pt;padding-left:7pt;text-align:justify;">

                        Q2. Are you doing, or have you done any other Skills First training in 2024? Tick your response.

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="section6" value="0">

                        <span class="s33">

                        </span>

                        <span class="p">

                            No

                        </span>

                    </p>

                    <br />

                    <p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="section6" value="1">

                        <span class="s33">

                        </span>

                        <span class="p">

                            Yes - write the course name(s) below. Include training you haven’t started yet.

                        </span>

                    </p>

                    <br />

                    <p class="s32" style="padding-left:7pt;text-align:left;">

                        <textarea class="form-control" name="highestQualification2" id="highestQualification2" rows="3"
                            style="width: 100%;"></textarea>

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p class="s23" style="padding-top:2pt;padding-left:38pt;text-align:center;">

                        (write the code and full title of the qualification/s or skill set/s)

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p style="padding-left:7pt;line-height:11pt;text-align:justify;">

                        Q3. Are you enrolled in a school, including government, non-government, independent, Catholic or
                        home school?

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="section7" value="0">

                        <span class="s33">

                        </span>

                        <span class="p">

                            No

                        </span>

                    </p>

                    <br />

                    <p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="section7" value="1">

                        <span class="s33">

                        </span>

                        <span class="p">

                            Yes

                        </span>

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p style="padding-left:7pt;text-align:justify;">

                        Q4. Are you enrolled in the Commonwealth Government’s Skills for Education and Employment
                        program?

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="section8" value="0">

                        <span class="s33">

                        </span>

                        <span class="p">

                            No

                        </span>

                    </p>

                    <br />

                    <p class="s32" style="padding-left: 20px; text-indent: 0pt;text-align: left;">

                        <input type="radio" class="checkbox" name="section8" value="1">

                        <span class="s33">

                        </span>

                        <span class="p">

                            Yes

                        </span>

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <?php /*?><p class="s19" style="padding-top:3pt;padding-left:56pt;line-height:112%;text-align:center;">

              <p style="padding: 10px;background: #EAE8DA;">
                  <strong>FOR JOBTRAINER ENROLMENT ONLY</strong>
              </p>

          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q5. Are you seeking to enrol in a qualification under the JobTrainer initiative? <strong>Note:</strong> You can only enrol in <strong>one qualification</strong> under the JobTrainer initiative

          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <label class="radio">

                  <input class="radiobtn" name="section12" type="radio" value="yes"/><span>YES</span>

              </label>

              <label class="radio">

                  <input class="radiobtn" name="section12" type="radio" value="no"/><span>NO</span>

              </label>

              <label><span>(<i>circle answer</i>)</span></label>&nbsp;

               <span>(If ‘NO’ go to Student Declaration)</span>



          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q6. If you answered “YES” to Q5, have you previously started a qualification under the JobTrainer initiative?

          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <label class="radio">

                  <input class="radiobtn" name="section13" type="radio" value="yes"/><span>YES</span>

              </label>

              <label class="radio">

                  <input class="radiobtn" name="section13" type="radio" value="no"/><span>NO</span>

              </label>

              <label><span>(<i>circle answer</i>)</span></label>&nbsp;

               <span>(If ‘NO’ go to Q8)</span>



          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q7. If you answered “YES” to Q6, are you applying to recommence in the same qualification that you already started under the JobTrainer initiative?

          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <label class="radio">

                  <input class="radiobtn" name="section14" type="radio" value="yes"/><span>YES</span>

              </label>

              <label class="radio">

                  <input class="radiobtn" name="section14" type="radio" value="no"/><span>NO</span>

              </label>

              <label><span>(<i>circle answer</i>)</span></label>&nbsp;

               <span>(If ‘YES’ or ‘NO’ go to Student Declaration)</span>



          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q8. Are you 17 to 24 years old?

          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <label class="radio">

                  <input class="radiobtn" name="section15" type="radio" value="yes"/><span>YES</span>

              </label>

              <label class="radio">

                  <input class="radiobtn" name="section15" type="radio" value="no"/><span>NO</span>

              </label>

              <label><span>(<i>circle answer</i>)</span></label>&nbsp;

               <span>(If ‘YES’ go to Student Declaration)</span>



          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q9. Are you a job seeker?

          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <label class="radio">

                  <input class="radiobtn" name="section16" type="radio" value="yes"/><span>YES</span>

              </label>

              <label class="radio">

                  <input class="radiobtn" name="section16" type="radio" value="no"/><span>NO</span>

              </label>

              <label><span>(<i>circle answer</i>)</span></label>&nbsp;

               <span>(If ‘NO’ go to Student Declaration)</span>



          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q10. If you answered “YES” to Q9, tick any of these boxes if they apply to you:

          </p>

          <p class="s11" style="padding-left: 50px; text-align:left;margin-top: 15px;">

              <input class="radiosquare" name="section17" type="checkbox" value="1"/><span style="margin-left:5px">I have a current and valid Health Care Card, Pensioner Concession Card or Veteran’s Gold Card</span><br/>

              <input class="radiosquare" name="section18" type="checkbox" value="1"/><span style="margin-left:5px">I have a letter from my employer or a company receiver on company letterhead that says I have been, or will be, made redundant or retrenched.</span><br/>

              <input class="radiosquare" name="section19" type="checkbox" value="1"/><span style="margin-left:5px">I have a Separation Certificate from my employer.</span><br/><br/>

              <label><span>(<i>(If you have ticked a box, go to Student Declaration)</i>)</span></label>
          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q11. If you did not tick any of the boxes in Q 10, you can make a declaration that you are a job seeker by ticking this box and signing this form

          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <input class="radiosquare" name="section20" style="margin-left: 15px!important;" type="checkbox" value="1">

               <span>I declare that I am currently unemployed.</span>
          </p><?php */ ?>

                </td>

            </tr>

        </table>

        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;display: none;" id="sectionb2">

            <tr>

                <td>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p style="line-height:1pt;text-align:left;">

                        <span>

                            <img alt="image" height="1" src="images/Image_003.png" width="100%" />

                        </span>

                    </p>

                    <p class="s19" style="padding-top:3pt;padding-left:56pt;line-height:112%;text-align:center;">

                        Section B 2 - EDUCATION HISTORY (ENROLMENT IN A SKILL SET)

                    </p>

                    <p class="s19"
                        style="padding-top:3pt;padding-left:56pt;line-height:20px;text-align:center;font-size: 14px">

                        TO BE COMPLETED BY THE STUDENT - DON’T LEAVE ANY SECTION BLANK UNLESS YOU ARE ASKED TO SKIP A
                        QUESTION OR GO TO THE DECLARATION - PLEASE ASK THE TRAINING PROVIDER FOR HELP IF YOU DO NOT
                        UNDERSTAND A QUESTION

                    </p>

                    <p style="line-height:1pt;text-align:left;">

                        <span>

                            <img alt="image" height="1" src="images/Image_004.png" width="100%" />

                        </span>

                    </p>


                    <p style="padding-top:4pt;padding-left:7pt;text-align:justify;">

                        Q1. How many other <strong>Skills First funded</strong> skill sets have you enrolled in that
                        have started, or will start in the <strong>same calendar year</strong> as the skills set you are
                        applying for now? (<strong>Don’t</strong> include the skill set you are applying for now. Do
                        include other skill sets at this and other training providers you’ve enrolled in, but haven’t
                        started yet.)


                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p class="s11" style="padding-left:105pt;text-align:left;">

                        <label class="radio">

                            <input class="radiobtn" name="section21" type="radio" value="0" /><span>0</span>

                        </label>

                        <label class="radio">

                            <input class="radiobtn" name="section21" type="radio" value="1" /><span>1</span>

                        </label>

                        <label class="radio">

                            <input class="radiobtn" name="section21" type="radio" value="2" /><span>2</span>

                        </label>

                        <label class="radio">

                            <input class="radiobtn" name="section21" type="radio" value="3" /><span>3</span>

                        </label>

                        <label class="radio">

                            <input class="radiobtn" name="section21" type="radio" value="4+" /><span>4+</span>

                        </label>



                        <label><span>(<i>circle number</i>)</span></label>

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p style="padding-left:7pt;line-height:11pt;text-align:justify;">

                        Q2. Not including the skill set/s you are applying for now, how many other <strong>Skills First
                            funded</strong> skill sets and/or qualifications are you doing at the moment?

                    </p>

                    <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

                        <label class="radio">

                            <input class="radiobtn" name="section22" type="radio" value="0" /><span>0</span>

                        </label>

                        <label class="radio">

                            <input class="radiobtn" name="section22" type="radio" value="1" /><span>1</span>

                        </label>

                        <label class="radio">

                            <input class="radiobtn" name="section22" type="radio" value="2" /><span>2</span>

                        </label>

                        <label class="radio">

                            <input class="radiobtn" name="section22" type="radio" value="3" /><span>3</span>

                        </label>

                        <label class="radio">

                            <input class="radiobtn" name="section22" type="radio" value="4+" /><span>4+</span>

                        </label>



                        <label><span>(<i>circle number</i>)</span></label>

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p style="padding-left:7pt;text-align:justify;">

                        Q3. Are you doing, or will you start the course in identifying and responding to Family Violence
                        Risk?

                    </p>

                    <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">
                        <label class="radio">
                            <input class="radiobtn" name="section24" type="radio" value="1" /><span>Yes</span>
                        </label>
                        <label class="radio">
                            <input class="radiobtn" name="section24" type="radio" value="2" /><span>No</span>
                        </label>

                        <label><span>(<i>circle number</i>)</span></label>

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                    <p style="padding-left:7pt;text-align:justify;">

                        Q4. Do you have a qualification at a Diploma level or higher?

                    </p>

                    <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">
                        <label class="radio">
                            <input class="radiobtn" name="section25" type="radio" value="1" /><span>Yes</span>
                        </label>
                        <label class="radio">
                            <input class="radiobtn" name="section25" type="radio" value="2" /><span>No</span>
                        </label>

                        <label><span>(<i>circle number</i>)</span></label>

                    </p>

                    <?php /*?><p class="s19" style="padding-top:3pt;padding-left:56pt;line-height:112%;text-align:center;">

              <p style="padding: 10px;background: #EAE8DA;">
                  <strong>FOR JOBTRAINER ENROLMENT ONLY</strong>
              </p>

          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q4. Are you seeking to enrol in a skill set under the JobTrainer initiative? <strong>Note:</strong> You can only enrol in <strong>one skill set</strong> under the JobTrainer initiative.

          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <label class="radio">

                  <input class="radiobtn" name="section26" type="radio" value="yes"/><span>YES</span>

              </label>

              <label class="radio">

                  <input class="radiobtn" name="section26" type="radio" value="no"/><span>NO</span>

              </label>

              <label><span>(<i>circle answer</i>)</span></label>&nbsp;

               <span>(If ‘NO’ go to Student Declaration)</span>



          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q5. If you answered “YES” to Q4, have you previously started a skill set under JobTrainer?
          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <label class="radio">

                  <input class="radiobtn" name="section27" type="radio" value="yes"/><span>YES</span>

              </label>

              <label class="radio">

                  <input class="radiobtn" name="section27" type="radio" value="no"/><span>NO</span>

              </label>

              <label><span>(<i>circle answer</i>)</span></label>&nbsp;

               <span>(If ‘NO’ go to Q7)</span>



          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q6. If you answered “YES” to Q5, are you applying to recommence in the same skill set that you already started under the JobTrainer initiative?

          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <label class="radio">

                  <input class="radiobtn" name="section28" type="radio" value="yes"/><span>YES</span>

              </label>

              <label class="radio">

                  <input class="radiobtn" name="section28" type="radio" value="no"/><span>NO</span>

              </label>

              <label><span>(<i>circle answer</i>)</span></label>&nbsp;

               <span>(If ‘YES’ or ‘NO’ go to Student Declaration)</span>



          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q7. Are you 17 to 24 years old?

          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <label class="radio">

                  <input class="radiobtn" name="section29" type="radio" value="yes"/><span>YES</span>

              </label>

              <label class="radio">

                  <input class="radiobtn" name="section29" type="radio" value="no"/><span>NO</span>

              </label>

              <label><span>(<i>circle answer</i>)</span></label>&nbsp;

               <span>(If ‘YES’ go to Student Declaration)</span>



          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q8. Are you a job seeker?

          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <label class="radio">

                  <input class="radiobtn" name="section30" type="radio" value="yes"/><span>YES</span>

              </label>

              <label class="radio">

                  <input class="radiobtn" name="section30" type="radio" value="no"/><span>NO</span>

              </label>

              <label><span>(<i>circle answer</i>)</span></label>&nbsp;

               <span>(If ‘NO’ go to Student Declaration)</span>



          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q9. If you answered “YES” to Q8, tick any of these boxes if they apply to you:

          </p>

          <p class="s11" style="padding-left: 50px; text-align:left;margin-top: 15px;">

              <input class="radiosquare" name="section31" type="checkbox" value="1"/><span style="margin-left:5px">I have a current and valid Health Care Card, Pensioner Concession Card or Veteran’s Gold Card</span><br/>

              <input class="radiosquare" name="section32" type="checkbox" value="1"/><span style="margin-left:5px">I have a letter from my employer or a company receiver on company letterhead that says I have been, or will be, made redundant or retrenched.</span><br/>

              <input class="radiosquare" name="section33" type="checkbox" value="1"/><span style="margin-left:5px">I have a Separation Certificate from my employer.</span><br/><br/>

              <label><span>(<i>(If you have ticked a box, go to Student Declaration)</i>)</span></label>
          </p>

          <p style="text-align:left;">

              <br/>

          </p>

          <p style="padding-left:7pt;text-align:justify;">

              Q10. If you did not tick any of the boxes in Q9, you can make a declaration that you are a job seeker by ticking this box and signing this form

          </p>

          <p class="s11" style="padding-left:105pt;text-align:left;margin-top: 15px;">

              <input class="radiosquare" name="section34" style="margin-left: 15px!important;" type="checkbox" value="1">

               <span>I declare that I am currently unemployed.</span>
          </p><?php */ ?>

                    <p class="s28"
                        style="padding-left:2pt;line-height:12pt;text-align:left;margin-top: 20px;background:#3975C4;text-align: center;padding: 10px;">

                        SKILLS FIRST

                        <b>

                            PROGRAM

                        </b>

                        <span class="s30">

                            - 2023 EVIDENCE OF STUDENT ELIGIBILITY AND STUDENT DECLARATION Page 2

                        </span>

                    </p>

                    <p style="padding-left:5pt;text-align:left;">

                    </p>

                    <p style="text-align:left;">

                        <br />

                    </p>

                </td>

            </tr>

        </table>

        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;" id="sectionb3">

            <tr>

                <td
                    style="width:100%;border-top-style:solid;border-top-width:1pt;border-top-color:#FF0000;border-left-style:solid;border-left-width:1pt;border-left-color:#FF0000;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#FF0000;border-right-style:solid;border-right-width:1pt;border-right-color:#FF0000">

                    <p class="s31" style="padding-top:1pt;padding-left:5pt;text-align:left;">

                        STUDENT DECLARATION – read and complete the declaration below

                    </p>

                </td>

            </tr>

            <tr>

                <td
                    style="width:100%;border-top-style:solid;border-top-width:1pt;border-top-color:#FF0000;border-left-style:solid;border-left-width:1pt;border-left-color:#FF0000;border-bottom-style:solid;border-bottom-width:1pt;border-bottom-color:#FF0000;border-right-style:solid;border-right-width:1pt;border-right-color:#FF0000">

                    <ul id="l21" style="padding-left: 30px;">

                        <li style="padding-right:44pt;line-height:112%;text-align:left;display: list-item;">

                            <p class="s15" style="display:inline;">

                                I understand that my enrolment may be subsidised by the Victorian and Commonwealth
                                Government under the Skills First Program. I understand my enrolment may affect my
                                eligibility for more Skills First training.

                            </p>

                        </li>

                        <li style="padding-right:27pt;line-height:112%;text-align:left;display: list-item;">

                            <p class="s15" style="display:inline;">

                                I understand that the Department of Jobs, Skills, Industry and Regions may contact me to
                                participate in a survey or interview.

                            </p>

                        </li>

                        <li style="padding-right:27pt;line-height:112%;text-align:left;display: list-item;">

                            <p class="s15" style="display:inline;">

                                I declare the information in this form is true and accurate.

                            </p>

                        </li>


                    </ul>


                    <p class="s32" style="padding-left:30pt;padding-right:30pt;text-align:center;">

                        Full Name:

                        <span class="s32">

                            <input class="underline" name="fname" id="fname" type="text" style="margin-right: 30px;">

                        </span>

                        Signed:

                        <span class="s32">

                            <canvas id="signature" name="signature" width="300" height="75"></canvas>

                            <input type="hidden" name="signature_image" id="signature_image">

                            <button onclick="signaturePad.clear();" type="button" class="btn btn-sm"
                                style="margin-right: 30px;">Clear</button>

                        </span>

                        Date:

                        <span class="s32">

                            <input class="underline" name="todaydate" id="todaydate" placeholder="DD / MM / YYYY"
                                type="text">

                        </span>

                    </p>

                </td>

            </tr>

        </table>

        <table border="0" cellpadding="0" cellspacing="0" style="width:100%;" id="sectionb4">

            <tr>

                <td>

                    <p class="s31" style="padding-top:1pt;text-align:center;">

                        <button type="button" class="btn btn-outline-primary" id="submitForm">Submit Form</button>

                    </p>

                </td>

            </tr>

        </table>

    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/signature_pad@2.3.2/dist/signature_pad.min.js"></script>

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

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

    <script>
        var canvas = document.querySelector("canvas");
        var signaturePad = new SignaturePad(canvas);
    </script>

    <script>

        $(document).ready(function () {
            $("#spinner").hide();
        });

        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
            return true;
        }
        var d = new Date();
        var month = d.getMonth() + 1;
        var day = d.getDate();
        var output = (('' + day).length < 2 ? '0' : '') + day + '/' + (('' + month).length < 2 ? '0' : '') + month + '/' + d.getFullYear();

        $("#todaydate").val(output);
        $("#CardType").on('change', function () {
            if (this.value == 'Y' || this.value == 'B') {
                $("#CardExpiry1").show();
            } else {
                $("#CardExpiry1").hide();
            }
        });

        $(document).on('keyup', '#CardNumber1', function (e) {
            if (this.value.length == 4) {
                $("#CardNumber2").focus();
            }
        });

        $(document).on('keyup', '#CardNumber2', function (e) {
            if (this.value.length == 5) {
                $("#CardNumber3").focus();
            }
        });

        $(document).on('keyup', '#CardNumber3', function (e) {
            if (this.value.length == 1) {
                $("#IndividualReferenceNumber").focus();
            }
        });

        $(document).on('keyup', '#IndividualReferenceNumber', function (e) {
            if (this.value.length == 1) {
                $("#FullName1").focus();
            }
        });

        $(document).on('keyup', '#CardExpiry1', function (e) {
            if (this.value.length == 2) {
                $("#CardExpiry2").focus();
            }
        });

        $(document).on('keyup', '#CardExpiry2', function (e) {
            if (this.value.length == 2) {
                $("#CardExpiry3").focus();
            }
        });

        $(document).on('keyup click', '.border-danger', function (e) {
            $('.border-danger').removeClass('border border-danger');
        });

        $(document).on('click', '#verify', function (e) {

            if ($("#CardType").val() == '') {
                $("#CardType").focus();
                $("#CardType").addClass('border border-danger');
                toastr["error"]('Please Select Card Type');
                return false;
            }

            if ($("#CardNumber1").val() == '') {
                $("#CardNumber1").focus();
                $("#CardNumber1").addClass('border border-danger');
                toastr["error"]('Please Enter Card Number');
                return false;
            }

            if ($("#CardNumber2").val() == '') {
                $("#CardNumber2").focus();
                $("#CardNumber2").addClass('border border-danger');
                toastr["error"]('Please Enter Card Number');
                return false;
            }

            if ($("#CardNumber3").val() == '') {
                $("#CardNumber3").focus();
                $("#CardNumber3").addClass('border border-danger');
                toastr["error"]('Please Enter Card Number');
                return false;
            }

            if ($("#IndividualReferenceNumber").val() == '') {
                $("#IndividualReferenceNumber").focus();
                $("#IndividualReferenceNumber").addClass('border border-danger');
                toastr["error"]('Please Enter Individual Reference Number');
                return false;
            }

            if ($("#FullName1").val() == '') {
                $("#FullName1").focus();
                $("#FullName1").addClass('border border-danger');
                toastr["error"]('Please Enter Your FullName');
                return false;
            }

            if (($("#CardType").val() == 'B' || $("#CardType").val() == 'Y') && $("#CardExpiry1").val() == '') {
                $("#CardExpiry1").focus();
                $("#CardExpiry1").addClass('border border-danger');
                toastr["error"]('Please Enter Card Expiry Date');
                return false;
            }

            if ($("#CardExpiry2").val() == '') {
                $("#CardExpiry2").focus();
                $("#CardExpiry2").addClass('border border-danger');
                toastr["error"]('Please Enter Card Expiry Date');
                return false;
            }

            if ($("#CardExpiry3").val() == '') {
                $("#CardExpiry3").focus();
                $("#CardExpiry3").addClass('border border-danger');
                toastr["error"]('Please Enter Card Expiry Date');
                return false;
            }

            if (!$("#consent").is(':checked')) {
                $("#consent").focus();
                toastr["error"]('Please accept our Terms');
                return false;
            }

            let _data = $('#mainForm').serialize();
            $.ajax({
                url: 'document-verify.php',
                type: "POST",
                dataType: "JSON",
                data: _data,

                success: function (res) {
                    console.log(res);
                    $("#verifyResult").val('1');
                    if (res.result) {
                        toastr["error"](res.result.error);
                    }
                    if (res.VerifyDocumentResult) {
                        if (res.VerifyDocumentResult.VerificationResultCode == 'Y') {
                            toastr["error"]('Success');
                        }

                        if (res.VerifyDocumentResult.VerificationResultCode == 'N') {
                            toastr["error"]('No Match Found..!');
                            $("#manualVerify").show();
                        }
                    }
                },

                error: function (err) {
                    console.log(err);
                    toastr["error"]('Something Went Wrong..!');
                }
            }); // end ajax
        });

        $(document).on('click', '#submitForm', function (e) {

            //if($("#verifyResult").val() != 1){
            //                     $("#CardType").focus();
            //                     $("#CardType").addClass('border border-danger');
            //                     toastr["error"]('Please Verify Your Card');
            //                     return false;
            //                 }

            //if($("#highestQualification").val() == ''){
            //                     $("#highestQualification").focus();
            //                     $("#highestQualification").addClass('border border-danger');
            //                     toastr["error"]('Please answer Q1');
            //                     return false;
            //                 }

            //if(!$("input[name=section6]").is(':checked')){
            //                     $("input[name=section6]").focus();
            //                     toastr["error"]('Please answer Q2');
            //                     return false;
            //                 }
            //                 if(!$("input[name=section7]").is(':checked')){
            //                     $("input[name=section7]").focus();
            //                     toastr["error"]('Please answer Q3');
            //                     return false;
            //                 }
            //                 if(!$("input[name=section8]").is(':checked')){
            //                     $("input[name=section8]").focus();
            //                     toastr["error"]('Please answer Q4');
            //                     return false;
            //                 }
            if ($("#fname").val() == '') {
                $("#fname").focus();
                toastr["error"]('Please answer Q1');
                $("#fname").addClass('border border-danger');
                return false;
            }
            //if( $("#qualification").val() == '' ){
            //                     $("#qualification").focus();
            //                     $("#qualification").addClass('border border-danger');
            //                     return false;
            //                 }
            //if(!$("input[name=section9]").is(':checked')){
            //                     $("input[name=section9]").focus();
            //                     return false;
            //                 }
            //if(!$("input[name=section10]").is(':checked')){
            //                     $("input[name=section10]").focus();
            //                     return false;
            //                 }
            //if( $("#placeOfResidence").val() == '' ){
            //                     $("#placeOfResidence").focus();
            //                     $("#placeOfResidence").addClass('border border-danger');
            //                     return false;
            //                 }
            if (signaturePad.isEmpty()) {
                $("#signature").focus();
                $("#signature").addClass('border border-danger');
                return false;
            } else {
                let img = signaturePad.toDataURL();
                $("#signature_image").val(img);
            }
            if ($("#todaydate").val() == '') {
                $("#todaydate").focus();
                $("#todaydate").addClass('border border-danger');
                return false;
            }

            $('#submitForm').prop('disabled', true);
            $('#submitForm').css('background-color', 'lightgrey');
            $('#submitForm').css('color', 'black');
            $('#submitForm').css('border', 'none');
            $("#spinner").show();
            $('#mainForm').submit();
        });

        function displaysection(secid) {
            if (secid == 'b1') {
                document.getElementById('sectionb1').style.display = 'block';
                document.getElementById('sectionb2').style.display = 'none';
                document.getElementById('sectionb3').style.display = 'block';
                document.getElementById('sectionb4').style.display = 'table';
            }
            else if (secid == 'b2') {
                document.getElementById('sectionb2').style.display = 'block';
                document.getElementById('sectionb1').style.display = 'none';
                document.getElementById('sectionb3').style.display = 'block';
                document.getElementById('sectionb4').style.display = 'table';
            }
        }

    </script>

</body>

</html>