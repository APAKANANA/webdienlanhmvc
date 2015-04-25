<?php echo form_open_multipart('sanpham/themsanpham') ?>
<!-- <form action="" method="post" enctype="multipart/form-data">-->

			<script src="<?php echo base_url()?>public/filejs/js_admin.js"></script>
			
	<div class="themsuasp">
		<h3>Thêm mới sản phẩm</h3>
		<br/>
			<p>Sản phẩm:<span>*</span><input class="texboxsp" type="text" name="tensanpham" value="<?php echo set_value('tensanpham'); ?>"></p>
			<?php echo form_error('tensanpham','<div class="loiit">','</div>'); ?>
			<p>Mô tả:&nbsp;<textarea class="editor1" rows="3" cols="98" name="mota"></textarea></p>
			<p>Công suất:&nbsp;<input class="texboxsp" type="text" name="congsuat"/></p>
            <p>Kích thước:&nbsp;<input class="texboxsp" type="text" name="kichthuoc"/></p>
				
			<p>Điện năng:&nbsp;<input class="texboxsp" type="text" name="diennangtieuthu"/></p>
			<p>Giá bán:&nbsp;<input class="texboxsp" type="number" name="gia"/></p>
			<p>Bảo hành:&nbsp;<input class="texboxsp" type="number" name="sothangbaohanh"/></p>
            <p>Nước sx:&nbsp;<input class="texboxsp" type="text" name="nuocsx"/></p>
		
			<p>Hãng sx:&nbsp;<input class="texboxsp" type="text" name="hang"/></p>
			<p>Hình ảnh:<span>*</span><input class="texboxsp_hinh" type="file" name="hinhanh" onchange="hinhduocchon(this)"/></p>
			<div class="loiit"><?php echo isset($loihinh)?$loihinh:'';?></div><?php echo form_error('hinhanh','<div class="loiit">','</div>'); ?>
			<p class="hinhsp"><img id="hinhchon" height="100px" width="200px" /></p>
			<p>Loại sp:&nbsp;<select class="texboxsp" name="maloai">
			<?php
				foreach($layloaisp as $dong){
			?>
				                <option value="<?php echo $dong->maloai?>"><?php echo $dong->tenloai?></option>
			<?php 
				}
			?>					
							</select></p>
							<br/>
			<input class="bt" id="btOKsanpham" type="submit" name="OKthem" value="Đồng ý"/>
			<input class="bt" type="reset" name="Reset" value="Hủy bỏ"/>
		
	</div>
<?php echo form_close(); ?>