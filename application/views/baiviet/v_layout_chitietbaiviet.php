<div id="chitietbaiviet">
	<?php 
		foreach($chitietbaiviet as $dong){
	?>
		<div id="hienthibaiviet">
			<div id="tenbv"><?php echo $dong->tenbaiviet; ?></div>
			<div id="ndbv"><?php echo $dong->noidung; ?></div>
		</div>
	<?php
	}
	?>
</div>