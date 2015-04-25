
<html>
<head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/layout/css.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/themes/default/default.css" media="screen"/>
		 <link rel="stylesheet" href="<?php echo base_url() ?>/public/themes/light/light.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/public/themes/dark/dark.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/public/themes/bar/bar.css" type="text/css" media="screen" />
		<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.nivo.slider.pack.js" media="screen"></script>
		<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery.nivo.slider.js" media="screen"></script>
		<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.8.0.min.js" media="screen"></script>
		
		
		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>	-->	
		<title> <?php echo isset($title)? $title : NULL?></title>  
</head>
<body>   
                <?php 
                       
					  if($this->session->userdata('hoten')) {
						include 'chianho/header_thanhvien.php';
						}else{
							include 'chianho/header.php';
							}
						?>
							<div id="vien">
						<?php
						include 'chianho/contentleft.php';
                        include 'chianho/content.php';
                        include 'chianho/footer.php';?>
						</div>
                     
</body>
</html>