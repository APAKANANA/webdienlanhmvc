<?php #echo validation_errors(); ?>

<?php echo form_open('khuvuc/themkhuvuc'); ?>

	<div class="themsua">
		<h3>Thêm mới khu vực quản lý</h3>
		<br/>
		<br/>
		<p>Tên khu vực:<span>*</span> &nbsp;<input id="txtloai" type="text" name="tenkhuvuc" value="<?php echo set_value('tenkhuvuc'); ?>"/></p>
		<?php echo form_error('tenkhuvuc','<div class="loi">','</div>'); ?>
		<br/>
		<input class="bt" id="btOKkhuvuc" type="submit" name="OKthem" value="Đồng ý"/>
		<input class="bt" type="reset" name="Reset" value="Hủy bỏ"/>
		
	</div>
<?php echo form_close(); ?>