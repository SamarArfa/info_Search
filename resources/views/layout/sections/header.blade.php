<!-- BEGIN HEAD -->
<head>
    <?php
    // $cur_controller = $this->router->class;
    // $cur_function = $this->router->method;
    // $cont_title = NULL;
    // $func_title = NULL;
    // foreach ($conts as $key => $cont_val) {
    //     foreach ($cont_val as $cont_row) {
    //         if ($cont_row['name'] == $cur_controller) {
    //             $cont_title = $cont_row['title'];
    //             $cont_name = $cont_row['name'];
    //         }
    //     }
    // }
    // foreach ($funcs as $key => $func_val) {
    //     foreach ($func_val as $func_row) {
    //         if ($cur_function == $func_row['name']) {
    //             $func_title = $func_row['title'];
    //             $func_name = $func_row['name'];
    //         }
    //     }
    // }
    ?>
<meta charset="utf-8"/>
<title>
    @if (isset($pageTitle))
    {{ $pageTitle }}
    @else
    الصفحة الرئيسية
    @endif
    
   
</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="csrf-token" content="{{ csrf_token() }}" />
<script src="{{ asset(config('constants.cpanel').'/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<!--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>-->
<link href="{{ asset(config('constants.cpanel').'/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset(config('constants.cpanel').'/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset(config('constants.cpanel').'/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset(config('constants.cpanel').'/assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset(config('constants.cpanel').'/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css') }}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset(config('constants.cpanel').'/assets/global/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset(config('constants.cpanel').'/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap-rtl.css') }}" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->

<link href="{{ asset(config('constants.cpanel').'/assets/global/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css"/>
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="{{ asset(config('constants.cpanel').'/assets/global/css/components-rtl.css') }}" id="style_components" rel="stylesheet" type="text/css"/>
<link href="{{ asset(config('constants.cpanel').'/assets/global/css/plugins-rtl.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset(config('constants.cpanel').'/assets/admin/layout/css/layout-rtl.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset(config('constants.cpanel').'/assets/admin/layout/css/themes/default-rtl.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ asset(config('constants.cpanel').'/assets/admin/layout/css/custom-rtl.css') }}" rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->


<!--<link href="<?php //echo base_url(); ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
<link href="<?php //echo base_url(); ?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php //echo base_url(); ?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>-->

<!-- BEGIN PAGE STYLES -->
<!--<link href="<?php //echo base_url(); ?>assets/admin/pages/css/tasks-rtl.css" rel="stylesheet" type="text/css"/>-->
<!-- END PAGE STYLES -->

<!-- DOC: To use 'rounded corners' style just load 'components-rounded-rtl.css' stylesheet instead of 'components-rtl.css' in the below style tag -->

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>

</head>
<!-- END HEAD -->