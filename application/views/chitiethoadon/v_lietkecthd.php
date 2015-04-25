<div id="lietkehd">
<h3>chi tiết hóa đơn</h3>
		<div id="nhanvien">Nhân viên:
		<?php 
			foreach($tennhanvien as $dong1){
		?>
			
			<td class="cot"><?php echo $dong1->hoten; ?></td>
		
			
		<?php 
		}
		?>
		</div>
		<div id="khachhang">
		Khách hàng:	
		<?php 
			foreach($tenkhachhang as $dong1){
		?>
			
			<?php echo $dong1->hoten; ?>
		
			
		<?php 
		}
		?>	
		
	</div>
	<div id="so">
		Số hóa đơn: <?php echo isset($sohoadon)? $sohoadon : NULL?>

	</div>
<table>
	<tr>
		<th class="cot">Mã sản phẩm</th>
		<th class="cot">Tên sản phẩm</th>
		<th class="cot">Số lượng</th>
		<th class="cot">Đơn giá</th>
		
		
		
	</tr>
	<?php 
		foreach($chitiethoadon as $dong){
	?>
	<tr>
		<td class="cot"><?php echo $dong->masanpham; ?></td>
		<td class="cot"><?php foreach($tensanpham as $ten){ 
		if($dong->masanpham==$ten->masanpham){
		echo $ten->tensanpham;}}?>
		</td>
		
		<td class="cot"><?php echo $dong->soluong; ?></td>
		<td class="cot"><?php foreach($tensanpham as $ten){ 
		if($dong->masanpham==$ten->masanpham){
		echo $ten->gia.'/1cái';}}?>
		</td>
	<?php 
	}
	?>	

	</tr>	
</table>
</div>
