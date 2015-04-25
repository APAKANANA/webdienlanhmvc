<html>
<head>
	<meta charset="UTF-8"/>
	<title> <?php echo isset($title)? $title : NULL?></title> 
        
	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.8.0.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url() ?>public/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/ckfinder/ckfinder.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/layout/css.css"/>
	<?php include_once(dirname(__FILE__) . '/chianho/head.php'); ?>
</head>

<body class="page-body">
 
    <div class="page-container">
            
        <?php include_once('left.php'); ?>
        <div class="main-content">
                 <?php 
					  if($this->session->userdata('hoten')) {
					  	//echo $this->session->userdata('hoten');
					  	include 'chianho/header_admin.php';
					  }else{
							include 'chianho/header.php';
							}
                       ?>
                
          
            <?php
                if(isset($path))
                {
                    foreach($path as $view)
                    {
                        $this->load->view($view);
                    }
                }
            ?>
            <div class="xoa"></div>
              <?php include_once(dirname(__FILE__) . '/chianho/footer.php'); ?>  
        </div>
    </div>
<?php include_once(dirname(__FILE__) . '/chianho/scripts.php'); ?>
<script type="text/javascript">
var editor = CKEDITOR.replace( 'editor1', {
    filebrowserBrowseUrl : '../public/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '../public/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : '../public/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor, '../' );
var editor2 = CKEDITOR.replace( 'editor2', {
    filebrowserBrowseUrl : '../public/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '../public/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : '../public/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor2, '../' );
var editor3 = CKEDITOR.replace( 'editor3', {
    filebrowserBrowseUrl : '../public/ckfinder/ckfinder.html',
    filebrowserImageBrowseUrl : '../public/ckfinder/ckfinder.html?type=Images',
    filebrowserFlashBrowseUrl : '../public/ckfinder/ckfinder.html?type=Flash',
    filebrowserUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
    filebrowserImageUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
    filebrowserFlashUploadUrl : '../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
});
CKFinder.setupCKEditor( editor3, '../' );
</script>
 		
</body>
</html>