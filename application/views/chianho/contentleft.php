
<div id="content-left">
	<h3>Danh mục QL</h3>
		<li><?php echo anchor('loaisp/layout_lietke','Sản phẩm','class="tpmenu"');?>
			<ul>
				
				<?php
					foreach($ds_loaisp as $loai){?>
						<li><?php echo anchor('sanpham/layout_lietke/'.$loai->maloai,$loai->tenloai,'class="tpmenu"');?></li>
					<?php }
				?>
				
			</ul>
		</li>
		<li><?php echo anchor('baiviet/layout_lkbaiviet','Dịch vụ điện lạnh','class="tpmenu"');?>
			<ul>
				<?php
					foreach($ds_loaisp as $loai){?>
						<li><?php echo anchor('baiviet/layout_lkbv/'.$loai->maloai,$loai->tenloai,'class="tpmenu"');?></li>
					<?php }
				?>
			</ul>
		</li>
		<li><?php echo anchor('trangchu/tuvan','Tư vấn kỹ thuật','class="tpmenu"');?></li>
			
		<li><?php echo anchor('sanpham/sanphammoi','Sản phẩm mới','class="tpmenu"');?></li>
		
		
		<li class="tpmenu">Khu vực giao hàng</li>	
			<select class="khuvuc" name="khuvucquanly">
			<?php foreach($ds_khuvuc as $khuvuc){
				
				echo '<option>'.$khuvuc->tenkhuvuc.'</option>';			 
			}?>
			</select>
	</ul>
</div>