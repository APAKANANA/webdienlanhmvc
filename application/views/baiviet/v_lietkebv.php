<script src="<?php echo base_url()?>public/filejs/js_admin.js"></script>
<div id="lietkebv">
<h3>Danh sách Các bài viết</h3>
<table>
	<tr>
		<th class="cot">Mã bv</th>
		<th class="cot">Loại sp</th>
		<th class="cot">Tên bv</th>
		<th class="cot">Mô tả</th>
		<th class="cot">Ảnh đại diện</th>
		<th class="cot">Nội dung</th>
		<th class="cot">Ngày đăng</th>
		<th class="cot" colspan="2">Quản lý</th>
	</tr>
	<?php 
		foreach($dsbaiviet as $dong){
	?>
	<tr>
		<td class="cot"><?php echo $dong->mabaiviet; ?></td>
		<?php 
			foreach ($ds_loaisp as $loaisp){
			if($loaisp->maloai==$dong->maloai){?>
		<td class="cot"><?php echo $loaisp->tenloai; ?></td><?php } } ?>
		<td class="cot"><textarea rows="5" cols="22" readonly="readonly" style="resize:none; border-style: none;overflow:hidden; font-family:Times new Roman; font-size:17px;"><?php echo $dong->tenbaiviet; ?></textarea></td>
		<td class="cot"><textarea rows="5" cols="22" readonly="readonly" style="resize:none; border-style: none;overflow:hidden; font-family:Times new Roman; font-size:17px;"><?php echo $dong->mota; ?></textarea></td>
		<td class="anh"><img src="<?php echo base_url('public/hinh/hinhbaiviet/'.$dong->hinhanh)?>"/></td>
		<td class="cot"><textarea rows="5" cols="50" readonly="readonly" style="resize:none;overflow:hidden; border-style: none; font-family:Times new Roman; font-size:17px;"><?php echo $dong->noidung; ?></textarea></td>
		<td class="cot"><?php echo $dong->ngaycapnhat; ?></td>
		<td class="suabaiviet">
				<a href="<?php echo base_url('baiviet/hienthibaivietcansua/'.$dong->mabaiviet) ?>"><img src="<?php echo base_url('public/icon/sua.png')?>" title="Sửa"/></a>
			</td>
			<td class="xoabaiviet">
				<a href="<?php echo base_url('baiviet/xoabv/'.$dong->mabaiviet) ?>"><img src="<?php echo base_url('public/icon/xoa.png');?>" title="Xóa"/></a>
			</td>
	</tr>
	<?php 
	}
	?>
</table>
<div id="phantrang">
	<?php 
	echo $this->pagination->create_links();
	?>
	</div>
</div>

