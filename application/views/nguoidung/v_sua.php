<?php echo form_open('nguoidung/suanguoidung') ?>
	<div class="themsuand">
		<h3>Sửa Nhân Viên</h3>
		<br/>
			<p>Họ tên:<span>*</span>&nbsp;<input class="texboxnd" type="text" name="hoten"value="<?php echo isset($hiendulieudesua->hoten)?$hiendulieudesua->hoten:'';?>"/></p>
			<?php echo form_error('hoten','<div class="loind">','</div>'); ?>
			<p>Tên đăng nhập:<span>*</span>&nbsp;<input class="texboxnd" type="text" name="tendangnhap" value="<?php echo isset($hiendulieudesua->tendangnhap)?$hiendulieudesua->tendangnhap:'';?>"/></p>
			<?php echo form_error('tendangnhap','<div class="loind">','</div>'); ?>
			<p>Password:<span>*</span><input class="texboxnd" type="password" name="pass" value="<?php echo isset($hiendulieudesua->pass)?$hiendulieudesua->pass:'';?>"/></p>
			<?php echo form_error('pass','<div class="loind">','</div>'); ?>
            <p>CMND:<span>*</span>&nbsp;<input class="texboxnd" type="number" name="cmnd" value="<?php echo isset($hiendulieudesua->cmnd)?$hiendulieudesua->cmnd:'';?>"/></p>
            <?php echo form_error('cmnd','<div class="loind">','</div>'); ?>				
			<p>Giới tính:&nbsp;<select class="texboxnd" name="gioitinh">
								<?php if($hiendulieudesua->gioitinh=='Nam'){?>
									<option value="Nam" selected="selected">Nam</option>
									<option value="Nữ">Nữ</option>
								<?php }else{?>
									<option value="Nam">Nam</option>
									<option value="Nữ" selected="selected">Nữ</option>
								<?php }?>
								</select>
			<p>Ngày sinh:&nbsp;<input class="texboxnd" type="date" name="ngaysinh" value="<?php echo isset($hiendulieudesua->ngaysinh)?$hiendulieudesua->ngaysinh:'';?>"/></p>
			<p>Email:<span>*</span>&nbsp;<input class="texboxnd" type="text" name="email" value="<?php echo isset($hiendulieudesua->email)?$hiendulieudesua->email:'';?>"/></p>
			<?php echo form_error('email','<div class="loind">','</div>'); ?>
            <p>Địa chỉ:&nbsp;<input class="texboxnd" type="text" name="diachi" value="<?php echo isset($hiendulieudesua->diachi)?$hiendulieudesua->diachi:'';?>"/></p>		
			<p>Điện thoại:&nbsp;<input class="texboxnd" type="number" name="dienthoai" value="<?php echo isset($hiendulieudesua->dienthoai)?$hiendulieudesua->dienthoai:'';?>"/></p>			
			<input class="bt" id="btOKnguoidung" type="submit" name="OKthem" value="Đồng ý"/>
			<a href="<?php echo base_url('nguoidung/lietke');?>"><input class="bt" type="button" name="Reset" value="Hủy bỏ"/></a>
			<input type="hidden" name="manguoidung" value="<?php echo isset($hiendulieudesua->manguoidung)?$hiendulieudesua->manguoidung:'';?>"/><!--để mã ở đây cũng được-->	 
	</div>
<?php echo form_close(); ?>