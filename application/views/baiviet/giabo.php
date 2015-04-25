<html>
<head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/layout/index2.css"/>
        <title><?php echo $title;?></title>
</head>
<body>
        <div id="xungquanh">	
		<?php $this->load->view("chianho/header");?>
		<?php $this->load->view("chianho/menu");?>
		<?php $this->load->view($dsbaiviet);?>
		<?php $this->load->view("chianho/footer");?>	
	</div>
	
</body>
</html>