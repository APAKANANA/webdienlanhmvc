
<div id="lietkesp">
	<h3>Danh sách sản phẩm</h3>
<?php if(isset($loixoasp)){
	echo '<div class="loikhixoa">'.$loixoasp.'</div>';
}
if($dssanpham){?>
	<table>
		<tr>
			<th class="cot">Mã sp</th>
			<th class="cot">Tên sp</th>
			<th class="cot">Mô tả</th>
			<th class="cot">Công suất</th>
			<th class="cot">Kích thước</th>
			<th class="cot">Điện năng</th>
			<th class="cot">Giá</th>
			<th class="cot">Bảo hành</th>
			<th class="cot">Lượt xem</th>
			<th class="cot">Nước sx</th>
			<th class="cot">Hãng</th>
			<th class="cot">Loại</th>
			<th class="cot">Hình ảnh</th>
			<th class="cot" colspan="2">Quản lý</th>
		</tr>
	<?php 
		foreach($dssanpham as $dong){
	?>
		<tr>
			<td class="cot"><?php echo $dong->masanpham?></td>
			<td class="cot"><?php echo $dong->tensanpham?></td>
			<!--<td class="cot"><textarea cols="15" rows="4" readonly="readonly" style="resize:none; border-style: none;  font-family:Times new Roman; font-size:17px;"><?php #echo $dong->mota?></textarea></td>-->
			<td ><div style="overflow:hidden; font-family:Times new Roman;width:130px;height:55px; word-wrap: break-word; font-size:15px;"><?php echo $dong->mota?></div></td>
			<td class="cot"><?php echo $dong->congsuat?></td>
			<td class="cot"><?php echo $dong->kichthuoc?></td>
			<td class="cot"><?php echo $dong->diennangtieuthu?></td>
			<td class="cot"><?php echo $dong->gia?></td>
			<td class="cot"><?php echo $dong->sothangbaohanh?></td>
			<td class="cot"><?php echo $dong->luotxem?></td>
			<td class="cot"><?php echo $dong->nuocsx?></td>
			<td class="cot"><?php echo $dong->hang?></td>
						 
			 <?php foreach ($layloaisp as $loai){
						if($dong->maloai==$loai->maloai){
			?>
					<td class="cot"><?php echo $loai->tenloai?></td>
			<?php }}?>
            <td class="cot"><img src="<?php echo base_url().'public/hinh/hinhsanpham/'.$dong->hinhanh;?>"/></td>
			<td class="cot">
				<a href="<?php echo base_url('sanpham/hiendulieulenformsua/'.$dong->masanpham) ?>"><img src="<?php echo base_url('public/icon/sua.png')?>" title="Sửa"/></a>
			</td>
			<td class="cot">
				<!-- <a href="<?php #echo base_url('sanpham/xoasanpham/'.$dong->masanpham) ?>"><img src="<?php #echo base_url('public/icon/xoa.png');?>" title="Xóa"/></a> -->
				<?=anchor("sanpham/xoasanpham/".$dong->masanpham,"<img src='".base_url()."public/icon/xoa.png' title='Xóa'/>",array('onclick' => "return confirm('Bạn có chắc muốn xóa dòng này?')"))?>
			</td>
		</tr>
	<?php 
		}
	?>		
	</table>	
<?php }else{
	echo '<p class="k_csdl">Chưa có sản phẩm nào.</p>';
}
?>
</div>
<div id="phantrang">
<?php
if($this->pagination->create_links()){
	echo $this->pagination->create_links();
}
?>
</div>