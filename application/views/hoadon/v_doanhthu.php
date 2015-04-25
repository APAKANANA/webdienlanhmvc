<div id="v_doanhthu">
<?php	
	if(isset($doanhthu)){?>
		Doanh thu
		<?php echo $doanhthu->trigia.'000 VND';
	}
	if(isset($dt_thungan)){?>
		Trị giá hóa đơn
	<?php
		echo $dt_thungan->trigia.'000 VND';
	}
	if(isset($sanphambanchay)){?>
		Sản phẩm bán chạy nhất
		<br/>
		<br/>
		<table>
		<tr>
			<th class="cot">Sản phẩm</th>
			<th class="cot">Số lượng</th>
		</tr>
		<?php foreach($sanphambanchay as $spbc){?>
			<tr>
			<td class="cot"><?php echo $spbc->tensanpham;?></td>
			<td class="cot"><?php echo $spbc->soluong;?></td>
		<?php }?>
		</table>
		
<?php	}
	if(isset($khachangvip)){?>
		Khách hàng có trị giá hóa đơn lớn
		</br>
		</br>
		<table>
		<tr>
			<th class="cot">Khách hàng</th>
			<th class="cot">Doanh thu</th>
		</tr>
		<?php foreach($khachangvip as $khv){?>
			<tr>
			<td class="cot"><?php echo $khv->hoten;?></td>
			<td class="cot"><?php echo $khv->trigia.'000';?></td>
		<?php }?>
		</table>
		
<?php	}
	
?>
</div>