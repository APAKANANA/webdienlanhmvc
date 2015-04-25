<script src="<?php echo base_url('public/js/jquery-1.8.0.min.js') ?>"></script>
<script src="<?php echo base_url('public/js/js/jssor.js') ?>"></script>
<script src="<?php echo base_url('public/js/js/jssor.slider.mini.js') ?>"></script>
<?php
	$count= count($dsloaisp_layout);
	global $k;
	$k =-1;
?>

<script>
    jQuery(document).ready(function ($) {
        var options = { $AutoPlay: true };
		<?php
		for($i=0;$i<$count;$i++){		
		?>
			var jssor_slider<?php echo $i;?> = new $JssorSlider$('slider<?php echo $i; ?>_container', options);
		<?php } ?>
    });
</script>
<div id="right">

<?php 
echo '<div id="tieudesp"><h3>Loại sản phẩm</h3></div>';
if($dsloaisp_layout){
    foreach ($dsloaisp_layout as $dong){
		$k++;
?>
	<div id="nd1a" class="trai">
		<div class="chuaanhloai">
			<a href="<?php echo base_url('sanpham/layout_lietke/'.$dong->maloai) ?>">
				<!--<img class="center" src="<?php #echo base_url('public/hinh/hinhsanpham/1415859022-bnl6.jpg');?>"/>-->
				<div id="slider<?php echo $k;?>_container" style="position: relative; top: 0px; left: 0px; width: 250px; height: 150px;">
					<div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 150px; height: 150px;">
                    <?php
                    	if($dssanpham_layhinh){
	                    	foreach($dssanpham_layhinh as $hinhsp){
								if($hinhsp->maloai==$dong->maloai){?>
									<div><img u="image"  src="<?php echo base_url('public/hinh/hinhsanpham/'.$hinhsp->hinhanh);?>"/></div>
	                     <?php
								}
							}
						}else{echo '<p class="k_csdl"></br></br>Chưa có sản phẩm.</p>';}
                    ?>
					</div>
				</div>
                                                                        
			</a>
                                                        
		</div>
                                                        
		<p><?php echo $dong->tenloai;?></p>
	</div> 
          
<?php
	}
}else{
	echo '<p class="k_csdl">Chưa có loại sản phẩm nào.</p>';
}
?>
</div>

<div style="clear: both;">
</div>
<div id="phantrang">
<?php
if($this->pagination->create_links()){
	echo $this->pagination->create_links();
}
?>
</div>