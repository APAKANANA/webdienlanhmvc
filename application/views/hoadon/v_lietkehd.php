
<div id="lietkehd">
<h3>Danh sách Các hóa đơn</h3>
<table>
	<tr>
		<th class="cot">Số hóa đơn</th>
		<th class="cot">Mã khách hàng</th>
		<th class="cot">Mã nhân viên</th>
		<th class="cot">Tổng tiền</th>
		<th class="cot">Ngày hóa đơn</th>
		<th class="cot">Trạng thái</th>
		<th class="cot" colspan="2">Xem chi tiết</th>
	</tr>
	<?php 
		foreach($dshoadon as $dong){
	?>
	<tr>
		<td class="cot"><?php echo $dong->sohoadon; ?></td>
		<td class="cot"><?php echo $dong->makhachhang; ?></td>
		<td class="cot"><?php echo $dong->manhanvien; ?></td>
		<td class="cot"><?php echo $dong->trigia; ?></td>
		<td class="cot"><?php echo $dong->ngayhoadon; ?></td>
		<td class="cot"><?php echo $dong->trangthai; ?></td>
			<td class="cot">
				<a href="<?php echo base_url('hoadon/xemchitiet/'.$dong->sohoadon) ?>"><img src="<?php echo base_url('public/icon/chitiet.ico');?>" title="xem chitiết"/></a>
			</td>
	</tr>
	<?php 
	}
	?>
</table>
</div>

