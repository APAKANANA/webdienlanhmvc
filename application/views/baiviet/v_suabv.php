<?php echo form_open_multipart('baiviet/suabv') ?>
<script type="text/javascript" src="<?php echo base_url()?>public/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>public/ckfinder/ckfinder.js"></script>
<script src="<?php echo base_url()?>public/filejs/js_admin.js"></script>
<div id="thembv">
	<div id="tieude">Sửa bài viết</div>
	<div id="ten"><p> Mã bài viết</p><input type="text" name="txtma" value="<?php echo isset($baivietcansua->mabaiviet)?$baivietcansua->mabaiviet:'';?>"/></div>
	<div id="loaisanpham"><p>Chọn loại sản phẩm</p><select class="loaisanpham" name="dsloaisp">
			<?php foreach($ds_loaisp as $loaisanpham){
			?>
				<?php if($tensp['maloai']!=$loaisanpham->maloai){?>
				<option value="<?php echo $loaisanpham->maloai ?>"><?php  echo $loaisanpham->tenloai ?></option> <?php }?>	 
			<?php } 
			?>
			<option value="<?php echo $baivietcansua->maloai?>" selected="selected">
			<?php echo $tensp['tenloai']; ?></option>
			</select></div>
			
	<div id="ten"><p> Tiêu đề</p><input type="text" name="txtten" value="<?php echo isset($baivietcansua->tenbaiviet)?$baivietcansua->tenbaiviet:'';?>"/></div>
	<div id="mota"><p>Mô tả</p><input type="text" name="ttmota"  value="<?php echo isset($baivietcansua->mota)?$baivietcansua->mota:'';?>"/></div>
	<div id="anhdaidien"><p>Ảnh đại diện</p><input type="file" name="hinhanh" onchange="hinhduocchon(this)" />
		<img id="hinhchon" height="100px" width="200px" src="<?php echo base_url().'public/hinh/hinhbaiviet/'.$baivietcansua->hinhanh;?>" /></div>
	<div id="Noidung"><p>Nội dung</p><textarea id="editor1" name="editor1" ><?php echo isset($baivietcansua->noidung)?$baivietcansua->noidung:'';?></textarea></div>
	<div id="ngaycapnhat"><p>Ngày cập nhật</p><input type="date" name="date" value="<?php echo isset($baivietcansua->ngaycapnhat)?$baivietcansua->ngaycapnhat:'';?>"/></div>
	<input class="bt" id="btOKbv" type="submit" name="OKsua" value="Đồng ý"/>
		<input class="bt" type="reset" name="Reset" value="Hủy bỏ"/>
</div>
<?php echo form_close(); ?>
