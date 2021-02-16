<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="<?= site_url('assets/images/favicon.ico'); ?>">

    <title>Tittle</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?= site_url('assets/plugins/morris/morris.css'); ?>">

    <!-- DataTables -->
    <link href="<?= site_url('assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css'); ?>" />
    <link href="<?= site_url('assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css'); ?>" />
    <link href="<?= site_url('assets/plugins/datatables/fixedHeader.bootstrap.min.css" rel="stylesheet" type="text/css'); ?>" />
    <link href="<?= site_url('assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css'); ?>" />
    <link href="<?= site_url('assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css'); ?>" />

    <!-- App css -->
    <link href="<?= site_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url('assets/css/core.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url('assets/css/components.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url('assets/css/icons.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url('assets/css/pages.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url('assets/css/menu.css'); ?>" rel="stylesheet" type="text/css" />
    <link href="<?= site_url('assets/css/responsive.css'); ?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- JS -->
    <script type="text/javascript"> var BASE_URL = "<?php echo base_url();?>"; </script>


    <!-- jQuery  -->
    <script src="<?= site_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= site_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= site_url('assets/js/detect.js'); ?>"></script>
    <script src="<?= site_url('assets/js/fastclick.js'); ?>"></script>
    <script src="<?= site_url('assets/js/jquery.slimscroll.js'); ?>"></script>
    <script src="<?= site_url('assets/js/jquery.blockUI.js'); ?>"></script>
    <script src="<?= site_url('assets/js/waves.js'); ?>"></script>
    <script src="<?= site_url('assets/js/jquery.nicescroll.js'); ?>"></script>
    <script src="<?= site_url('assets/js/jquery.scrollTo.min.js'); ?>"></script>


    <!-- SweetAlert -->
    <script src="<?= site_url('assets/vendors/sweetalert/dist/sweetalert.min.js'); ?>"></script>

    <!-- Custom Alert -->
    <script src="<?= site_url('assets/js/custom_alert.js'); ?>"></script>

    <!-- JQueryUI Get Auto Complete -->
    <script src="<?= site_url('assets/plugins/jquery-ui/jquery-ui.js'); ?>"></script>

    <!-- Datatables-->
    <script src="<?= site_url('assets/plugins/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/dataTables.bootstrap.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/dataTables.buttons.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/buttons.bootstrap.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/jszip.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/pdfmake.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/vfs_fonts.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/buttons.html5.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/buttons.print.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/dataTables.fixedHeader.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/dataTables.keyTable.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/responsive.bootstrap.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/datatables/dataTables.scroller.min.js'); ?>"></script>

    <!-- Datatable init js -->
    <script src="<?= site_url('assets/pages/datatables.init.js'); ?>"></script>
    
    <!-- Date Picker -->
    <script src="<?= site_url('assets/plugins/switchery/switchery.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'); ?>"></script>
    <script type="text/javascript" src="<?= site_url('assets/plugins/multiselect/js/jquery.multi-select.js'); ?>"></script>
    <script type="text/javascript" src="<?= site_url('assets/plugins/jquery-quicksearch/jquery.quicksearch.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/select2/dist/js/select2.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= site_url('assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= site_url('assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= site_url('assets/plugins/moment/moment.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
    <script src="<?= site_url('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js'); ?>" type="text/javascript"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- CSS only -->

    <script src="<?= site_url('assets/cus.js'); ?>"></script>
    <style type="text/css">



.dropdown-container {
    width: 88%;
  display: none;
  background-color: white;
  padding-left: 8px;
  margin-left: 20px;
}


.fa-caret-down {
  float: right;
  padding-right: 8px;
}
   
    .scrollable-menu {
    height: auto;
    max-height: 200px;
    overflow-x: hidden;

}

.scrollku::-webkit-scrollbar {
    
  width: 8px;
}


.scrollku::-webkit-scrollbar-track {
   
  
}
 

.scrollku::-webkit-scrollbar-thumb {
  background: #888; 
 /* border-radius: 10px;*/
}


.scrollku::-webkit-scrollbar-thumb:hover {
  background: #555; 
}
        .area::-webkit-scrollbar {
    
  width: 8px;
}


.area::-webkit-scrollbar-track {
   
  
}
 

.area::-webkit-scrollbar-thumb {
  background: #888; 
 /* border-radius: 10px;*/
 
}


.area::-webkit-scrollbar-thumb:hover {
  background: #555; 
  
}
textarea {
    cursor: auto;
}
.cardku{
    border: 2px solid #00415a;
    border-radius: 2px;
    
}
    </style>

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">
