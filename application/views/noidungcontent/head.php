<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<!--<meta name="description" content="Xenon Boostrap Admin Panel" />-->
	<!--<meta name="author" content="" />-->
        
        <title><?php echo ($title ? $title : '') ?></title>
        
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/xenon/html/assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/xenon/html/assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/xenon/html/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/xenon/html/assets/css/xenon-core.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/xenon/html/assets/css/xenon-forms.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/xenon/html/assets/css/xenon-components.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/xenon/html/assets/css/xenon-skins.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>templates/xenon/html/assets/css/custom.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>templates/xenon/html/assets/css/mystyle.css">

	<script src="<?php echo base_url(); ?>templates/xenon/html/assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

        
        
        <link href="<?php echo base_url(); ?>templates/sb-admin/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
        <script type="text/javascript" src="<?php echo base_url(); ?>editor/tiny_mce.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.js"></script>
        <link rel="stylesheet" href="<?php echo base_url(); ?>templates/jquery-ui-1.10.4.redmond/css/redmond/jquery-ui-1.10.4.custom.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>templates/datetimepicker/jquery.datetimepicker.css" />
        
        <?php
        if ($this->session->userdata('logged_in')) {
            $loggedUser = $this->session->userdata('logged_in');
        }
            ?>

    </head>
    
