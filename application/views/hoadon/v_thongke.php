<script src="<?php echo base_url('public/js/jquery-1.8.0.min.js') ?>"></script>
<script src="<?php echo base_url('public/js/js/jssor.js') ?>"></script>
<script src="<?php echo base_url('public/js/js/jssor.slider.mini.js') ?>"></script>

<script>
    $(document).ready(function () {
        $("#doanhthu").click(function(){
			//tungay=$("#tungay").val();		
			//var denngay=$("#denngay").val();
			$.post("<?php echo base_url("hoadon/doanhthu");?>",{tungay:$("#tungay").val(), denngay:$("#denngay").val()},function(dl,status){
									$("#iddoanhthu").html(dl);
									//alert("ranh");
								});
		});
		
		$("#dt_thungan").click(function(){
			$.post("<?php echo base_url("hoadon/doanhthuthungan");?>",{thungan:$("#mathungan").val(), ngay_tn:$("#ngay_tn").val()},function(dl,status){
									$("#iddoanhthu2").html(dl);
								});
		});
		
		$("#sanphambanchay").click(function(){
			$.post("<?php echo base_url("hoadon/sanphambanchay");?>",function(dl,status){
									$("#iddoanhthu2").html(dl);
								});
		});
		
		$("#khachangvip").click(function(){
			$.post("<?php echo base_url("hoadon/khachangvip");?>",function(dl,status){
									$("#iddoanhthu2").html(dl);
								});
		});
    });
</script>

<div id="rightthongke">
	<div id="thongke1">
		<h4>Xin chọn khoảng thời gian muốn thống kê doanh thu.</h4>
		<br/><br/>
		<p>Từ ngày:&nbsp; <input type="date" id="tungay" name="tungay">
		&nbsp; Đến ngày:&nbsp; <input type="date" id="denngay" name="dengay"></p>
		
		<br/>
		<br/>
		<div id="doanhthu">Doanh thu</div>
		<div id="iddoanhthu" style="float: right;  margin-right:500px; margin-bottom:20px; font-size:18px;color:#B22222;border-bottom:1px solid #B22222;margin-top:20px; "></div>
	</div>
	<div id="thongke2">
		<h4>Xin chọn thu ngân và ngày để biết doanh thu thu ngân đã check trong ngày</h4>
		<br/><br/>
		<p>Thu ngân: &nbsp;<select id="mathungan">
		<?php if(isset($dsthungan)){
				foreach($dsthungan as $thungan){?>
					<option value="<?php echo $thungan->manguoidung?>"><?php echo $thungan->hoten?></option>
				<?php }
		} ?></select> Chọn ngày: &nbsp;<input type="date" id="ngay_tn" name="ngay_tn"></p>
		<div id="tt">
		<div id="dt_thungan">Doanh thu thu ngân đã check</div>
		<div id="sanphambanchay" >Sản phẩm bán chạy</div>
		<div id="khachangvip">Khách hàng tiềm năng</div></div>
		<div id="iddoanhthu2" style="float: right;  margin-right:400px;  font-size:18px;color:#B22222;margin-top:5px; "></div>
	
	</div>

</div>
