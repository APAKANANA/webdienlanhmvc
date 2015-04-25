<div id="noidungtrangchu">
	<script>
	function fadeElem(currElem,nextElem){
		  currElem.removeClass('current').find('img') .css({'z-index':'50'}) .end() .find('p') .css({'z-index':'50'});
		  nextElem.addClass('current').find('img') .css({'opacity': '0','z-index':'100'}) .animate({opacity: 1}, 700, function(){
		   currElem.find('img') .css({'z-index': '0'});
		  }).end().find('p') .css({'height':'0','z-index':'100'}) .animate({height: 50},500, function(){
		   currElem.find('p') .css({'z-index': '0'});
		  });
		}
	</script>
	<script>
			function widegetStatus(slides){
		  slides.each(function(index){
		   if($(this).attr('class') == 'current')
			$('#controlNav a').removeClass('active') .eq(index) .addClass('active');
			});
			}
	</script>
	<script>
	function slideshow(prev){
		  var slides = $('#slideshow li');
		  var currElem = slides.filter('.current');
		  var lastElem = slides.filter(':last');
		  var firstElem = slides.filter(':first');
		  // Xác định phần tử kế tiếp là prev hay next
		  var nextElem = (prev)? currElem.prev() : currElem.next();
		  if(prev){
		   if(firstElem.attr('class') == 'current') nextElem = lastElem;
		  }else if(lastElem.attr('class') == 'current')nextElem = firstElem;
		  fadeElem(currElem,nextElem);
		  widegetStatus(slides);
	 } 
	 </script>
	 <script>
	  function wideget(index){
		  var slides = $('#slideshow li');
		  var currElem = slides.filter('.current');
		  var nextElem = slides.eq(index);
		  fadeElem(currElem,nextElem);
		  widegetStatus(slides);
		}
		</script>
		<script>
		function vk_slideshow(time){
			  var idset =setInterval('slideshow()', time);
			  var liarr =$('#slideshow ul li');
			  var controlNav =$('#controlNav');
			  var str='';
			  for(var i=0; i<liarr.length; i++){
			   str+='<a></a>';
			  }
			  controlNav.append(str);
			  controlNav.children().each(function(index){
			   $(this).click(function(){
				wideget(index);clearInterval(idset);
				idset =setInterval('slideshow()', time);
			   });
			  }).eq(0).addClass('active');
			  $('#next').click(function(){
			   slideshow(); clearInterval(idset);
			   idset =setInterval('slideshow()', time);
			  });
			  $('#prev').click(function(){
			   slideshow(true); clearInterval(idset);
			   idset =setInterval('slideshow()', time);
			  });
		}
	</script>
		<div id="quanh">
			<div id="wrap-slide">
				<div id="slideshow">
				  <ul>
				   <li class="current"><img src="<?php echo base_url('public/hinh/hinhgiaodien/hinh1.jpg');?>"  /><p>Tủ lạnh đa năng</p></li>
				   <li><img src="<?php echo base_url('public/hinh/hinhgiaodien/hinh5.jpg');?>" /> <p>Điều hòa cuộc sống</p></li>
				   <li><img src="<?php echo base_url('public/hinh/hinhgiaodien/hinh3.jpg');?>"  /><p>Máy giặt nhỏ gọn, sang trọng</p></li>
				   <li><img src="<?php echo base_url('public/hinh/hinhgiaodien/hinh4.jpg');?>"  /><p>Lò vi sóng trang nhã, tiện dụng</p></li>
				  </ul>
				  <span id="prev">prev</span><span id="next">next</span>
				  <p id="controlNav"></p>
				</div>
			</div>
			
			<div id="loaispgt">
				<p>Sản phẩm</p>
					<?php foreach ($loaisanpham as $dong){?>
						<div id="tungloai">
							<a href="<?php echo base_url('sanpham/layout_lietke/'.$dong->maloai) ?>">
							<?php
							if($dssanpham_layhinh){
									foreach($dssanpham_layhinh as $hinhsp){
									if($hinhsp->maloai==$dong->maloai){?>
									<img u="image"  src="<?php echo base_url('public/hinh/hinhsanpham/'.$hinhsp->hinhanh);?>"/>
									<?php }
									}
									}?>
						</a>
						</div>
						<?php
					}
						?>
			</div>
		</div>
		<div class="xoa"></div>
		<div id="pm">
			<div class="thanhphan1">
				<div class="te">HÀNG CHÍNH HÃNG</div>

					<p>Bạn có thể hoàn toàn yên tâm khi lựa chọn sản phẩm tại Gia Khang vì những sản phẩm này sẽ được hưởng chính sách 
					khuyến mãi, bảo hành, bảo trì, đổi trả đầy đủ của NSX..</p>
			</div>
			<div class="thanhphan2">
					<div class="te">MIỄN PHÍ VẬN CHUYỂN 20KM</div>
					<p>Phí vận chuyển phát sinh:
						Khi khoảng cách giao hàng vượt quá số km miễn phí, phí vận chuyển sẽ được tính với đơn giá – 5.000đ/1km phát sinh 
						(Không phân biệt phương tiện vận chuyển).
					
					</p>
			</div>
			<div class="thanhphan1">
					<div class="te">BẢO HÀNH TẬN NƠI</div>
					<p>
						Trong thời gian sử dụng nếu gặp bất kỳ trục trặc nào hoặc lỗi do người sử dụng 
						khách hàng có thể liên lạc trực tiếp với Trung tâm bảo hành Gia Khang để được trợ giúp.
					</p>
			</div>
		</div>
			<div class="xoa"></div>
		<div id="baiviettc">
				<div id="quanhbai">
					<?php foreach ($laybaiviettc as $dong1){
					?>
					<div id="tungbai">
						<div id="hinhbai"><img u="image"  src="<?php echo base_url('public/hinh/hinhbaiviet/'.$dong1->hinhanh);?>"/></div>
						<div id="motabai"><a href="<?php echo base_url('baiviet/chitietbaiviet/'.$dong1->mabaiviet)?>"><?php echo $dong1->tenbaiviet; ?></a></div>	
					</div>
					<?php } ?>
				</div>
		</div>
	<script type="text/javascript">
		$(document).ready(function(){
		vk_slideshow(4000);
		});
    </script>
</div>
	
