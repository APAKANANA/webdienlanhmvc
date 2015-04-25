<div id="lietke">
        <h4>Danh sách loại sản phẩm</h4>
	<script src="<?php echo base_url()?>public/filejs/js_admin.js"></script>
<?php if(isset($loixoaloaisp)){
	echo '<div class="loikhixoa">'.$loixoaloaisp.'</div>';
}?>	
<?php if($dsloaisp){?>	
	<table class="table table-bordered table-striped table-condensed table-hover">
		<tr>
			<th class="cot">Mã loại</th>
			<th class="cot">Tên loại</th>
			<th class="cot" colspan="2">Quản lý</th>
		</tr>
	<?php
	 
		foreach($dsloaisp as $dong){
	?>
		<tr>
			<td class="cot"><?php echo $dong->maloai?></td>
			<td class="cot"><?php echo $dong->tenloai?></td>
			<td class="cot">
				<a href="<?php echo base_url('loaisp/hiendulieulenformsua/'.$dong->maloai) ?>"><img src="<?php echo base_url('public/icon/sua.png')?>" title="Sửa"/></a>
			</td>
			<td class="cot">
				<?=anchor("loaisp/xoaloaisp/".$dong->maloai,"<img src='".base_url()."public/icon/xoa.png' title='Xóa'/>",array('onclick' => "return confirm('Bạn có chắc muốn xóa dòng này?')"))?>
			</td>
		</tr>
	<?php }?>
			
	</table>	
<?php }else{
		echo '<p class="k_csdl">Chưa có loại sản phẩm nào.</p>';
	}
	?>
</div>