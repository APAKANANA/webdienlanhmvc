
<div id="lietkesp">
<h3>Danh sách người dùng</h3>
<?php if(isset($loikhixoa)){
	echo '<div class="loikhixoa">'.$loikhixoa.'</div>';
}
if($dsnguoidung){?>
	<table>
		<tr>
			<th class="cot">Tên đăng nhập</th>
			<th class="cot">Mật khẩu</th>
			<th class="cot">Họ tên</th>
			<th class="cot">CMND</th>
			<th class="cot">Giới tính</th>
			<th class="cot">Ngày sinh</th>
			<th class="cot">Email</th>
			<th class="cot">Địa chỉ</th>
			<th class="cot">Điện thoại</th>
			<th class="cot">Quyền</th>
			<th class="cot" colspan="2">Quản lý</th>
		</tr>
		
	<?php 
		foreach($dsnguoidung as $dong){
	?>
		<tr>
			<td class="cot"><?php echo $dong->tendangnhap?></td>
			<td class="cot"><?php echo $dong->pass?></td>
			<td class="cot"><?php echo $dong->hoten?></td>
			<td class="cot"><?php echo $dong->cmnd?></td>
			<td class="cot"><?php echo $dong->gioitinh?></td>
			<td class="cot"><?php echo $dong->ngaysinh?></td>
			<td class="cot"><?php echo $dong->email?></td>
			<td class="cot"><?php echo $dong->diachi?></td>
			<td class="cot"><?php echo $dong->dienthoai?></td>
			<?php foreach ($layphanquyen as $quyen){
						if($dong->maquyen==$quyen->maquyen){
			?>
					<td class="cot"><?php echo $quyen->tenquyen?></td>
			<?php }}?>
			<td class="cot">
				<a href="<?php echo base_url('nguoidung/hiendulieulenformsua/'.$dong->manguoidung) ?>"><img src="<?php echo base_url('public/icon/sua.png')?>" title="Sửa"/></a>
			</td>
			<td class="cot">
				<?=anchor("nguoidung/xoanguoidung/".$dong->manguoidung,"<img src='".base_url()."public/icon/xoa.png' title='Xóa'/>",array('onclick' => "return confirm('Bạn có chắc muốn xóa dòng này?')"))?>
				<!-- <a href="<?php #echo base_url('nguoidung/xoanguoidung/'.$dong->manguoidung) ?>"><img src="<?php #echo base_url('public/icon/xoa.png');?>" title="Xóa"/></a> -->
			</td>
		</tr>
	<?php 
		}
	?>		
	</table>	
<?php }else{
	echo '<p class="k_csdl">Chưa có người dùng nào.</p>';
}
?>
<div id="phantrang">
<?php
if($this->pagination->create_links()){
	echo $this->pagination->create_links();
}	
?>
</div>
</div>