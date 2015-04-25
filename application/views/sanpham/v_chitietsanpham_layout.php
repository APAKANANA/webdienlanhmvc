
<?php echo form_open('hoadon/themvaogiohang'); ?>
<div id="right">
	<div class="chuaanhct">
		<img class="chitiet" src="<?php echo base_url('public/hinh/hinhsanpham/'.$chitietsp->hinhanh);?>"/>
	</div>
			
	<div class="thongtin">
		<h3><?php echo $chitietsp->tensanpham; ?></h3>
		</br>
		<input type="hidden" name="masanpham" value="<?php echo $chitietsp->masanpham;?>"/>
		<input type="hidden" name="tensanpham" value="<?php echo $chitietsp->tensanpham;?>"/>
	<?php
		echo $chitietsp->mota;
		echo 'Nước sản xuất: '.$chitietsp->nuocsx.'. Hãng: '.$chitietsp->hang;
		echo '</br>';
		echo 'Công suất: '.$chitietsp->congsuat.'. Kích thước: '.$chitietsp->kichthuoc;
		echo '</br>';
		echo 'Điện năng tiêu thụ: '.$chitietsp->diennangtieuthu.'. Bảo hành: '.$chitietsp->sothangbaohanh.' tháng.';
		echo '</br>';
		echo 'Lượt xem: '.$chitietsp->luotxem;
		echo '</br>';
		echo 'Giá: '.$chitietsp->gia.'000 VND';
	?> 
		
		</br>
		<input class="bt" id="btOKthemgh" type="submit" name="OKsua" value="Thêm vào giỏ hàng"/>
				
	</div>
</div>
<?php echo form_close(); ?>
	