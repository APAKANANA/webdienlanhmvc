		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/public/layout/css.css"/>
		<title><?php echo isset($title)? $title : NULL?></title>  
<meta charset="UTF-8"/>
<?php echo form_open('nguoidung/dangnhap')?>

    <div class="dangnhap">
                <h2>Chào mừng bạn đến với P&P </h2>
        <div class="nhap">
        <div id="khung">
                <div id="user">Tên đăng nhập: </div><input class="textbox" type="text" name="username" placeholder="username" value="<?php echo set_value('username'); ?>" />
				<div><?php echo isset($saitendn)?$saitendn:'';?><?php echo form_error('username','<div class="loidangnhap">','</div>'); ?></div>
				<div id="password">Mật khẩu:</div> <input class="textbox" type="password" name="password" placeholder="password"/>
				<div><?php echo isset($saimatkhau)?$saimatkhau:'';?><?php echo form_error('password','<div class="loidangnhap">','</div>'); ?></div>
                <p class="chualink"><?php echo anchor('nguoidung/hienthiformquenmk','Bạn đã quên mật khẩu?','class="quenpassword"'); ?></p>
                <section><input class="bt" id="btOKdangnhap" type="submit" name="OKthem" value="Đồng ý" />
                <input class="bt" type="reset" name="reset" value="Hủy bỏ" /></section>
				  <p class="chualink"><?php echo anchor('trangchu/trangchu1','Quay về trang chủ?'); ?></p>
				
        </div>
       </div>
    </div>
<?php echo form_close() ?>