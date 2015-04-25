<?php echo form_open('nguoidung/suathongtinnguoidung') ?>
	<?php #echo validation_errors(); ?>
	<div class="themsuand">
		<h3>Cập nhật thông tin.</h3>
		<br/>
			<p>Họ tên:<span>*</span><input class="texboxndd" type="text" name="hoten" value="<?php echo isset($hiendulieusuathongtinnguoidung->hoten)?$hiendulieusuathongtinnguoidung->hoten:'';?>"/></p>
			<?php echo form_error('hoten','<div class="loisuattnd">','</div>'); ?>
            <p>Password:<span>*</span><input class="texboxndd" type="password" name="pass" value="<?php echo isset($hiendulieusuathongtinnguoidung->pass)?$hiendulieusuathongtinnguoidung->pass:'';?>"/></p>
            <?php echo form_error('pass','<div class="loisuattnd">','</div>'); ?>
            <p>CMND:<span>*</span>&nbsp;<input class="texboxndd" type="number" name="cmnd" value="<?php echo isset($hiendulieusuathongtinnguoidung->cmnd)?$hiendulieusuathongtinnguoidung->cmnd:'';?>"/></p>
            <?php echo form_error('cmnd','<div class="loisuattnd">','</div>'); ?>			
			<p>Giới tính:&nbsp;<select class="texboxndd" name="gioitinh">
								<?php if($hiendulieusuathongtinnguoidung->gioitinh=='Nam'){?>
									<option value="Nam" selected="selected">Nam</option>
									<option value="Nữ">Nữ</option>
								<?php }else{?>
									<option value="Nam">Nam</option>
									<option value="Nữ" selected="selected">Nữ</option>
								<?php }?>
								</select>
			
			
			<p>Ngày sinh:&nbsp;<input class="texboxndd" type="date" name="ngaysinh" value="<?php echo isset($hiendulieusuathongtinnguoidung->ngaysinh)?$hiendulieusuathongtinnguoidung->ngaysinh:'';?>"></p>
            <p>Email:<span>*</span>&nbsp;<input class="texboxndd" type="text" name="email" value="<?php echo isset($hiendulieusuathongtinnguoidung->email)?$hiendulieusuathongtinnguoidung->email:'';?>"/></p>
            <?php echo form_error('email','<div class="loisuattnd">','</div>'); ?>
            <p>Địa chỉ:&nbsp;<input class="texboxndd" type="text" name="diachi" value="<?php echo isset($hiendulieusuathongtinnguoidung->diachi)?$hiendulieusuathongtinnguoidung->diachi:'';?>"/></p>
           
			<p>Điện thoại:&nbsp;<input class="texboxndd" type="number" name="dienthoai" value="<?php echo isset($hiendulieusuathongtinnguoidung->dienthoai)?$hiendulieusuathongtinnguoidung->dienthoai:'';?>"/></p>
            <input type="hidden" name="manguoidung" value="<?php echo isset($hiendulieusuathongtinnguoidung->manguoidung)?$hiendulieusuathongtinnguoidung->manguoidung:'';?>"/>
			<br>
			<input type="hidden" name="manguoidung" value="<?php echo isset($hiendulieusuathongtinnguoidung->manguoidung)?$hiendulieusuathongtinnguoidung->manguoidung:'';?>"/>
			<input class="bt" id="btOKttnd" type="submit" name="OKsua" value="Đồng ý"/>
			<a href="<?php echo base_url('loaisp/layout_lietke');?>"><input class="bt" type="button" name="Reset" value="Hủy bỏ"/></a>
		
	</div>
<?php echo form_close(); ?>