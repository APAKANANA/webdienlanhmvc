	<meta charset="UTF-8"/>
	<script type="text/javascript" src="<?php echo base_url();?>public/js/jquery-1.8.0.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url() ?>public/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>public/ckfinder/ckfinder.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/layout/css.css"/>
<?php echo form_open('dangky/thuchiendk'); ?>
<form name="myform" action="" method="post">
<div id="dangky">
	<div id="tieudedk">
		<p>Đăng ký tài khoản</p>
	</div>
	<div id="nddangky">
	<div id="tk">Họ tên *: <input type="text" placeholder="Họ tên người dùng" name="hoten" value="<?php echo set_value('hoten'); ?>"/></div>
	<?php echo form_error('hoten','<div class="loiitdk">','</div>'); ?>
	<div id="tk">tài khoản *: <input type="text" placeholder="tên tài khoản người dùng" name="taikhoan" value="<?php echo set_value('taikhoan'); ?>"/></div>
	<?php echo form_error('taikhoan','<div class="loiitdk">','</div>'); ?>
	<div id="mk1">Mật khẩu *: <input type="password"  placeholder="Mật khẩu" name="matkhau1" value="<?php echo set_value('matkhau1'); ?>"/></div>
	<?php echo form_error('matkhau1','<div class="loiitdk">','</div>'); ?>
	<div id="mk2">Nhập lại *: <input type="password" value="" placeholder="Nhập lại mật khẩu" name="matkhau2" value="<?php echo set_value('matkhau2'); ?>"/></div>
	<?php echo form_error('matkhau2','<div class="loiitdk">','</div>'); ?>
	<div id="tk">Số CMND *: <input type="text"  placeholder="Số CMND" name="socmnd" value="<?php echo set_value('socmnd'); ?>"/></div>
	<?php echo form_error('socmnd','<div class="loiitdk">','</div>'); ?>
	<div id="tk">Ngày sinh: <input type="date" value="" name="ngaysinh" /></div>
	<div id="gioitinh"><p>Giới tính:</p> <select>
		<option>Nam</option>
		<option>Nữ</option> </select></div>
	<div id="emaildk">Email *: <input type="text" value="" placeholder="Email" name="email"value="<?php echo set_value('email'); ?>"/></div>
	<?php echo form_error('email','<div class="loiitdk">','</div>'); ?>
	<div id="dc">Địa chỉ: <input type="text" value="" placeholder="Địa chỉ" name="diachi"/></div>
	<div id="sdt">Điện thoại *: <input type="text" value="" placeholder="Số điện thoại" name="sodienthoai"value="<?php echo set_value('sodienthoai'); ?>"/></div>
	<?php echo form_error('sodienthoai','<div class="loiitdk">','</div>'); ?>
	</div>
	<div id="giaotac">
	<div id="ck1"><input type="checkbox" name="checked"/>Tôi đã xem kỹ và đồng ý với các điều khoản đưa ra</div>
	<?php echo form_error('ckecked','<div class="loiitcb">','</div>'); ?>
	<button id="btndk" onclick="kt()">Hoàn tất đăng ký</button>
	<button id="btnhuybo">Hủy bỏ</button>
	</div>
	
</div>
</form>