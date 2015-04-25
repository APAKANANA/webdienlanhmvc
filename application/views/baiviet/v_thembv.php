<?php echo form_open_multipart('baiviet/thembv') ?>
<script src="<?php echo base_url()?>public/filejs/js_admin.js"></script>

<script type="text/javascript" src="<?php echo base_url()?>public/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/ckfinder/ckfinder.js"></script>
<script type="text/javascript">

function reset()
{
	document.getElementId("ten","mota","noidung","ngaycapnhat").values="";
	alert("huy thanh cong");
}
</script>


<div id="thembv">
	<div id="tieude">Thêm bài viết mới</div>
	<div id="loaisanpham"><p>Chọn loại sản phẩm</p><select class="loaisanpham" name="dsloaisp">
			<?php foreach($ds_loaisp as $loaisanpham){
			?>
				<option value="<?php echo $loaisanpham->maloai ?>"><?php echo $loaisanpham->tenloai ?></option>		 
			<?php } ?>
			</select></div>
	<div id="ten"><p> Tiêu đề</p><input type="text" name="txtten" placeholder="Nhập tiêu đề bài viết"  value="<?php echo set_value('txtten'); ?>"/></div>
		<?php echo form_error('txtten','<div class="loibv">','</div>'); ?>
	<div id="mota"><p>Mô tả</p><input type="text"  name="ttmota" placeholder="Mô tả bài viết" value="<?php echo set_value('ttmota'); ?>" /></div>
		<?php echo form_error('ttmota','<div class="loibv">','</div>'); ?>
	<div id="anhdaidien"><p>Ảnh đại diện</p><input type="file" name="hinhanh" onchange="hinhduocchon(this)" />
		<img id="hinhchon" height="100px" width="200px" /></div>
		<?php echo form_error('hinhanh','<div class="loibv">','</div>'); ?>
	<div id="Noidung"><p>Nội dung</p><textarea  id="editor1" name="editor1"  ></textarea></div>
		<?php echo form_error('editor1','<div class="loibv">','</div>'); ?>
	<div id="ngaycapnhat"><p>Ngày cập nhật</p><input type="date" name="date" /></div>
	<input id="btOKbv" type="submit" name="OKthem" value="Đồng ý"/>
	<input id="btreset" type="button" name="Reset" value="Hủy bỏ" onclick="reset()" />
</div>
	
<?php echo form_close(); ?>

