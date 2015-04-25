<?php echo form_open('nguoidung/themnguoidung'); ?>
	<div class="themsuand">
		<h3>Thêm Mới Nhân Viên</h3>
		<br/>
			<p>Họ tên:<span>*</span>&nbsp;<input class="texboxnd" type="text" name="hoten" value="<?php echo set_value('hoten'); ?>"/></p>
            <?php echo form_error('hoten','<div class="loind">','</div>'); ?>
			<p>Tên đăng nhập:<span>*</span>&nbsp;<input class="texboxnd" type="text" name="tendangnhap" value="<?php echo set_value('tendangnhap'); ?>"/></p>
            <?php echo form_error('tendangnhap','<div class="loind">','</div>'); ?>
			<p>Password:<span>*</span><input class="texboxnd" type="password" name="pass" value="<?php echo set_value('pass'); ?>"/></p>
            <?php echo form_error('pass','<div class="loind">','</div>'); ?>			
            <p>CMND:<span>*</span>&nbsp;<input class="texboxnd" type="number" name="cmnd" value="<?php echo set_value('cmnd'); ?>"/></p>
            <?php echo form_error('cmnd','<div class="loind">','</div>'); ?>				
			<p>Giới tính:&nbsp;<select class="texboxnd" name="gioitinh">
									<option value="Nam">Nam</option>
									<option value="Nữ">Nữ</option>
								</select>
            <p>Ngày sinh:&nbsp;<input class="texboxnd" type="date"  name="ngaysinh"/></p>
            <p>Email:<span>*</span>&nbsp;<input class="texboxnd" type="text" name="email"/></p>
            <?php echo form_error('email','<div class="loind">','</div>'); ?>
            <p>Địa chỉ:&nbsp;<input class="texboxnd" type="text" name="diachi"/></p>
			<p>Điện thoại:&nbsp;<input class="texboxnd" type="number" name="dienthoai"/></p>			
			<input class="bt" id="btOKnguoidung" type="submit" name="OKthem" value="Đồng ý"/>
			<input class="bt" type="reset" name="Reset" value="Hủy bỏ"/>	 
	</div>
<?php echo form_close(); ?>