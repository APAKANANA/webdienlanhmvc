<meta charset="UTF-8"/>
<?php echo form_open('nguoidung/thuchientaotaikhoan')?>

    <div class="dangnhap">
                <h3>Tạo quản trị hệ thống</h3>
        <div class="nhap">
        <div id="khung">
                <div id="user">Tên đăng nhập: </div><input class="textbox" type="text" name="username" placeholder="username" value="<?php echo set_value('username'); ?>" />
				<div><?php echo isset($saitendn)?$saitendn:'';?><?php echo form_error('username','<div class="loi">','</div>'); ?></div>
				<div id="password">Mật khẩu:</div> <input class="textbox" type="password" name="password" placeholder="password"value="<?php echo set_value('password'); ?>"/>
				<div><?php echo isset($saimatkhau)?$saimatkhau:'';?><?php echo form_error('password','<div class="loi">','</div>'); ?></div>
				<div id="Email">Email:</div> <input class="textbox" type="textbox" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>"/>
					<?php echo form_error('email','<div class="loi">','</div>'); ?>
                <section><input class="bt" id="btOKdangnhap" type="submit" name="OKthem" value="Đồng ý" />
                <input class="bt" type="reset" name="reset" value="Hủy bỏ" /></section>
        </div>
       </div>
    </div>
<?php echo form_close() ?>