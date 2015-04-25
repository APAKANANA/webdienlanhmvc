<div id="lietke">
<?php if($dskhuvuc){?>
	<table>
		<tr>
			<th class="cot">Mã khu vực</th>
			<th class="cot">Tên khu vực</th>
			<th class="cot" colspan="2">Quản lý</th>
		</tr>
	<?php 
		foreach($dskhuvuc as $dong){
	?>
		<tr>
			<td class="cot"><?php echo $dong->makhuvuc?></td>
			<td class="cot"><?php echo $dong->tenkhuvuc?></td>
			<td class="cot">
				<a href="<?php echo base_url('khuvuc/hiendulieulenformsua/'.$dong->makhuvuc) ?>"><img src="<?php echo base_url('public/icon/sua.png')?>" title="Sửa"/></a>
			</td>
			<td class="cot">
				<?=anchor("khuvuc/xoakhuvuc/".$dong->makhuvuc,"<img src='".base_url()."public/icon/xoa.png' title='Xóa'/>",array('onclick' => "return confirm('Bạn có chắc muốn xóa dòng này?')"))?>
				<!--  <a href="<?php #echo base_url('khuvuc/xoakhuvuc/'.$dong->makhuvuc) ?>"><img src="<?php #echo base_url('public/icon/xoa.png');?>" title="Xóa"/></a>-->
			</td>
		</tr>
	<?php 
		}
	?>		
	</table>	
<?php }else{
	echo '<p class="k_csdl">Chưa có khu vực nào.</p>';
}?>
</div>