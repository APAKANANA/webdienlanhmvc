		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/layout/css.css"/>
<?php echo form_open('nguoidung/quenmatkhau')?>
    <div class="dangnhap">
        	<h3>Quên mật khẩu</h3>
        <div class="quenmatkhau">
        <div id="khung">
        	<div id="user">Email: </div><input type="text" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
        	<div><?php echo isset($saiemail)?$saiemail:'';?><?php echo form_error('email','<div class="loi">','</div>'); ?></div>
        	<input class="bt" id="btOKdangnhap" type="submit" name="OKthem" value="Nhận mật khẩu mới" />
        	<input class="bt" type="reset" name="reset" value="Hủy bỏ" />
			 <p class="chualink"><?php echo anchor('trangchu/trangchu1','Quay về trang chủ?'); ?></p>
        </div>
       </div>
    </div>
<?php echo form_close() ?>
