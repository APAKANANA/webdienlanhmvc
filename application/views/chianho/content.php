<div id="content">
	<div id="content_noidung">
    <?php
        if(isset($path)){
            foreach($path as $view){
                $this->load->view($view);
            }
        }
		if(isset($loi)){
                echo $loi;
		}
    ?>
	</div>
	<div id="content-right">
		<a href="https://www.youtube.com/watch?v=pjWSisjXVQQ"><div id="anhquangcao">
		</div></a>
		<a href="#"><div id="anhquangcao2">
		</div></a>
		<a href="https://vi-vn.facebook.com/"><div id="anhquangcao3">
		</div></a>
	</div>
</div>