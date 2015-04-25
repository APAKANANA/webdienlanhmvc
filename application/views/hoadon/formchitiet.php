<form action="" method="post">
<div id="chitiethd">
	<div id="tieude">Chi tiết hóa đơn</div>
	<div id="ten"><p> Số hóa đơn</p><input type="text" name="txtten" value="<?php echo isset($chitiethoadon->sohoadon)?$chitiethoadon->sohoadon:'';?>"/></div>
	<div id="mota"><p>Mã sản phẩm</p><input type="text" name="txtten" value="<?php echo isset($chitiethoadon->masanpham)?$chitiethoadon->masanpham:'';?>"/></div>
	<div id="Noidung"><p>Số lượng</p><input type="text" name="txtten" value="<?php echo isset($chitiethoadon->soluong)?$chitiethoadon->soluong:'';?>"/></div>
</div>
</form>