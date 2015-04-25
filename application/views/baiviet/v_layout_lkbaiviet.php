<div id="lietkebv_layout">
	<h3>bài viết</h3>
			
		<div id="baivietmoi">
			<div id="hinhanhminhhoa">
				<p><img src="<?php echo base_url('public/hinh/hinhbaiviet/'.$baivietmoi->hinhanh)?>"/></p>
			</div>
			<div id="motangan">
				
				<a href="<?php echo base_url('baiviet/chitietbaivietmoi/'.$baivietmoi->mabaiviet)?>"><?php echo $baivietmoi->tenbaiviet; ?></a>
				<p><?php echo $baivietmoi->mota; ?></p>
			</div>
		</div>
		
		<div id="dsbv">
		<?php 
					foreach($lkbv as $dong){
			?>
			<div class="thanhphan">
			
				<div class="tphinhanh">
					<p><img src="<?php echo base_url('public/hinh/hinhbaiviet/'.$dong->hinhanh)?>"/></p>
				</div>
				<div class="tpmota">
				<a href="<?php echo base_url('baiviet/chitietbaiviet/'.$dong->mabaiviet)?>"><?php echo $dong->tenbaiviet; ?></a>
				<div id="para"><?php echo $dong->mota; ?></div>
				</div>
			
			</div>
		<?php
				}
				?>
				</div>
	</div>
					<div id="phantrang">
					<?php 
					echo $this->pagination->create_links();
					?>
					</div>