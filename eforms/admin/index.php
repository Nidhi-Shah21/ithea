<?php
session_start();

if(!isset($_SESSION['is_admin']) || !$_SESSION['is_admin']){

    $error = false;
    $fields = array( 'email', 'password' );
    foreach ( $fields as $field ) {
        if ( empty( $_POST[$field] ) || trim( $_POST[$field] ) == '' )
            $error = true;
    }

    if ( ! $error ) {
        $email = trim( strtolower($_POST['email']) );
        $password = stripslashes( $_POST['password'] );
        if( $email == 'admin@ithea.com' && $password == 'ithea' ) {
            $_SESSION['is_admin'] = true;
        } else {
            header("Location: login.php");
            exit;
        }
    } else {
        header("Location: login.php");
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
        <title>Dashboard</title>
        <meta name="description" content="ITHEA">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
        <!--end::Fonts -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="template/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="template/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="template/assets/css/skins/header/base/light.css" rel="stylesheet" type="text/css" />
        <link href="template/assets/css/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
        <link href="template/assets/css/skins/brand/dark.css" rel="stylesheet" type="text/css" />
        <link href="template/assets/css/skins/aside/dark.css" rel="stylesheet" type="text/css" />

        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="template/assets/media/logos/favicon.ico" />
        <style>.kt-portlet{ min-height:100%; }.toast-top-center{top: 7%;}</style>
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="">

        <!-- begin:: Page -->

        <div class="kt-grid kt-grid--hor kt-grid--root">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                    <!-- begin:: Header -->
                    <div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " style="padding: 10px;height: 60px;">

                        <!-- begin:: Header Menu -->
                        <div class="" id="kt_header_menu_wrapper">
                            <a href="#">
                                <img alt="Logo" src="template/assets/media/logos/logo.jpg" style="width: 90px;margin-left: 17px;" />
                            </a>
                        </div>
                        <!-- end:: Header Menu -->

                        <!-- begin:: Header Topbar -->
                        <div class="kt-header__topbar">
                            <a href="logout.php" target="_blank" class="btn btn-label-danger btn-bold pull-right">Logout</a>
                        </div>
                        <!-- end:: Header Topbar -->
                    </div>

                    <!-- end:: Header -->
                    <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content" style="margin-top: 50px;">
                        <!-- begin:: Content -->
                        <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                            <div class="kt-portlet kt-portlet--mobile">
                                <div class="kt-portlet__head kt-portlet__head--lg">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Dashboard
                                        </h3>
                                    </div>
                                    <div class="kt-portlet__head-toolbar">
                                        <!-- <a href="logout.php" target="_blank" class="btn btn-brand btn-bold pull-right">Send New Mail</a> -->
                                        <button type="button" class="btn btn-bold btn-brand btn-sm" data-toggle="modal" data-target="#kt_modal_5">Send New Links</button>
                                    </div>

                                </div>

                                <div class="kt-portlet__body">

                                    <!--begin: Search Form -->
                                    <div class="kt-form kt-form--label-right kt-margin-b-10">
                                        <div class="row align-items-center">
                                            <div class="col-xl-8 order-2 order-xl-1">
                                                <div class="row align-items-center">

                                                    <div class="col-md-4 kt-margin-b-20-tablet-and-mobile pull-right"></div>
                                                    <div class="col-md-4 kt-margin-b-20-tablet-and-mobile pull-right"></div>
                                                    <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                        <div class="kt-input-icon kt-input-icon--left">
                                                            <input type="text" class="form-control" placeholder="Search..." id="generalSearch">
                                                            <span class="kt-input-icon__icon kt-input-icon__icon--left">
                                                                <span><i class="la la-search"></i></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--end: Search Form -->
                                </div>
                                <div class="kt-portlet__body kt-portlet__body--fit">

                                    <!--begin: Datatable -->
                                    <div class="kt-datatable" id="local_data"></div>

                                    <!--end: Datatable -->
                                </div>
                            </div>
                        </div>

                        <!-- end:: Content -->

                    </div>

                    <!-- begin:: Footer -->
                    <div class="kt-footer  kt-grid__item kt-grid kt-grid--desktop kt-grid--ver-desktop" id="kt_footer">
                        <div class="kt-container  kt-container--fluid ">
                            <div class="kt-footer__copyright">
                                <?php echo Date('Y'); ?>&nbsp;&copy;&nbsp;<a href="#" target="_blank" class="kt-link">Ithea</a>
                            </div>

                        </div>
                    </div>

                    <!-- end:: Footer -->
                </div>
            </div>
        </div>

        <!-- end:: Page -->



            <!--begin::Modal-->
            <div class="modal fade" id="kt_modal_5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                    <form id="form_send_mail">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Send New Links</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name" class="form-control-label">Recipient Name:</label>
                                        <input type="text" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="form-control-label">Recipient Email:</label>
                                        <input type="text" class="form-control" name="email" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="form-control-label">Recipient Phone:</label>
                                        <input type="number" class="form-control" name="phone" id="phone">
                                    </div>
                                    <div class="form-group">
                                        <div class="kt-checkbox-list">
                                            <label class="kt-checkbox kt-checkbox--tick kt-checkbox--success">
                                                <input type="checkbox" name="link1" id="link1" value='1' checked="checked"> ELIGIBILITY FORM
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="kt-checkbox-list">
                                            <label class="kt-checkbox kt-checkbox--tick kt-checkbox--success">
                                                <input type="checkbox" name="link2" id="link2" value='1' checked="checked"> PRE-TRAINING FORM
                                                <span></span>
                                            </label>
                                        </div>
                                        <div class="kt-checkbox-list">
                                            <label class="kt-checkbox kt-checkbox--tick kt-checkbox--success">
                                                <input type="checkbox" name="link3" id="link3" value='1' checked="checked"> PRE-TRAINING TRADE FORM
                                                <span></span>
                                            </label>
                                        </div>

                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" id="submitbtn" class="btn btn-primary">Send Email</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!--end::Modal-->
        <!-- begin::Scrolltop -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>

        <!-- end::Scrolltop -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": [
                            "#c5cbe3",
                            "#a1a8c3",
                            "#3d4465",
                            "#3e4466"
                        ],
                        "shape": [
                            "#f0f3ff",
                            "#d9dffa",
                            "#afb4d4",
                            "#646c9a"
                        ]
                    }
                }
            };
        </script>

        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="template/assets/plugins/global/plugins.bundle.js" type="text/javascript"></script>
        <script src="template/assets/js/scripts.bundle.js" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts(used by this page) -->
    <script type="text/javascript">

        toastr.options = {

          "closeButton": true,

          "debug": false,

          "newestOnTop": false,

          "progressBar": true,

          "positionClass": "toast-top-center",

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
        <script src="template/assets/js/pages/dashboard.js" type="text/javascript"></script>
        <script src="template/assets/js/pages/crud/metronic-datatable/base/data-local.js" type="text/javascript"></script>
        <script>
            $(document).on("submit", "#form_send_mail", function(e) {
                e.preventDefault();

                if($("#name").val() == ''){
                    $("#name").focus();
                    toastr["error"]("Please Enter Name.!");
                    return false;
                }

                if($("#email").val() == ''){
                    $("#email").focus();
                    toastr["error"]("Please Enter Email.!");
                    return false;
                }

                if($("#phone").val() == ''){
                    $("#phone").focus();
                    toastr["error"]("Please Enter Phone Number.!");
                    return false;
                }

                if(!$("#link1").is(':checked') && !$("#link2").is(':checked') && !$("#link3").is(':checked')){
                    toastr["error"]("Please Select form!");
                    return false;
                }

                $('#submitbtn').attr('disabled', 'true');
                $('#submitbtn').text('Loading...');
                $.ajax({
                    url: "sendmail.php",
                    type: "POST",
                    dataType: "JSON",
                    data: $(this).serialize(),
                    success: function(res) {
                        if( res.status == true ) {
                            location.reload();
                        }
                        if( res.status == false ) {
                            toastr["error"](res.msg);
                        }
                    }
                }); // end ajax
            });

        </script>
        <!--end::Page Scripts -->
    </body>

    <!-- end::Body -->
</html>
