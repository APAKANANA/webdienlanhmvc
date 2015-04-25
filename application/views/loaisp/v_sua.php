<?php #$maloai= array('ma'=>$hiendulieudesua["maloai"]); echo #$maloai['ma']; ?>
<?php echo form_open('loaisp/sualoaisp') ?><!--truyền tham số vô đây là attribute rồi, không phải là đối số truyền qua trang khác  echo form_open('loaisp/sualoaisp',$maloai)-->
	<div class="themsua">
		<h3>Sửa Loại Sản Phẩm</h3>
		<br/>
		<br/>
        
		<p>Tên loại sp:<span>*</span> &nbsp;<input id="txtloai" type="text" name="tenloai" value="<?php echo isset($hiendulieudesua['tenloai'])?$hiendulieudesua['tenloai']:'';?>"/></p>
        <?php echo form_error('tenloai','<div class="loiloaisp">','</div>'); ?>
        <input type="hidden" name="maloai" value="<?php echo isset($hiendulieudesua['maloai'])?$hiendulieudesua['maloai']:'';?>"/>
		<br/>
		<input class="bt" id="btOKloaisp" type="submit" name="OKsua" value="Đồng ý"/>
		<a href="<?php echo base_url('loaisp/lietke');?>"><input class="bt" type="button" name="Reset" value="Hủy bỏ"/></a>
		
	</div>
<?php echo form_close(); ?>