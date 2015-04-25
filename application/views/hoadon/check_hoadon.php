<script type="text/javascript">
	$(document).ready(function(){
		var giatri="";
		$('button').click(function(){
			 $('input[name="checked"]').each(function() { 
				if(this.checked==true) giatri += ","+$(this).val(); 
			}); 
			 $('input[name="sohoadon"]').val(giatri);
		});
	});
</script>
<?php echo form_open('hoadon/suahd'); ?>
<div id="lietkehd">
<h3>Danh sách hóa đơn chưa check</h3>
<table>
	<tr>
		<th class="cot">Số hóa đơn</th>
		<th class="cot">Mã khách hàng</th>
		<th class="cot">Ngày hóa đơn</th>
		<th class="cot">Trạng thái</th>
	</tr>
	<?php foreach($dshoadon as $dong)
	{
	if($dong->trangthai==0)
	{
	?>
	<tr>
		<td  class="cot"><?php echo $dong->sohoadon;?></td>
		<td class="cot"><?php echo $dong->makhachhang;?></td>
		<td class="cot"><?php echo $dong->ngayhoadon;?></td>
		<td class="cot"><input type="checkbox" name="checked" value="<?php echo $dong->sohoadon;?>"  /></td>	
		<input type="hidden" name="sohoadon"  />
	</tr>
	<?php
	}
	}
	?>
</table>
	<p><button id="btndongy" name="btnluu">Hoàn tất</button></p>
</div>
</form>
