<?php echo form_open_multipart('sanpham/suasanpham') ?>
	
	<script src="<?php echo base_url()?>public/filejs/js_admin.js"></script>
	
	<div class="themsuasp">
		<h3>Sửa sản phẩm</h3>
		<br/>
			<p>Sản phẩm:<span>*</span><input class="texboxsp" type="text" name="tensanpham" value="<?php echo isset($hiendulieudesua->tensanpham)?$hiendulieudesua->tensanpham:'';?>"/></p>
			<?php echo form_error('tensanpham','<div class="loiit">','</div>'); ?>
			<p>Mô tả:&nbsp;<!-- <input class="texboxsp" type="text" name="mota" value="<?php #echo isset($hiendulieudesua->mota)?$hiendulieudesua->mota:'';?>"/></p> --><textarea class="tinyMCE" rows="15" cols="50" name="mota"><?php echo isset($hiendulieudesua->mota)?$hiendulieudesua->mota:'';?></textarea></p>
            <p>Công suất:&nbsp;<input class="texboxsp" type="text" name="congsuat" value="<?php echo isset($hiendulieudesua->congsuat)?$hiendulieudesua->congsuat:'';?>"/></p>
            <p>Kích thướcc:&nbsp;<input class="texboxsp" type="text" name="kichthuoc" value="<?php echo isset($hiendulieudesua->kichthuoc)?$hiendulieudesua->kichthuoc:'';?>"/></p>
            	
			<p>Điện năng:&nbsp;<input class="texboxsp" type="text" name="diennangtieuthu" value="<?php echo isset($hiendulieudesua->diennangtieuthu)?$hiendulieudesua->diennangtieuthu:'';?>"/></p>
            <p>Giá bán:&nbsp;<input class="texboxsp" type="number" name="gia" value="<?php echo isset($hiendulieudesua->gia)?$hiendulieudesua->gia:'';?>"></p>
            <p>Bảo hành:&nbsp;<input class="texboxsp" type="number" name="sothangbaohanh" value="<?php echo isset($hiendulieudesua->sothangbaohanh)?$hiendulieudesua->sothangbaohanh:'';?>"/></p>
            <p>Nước sx:&nbsp;<input class="texboxsp" type="text" name="nuocsx" value="<?php echo isset($hiendulieudesua->nuocsx)?$hiendulieudesua->nuocsx:'';?>"/></p>
           
			<p>Hãng sx:&nbsp;<input class="texboxsp" type="text" name="hang" value="<?php echo isset($hiendulieudesua->hang)?$hiendulieudesua->hang:'';?>"/></p>
            <p>Hình ảnh:&nbsp;<input class="texboxsp_hinh" type="file" name="hinhanh" onchange="hinhduocchon(this)"></p>
            <div class="loiit"><?php echo isset($loihinh)?$loihinh:'';?></div>
            <p class="hinhsp">
            	<img id="hinhchon" style="height: 100px; width: 200px;" src="<?php echo base_url().'public/hinh/hinhsanpham/'.$hiendulieudesua->hinhanh; ?>" >
            </p>
            
            <p>Loại sp:&nbsp;<select class="texboxsp" name="maloai">
			<?php
				foreach($layloaisp as $dong){
					if($hiendulieudesua->maloai==$dong->maloai){
			?>
				                <option value="<?php echo $dong->maloai?>" selected="selected"><?php echo $dong->tenloai?></option>
			<?php 
					}else{
			?>				
								<option value="<?php echo $dong->maloai?>"><?php echo $dong->tenloai?></option>	
			<?php 	}
				}?>
							</select></p>
			<br>
			<input type="hidden" name="masanpham" value="<?php echo isset($hiendulieudesua->masanpham)?$hiendulieudesua->masanpham:'';?>"/>
			<input class="bt" id="btOKsanpham" type="submit" name="OKsua" value="Đồng ý"/>
			<a href="<?php echo base_url('sanpham/lietke');?>"><input class="bt" type="button" name="Reset" value="Hủy bỏ"/></a>
		
	</div>
<?php echo form_close(); ?>