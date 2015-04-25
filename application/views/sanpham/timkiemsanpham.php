
<?php 
//if($this->pagination->create_links()){
	//echo $this->pagination->create_links();
//}
echo '<div id="tieudesp"><h3>Sản phẩm</h3></div>';
if(isset($dssanpham_layout)){
	foreach ($dssanpham_layout as $dong){
		echo '<div id="right">';
			echo '<div id="nd1a" class="traisp">
							<div class="chuaanh">';
								?><a href="<?php echo base_url('sanpham/chitietsanpham/'.$dong->masanpham) ?>"><img class="center" src="<?php echo base_url('public/hinh/hinhsanpham/'.$dong->hinhanh);?>"/></a>
		        				<?php 
		        			echo '</div>';
							echo '<p>';
		        			echo $dong->tensanpham;
		        			echo '</br>';
		        			echo 'Giá: '.$dong->gia.'000 VND';
							echo '</br>';
		        			echo 'Hãng sx: '.$dong->hang;							
							echo '</p>';
			echo '</div>';        			
		        		
		echo '</div>';
	}
}
?>
<div style="clear: both;">
<?php
if($this->pagination->create_links()){
	echo $this->pagination->create_links();
}?>
</div>