<?php echo form_open('khuvuc/suakhuvuc') ?>
	<div class="themsua">
		<h3>Sửa khu vực quản lý</h3>
		<br/>
		<br/>
        
		<p>Tên khu vực:<span>*</span> &nbsp;<input id="txtloai" type="text" name="tenkhuvuc" value="<?php echo isset($hiendulieudesua['tenkhuvuc'])?$hiendulieudesua['tenkhuvuc']:'';?>"/></p>
        <?php echo form_error('tenkhuvuc','<div class="loi">','</div>'); ?>
		<br/>
        <input type="hidden" name="makhuvuc" value="<?php echo isset($hiendulieudesua['makhuvuc'])?$hiendulieudesua['makhuvuc']:'';?>"/>
		<input class="bt" id="btOKkhuvuc" type="submit" name="OKsua" value="Đồng ý"/>
		<a href="<?php echo base_url('khuvuc/lietke');?>"><input class="bt" type="button" name="Reset" value="Hủy bỏ"/></a>
		
	</div>
<?php echo form_close(); ?>