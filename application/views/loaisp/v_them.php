<?php #echo validation_errors(); ?>

<?php echo form_open('loaisp/themloaisp'); ?>

<!--<form action="" method="post">-->
		<div class="page-title">
                           <div class="title-env">
                               <h1 class="title">Quản lý loại sản phẩm</h1>
                               <p class="description">Truy cập nhanh các chức năng quản lý</p>
                           </div>
                </div>
            <div class="themsua">
            <h4>Thêm mới loại sản phẩm</h4> 
		<p>Tên loại sp:<span>*</span> &nbsp;<input id="txtloai" type="text" name="tenloai" value="<?php echo set_value('tenloai'); ?>"/></p>
		<?php echo form_error('tenloai','<div class="loiloaisp">','</div>'); ?>
		<br/>
		<input class="btn btn-secondary" id="btOKloaisp" type="submit" name="OKthem" value="Đồng ý"/>
		<input class="btn btn-secondary" type="submit" name="Reset" value="Hủy bỏ"/>
            </div>
<?php echo form_close(); ?>