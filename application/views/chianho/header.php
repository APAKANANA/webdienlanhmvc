
<div id="header">
	<div id="trenmenu">
	<ul>
		
		<li><?php echo anchor('nguoidung/ycdangnhap','Đăng nhập') ?></li>
		<li><?php echo anchor('dangky/dk','Đăng ký') ?></li>
	</ul>
	<p><i>Điện Lạnh</i></p>
	<span> P&P </span>
	<marquee>Đồng hành cùng mọi gia đình</marquee>
	<div id="logo">
	<!--<div id="p1"><div id="hinh1"></div>
	<p>Uy tín, chất lượng</p></div>
	<div id="p2"><div id="hinh2"></div>
	<p>Bảo hành tận nơi</p>
	</div>
	<div id="p3"><div id="hinh3"></div>
	<p>Tư vấn trực tiếp</p></div>
	</div>-->
	</div>
</div>
<div class="xoa"></div>
<div id="menu">
	
	<ul>
			<li><a href="<?php echo base_url('trangchu/trangchu1');?>">TRANG CHỦ</a></li>
			<li><a href="<?php echo base_url('loaisp/layout_lietke');?>">SẢN PHẨM</a></li>
			<li><a href="<?php echo base_url('baiviet/layout_lkbaiviet');?>">DỊCH VỤ ĐIỆN LẠNH</a></li>
			<li><a href="<?php echo base_url('trangchu/tuvan');?>">TƯ VẤN KỸ THUẬT</a></li>
			<li><a href="<?php echo base_url('trangchu/lienhe');?>">LIÊN HỆ</a></li>
	</ul>
		<form action="" method="" name="form_timkiem" id="form_timkiem">
		<input type="textbox" name="timkiem" placeholder="tìm kiếm sản phẩm" id="tim">
		<input type="submit" name="btntimkiem" id="btntim" value="" />
		</form>
		<script>
		$('#form_timkiem').submit(function(){
			var html='gfdgsdfg';
			$.ajax({
					url : "http://localhost:7070/webdienlanhmvc/loaisp/timsanpham",// function nào thì sửa đường link theo function ấy
					type : "post",
					dataType:"text",
					data : {
						 tim : $('#tim').val(),
					},
					
					
					success : function (result){
						$('#noidungtrangchu').html(result);
						
					}
			});
			return false;
		});
	</script>
</div>
</div>
<div class="xoa"></div>
<!--  thẻ div dưới là nơi hiển thị kết quả ... muốn nó hiển thị ra đâu thì để ở đó ... tạo bảng hay j j đó ... ví dụ lun-->

