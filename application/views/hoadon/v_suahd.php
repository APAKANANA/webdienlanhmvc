
<form action="" method="post">
<div id="suahd">
	<div id="tieude">Sửa hóa đơn</div>
	<div id="ten"><p> Mã khách hàng</p><input type="text" name="txtmakhachhang" value="<?php echo isset($hoadoncansua->makhachhang)?$hoadoncansua->makhachhang:'';?>"/></div>
	<div id="mota"><p>Mã nhân viên</p><input type="text" name="txtmanhanvien" value="<?php echo isset($hoadoncansua->manhanvien)?$hoadoncansua->manhanvien:'';?>"/></div>
	<div id="Noidung"><p>trị giá</p><input type="text" name="txttrigia" value="<?php echo isset($hoadoncansua->trigia)?$hoadoncansua->trigia:'';?>"/></div>
	<div id="ngaycapnhat"><p>Ngày hóa đơn</p><input type="datetime" name="datetime" value="<?php echo isset($hoadoncansua->ngayhoadon)?$hoadoncansua->ngayhoadon:'';?>"/></div>
	<a href="<?php echo base_url('hoadon/suahd/'.$hoadoncansua->sohoadon) ?>"><input class="bt" id="btOKbv" type="submit" name="OKsua" value="Đồng ý"/></a>
	<input class="bt" type="reset" name="Reset" value="Hủy bỏ"/>
</div>
</form>