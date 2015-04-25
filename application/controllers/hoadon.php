<?php
class hoadon extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_hoadon');
		$this->load->model('m_cthoadon');
	}
	public function lietkehd()
	{
		$data['title']='Liệt kê hóa đơn';
		$data['dshoadon']=$this->m_hoadon->mlietkehd();
		$data['path']=array('hoadon/v_lietkehd');
		$this->load->view("layout_admin",$data);
	}
	
	
	public function xemchitiet($id)
	
	{
		$data['sohoadon']=$id;
		$data['chitiethoadon']=$this->m_hoadon->hienthichitiet($id);
		$hehe=$this->m_hoadon->hienthichitiet($id);
		$data['dshoadon']=$this->m_cthoadon->mlietkecthd();
		$kq=$this->m_hoadon->hienlinh($id);
		$kh=$kq->makhachhang;
		$nv=$kq->manhanvien;
		$data['tenkhachhang']=$this->m_hoadon->hienthikhachhang($kh);
		$data['tennhanvien']=$this->m_hoadon->hienthikhachhang($nv);
		
			$data['tensanpham']=$this->m_hoadon->hienthitensp();
		$data['path']=array('chitiethoadon/v_lietkecthd');
		$this->load->view('layout_admin',$data);
	}
	//O day la form day len, khong phai truyen vao
	public function themvaogiohang(){
		$hoten=$this->input->post('tensanpham');
		$masanpham=$this->input->post('masanpham');
		$this->cart->product_name_rules .=  '\d\D';  
		$dl['tt_sanpham']=$this->m_hoadon->thongtinsanpham($masanpham);
		/*echo $dl['tt_sanpham']->tensanpham;*/
		
		$data=array(
					'id'=>$masanpham,
					'qty'=>1,					
					'price'=>$dl['tt_sanpham']->gia,
					'name'=>$hoten
					);
			$this->cart->insert($data);		
		
		//if($this->cart->insert($data)){
		//	print_r($data);
		//}
		
		
		redirect('loaisp/layout_lietke');
		//tro ve trang truoc khi them
	}
	public function xoatdgh(){
	$carts = $this->cart->contents();
    foreach ($carts as $key => $value)
		{
			//Kiểm tra nếu id của sản phẩm trong giỏ hàng = id sản phẩm muốn xóa
			if($value['rowid'] == $id)
			{
				$data = array(
					  'rowid' => $key,//ở đây kể key, để gì gì in đó đi
					  
					  'qty'   => 0 //cập nhật số lượng = 0
				);
				//echo $key;
				//$this->cart->update($data);
				//break;
			}
		}
		echo 'ranh';
	}
	
	public function taohd(){	
			$makhachhang= $this->session->userdata('manguoidung');
			$trigia=$this->cart->total();
			$this->load->model('m_hoadon');
			$hd=$this->m_hoadon->themhd($makhachhang,$trigia);
			$sohoadon = $this->m_hoadon->laysohoadon();
			if($hd)
					$data= $this->cart->contents();
					foreach ($data as $items){
						$masanpham=$items['id'];
						$soluong=$items['qty'];
						$cthd=$this->m_hoadon->themcthd($sohoadon,$masanpham,$soluong);
						
					}
				$this->cart->destroy();
				Redirect('loaisp/layout_lietke');	
	}
	
	public function xemgiohang(){
		$this->data['path']=array('hoadon/v_xemgiohang');
		$this->load->view('layout',$this->data);
	}
	public function suagiohang(){
		//$total = $this->cart->total_items();
		
		$item=$this->input->post('rowid');
		$qty=$this->input->post('qty');
		$total=count($item);
		/*//echo count($item);
		//print_r($item);
		//echo '<br>'.$total.'<br>';
		//print_r($qty);
		echo '<br>';
		print_r($this->cart->contents());
		*/
		for($i=0;$i<$total;$i++){
			$data=array(
				'rowid'=>$item[$i],
				'qty'=>$qty[$i]
			);	
			
			$this->cart->update($data);
		}
		redirect('hoadon/xemgiohang');
	}
	function xoagiohang(){
		$this->cart->destroy(); // Destroy all cart data
		redirect('hoadon/xemgiohang'); // Refresh te page
	}
	
	
	public function hienthicheckhd()
	{
		$data['title']='Các hóa đơn chưa thanh toán';
		$data['dshoadon']=$this->m_hoadon->mlietkehd();
		$data['path']=array('hoadon/check_hoadon');
		$this->load->view('layout_admin',$data);
	}
	public function suahd()
	{$this->load->model('m_hoadon');
		if($this->input->post('sohoadon')){
				$a = $this->input->post('sohoadon');
				$b=(explode(",",$a));
				$manhanvien=$this->session->userdata('manguoidung');
				for($i=1;$i<count($b);$i++)
				{
				 
				$this->m_hoadon->suahd($b[$i],$manhanvien);
				}
				
			}
		redirect('hoadon/hienthicheckhd');
		
	}
	public function thongke(){
		$data['dsthungan']= $this->m_hoadon->laynguoidung();
		$data['path']=array('hoadon/v_thongke');
        $this->load->view('layout_admin',$data);
	}
	public function doanhthu(){
		//$a= $this->m_hoadon->doanhthu('2014/4/1','2014/4/2');
		//print_r($a);
		//echo $a->trigia;
		//$data['doanhthu']=$this->m_hoadon->doanhthu('2014/4/1','2014/4/2');
        //$data['path']=array('hoadon/v_doanhthu');
        //$this->load->view('layout_admin',$data);
		$tungay=$this->input->post('tungay');
		$denngay=$this->input->post('denngay');
        //$data['path']=array('hoadon/v_doanhthu');
        //$this->load->view('layout_admin',$data);
		$dl['doanhthu']=$this->m_hoadon->doanhthu($tungay,$denngay);
		$this->load->view('hoadon/v_doanhthu',$dl);
	}
	public function doanhthuthungan(){
		$thungan=$this->input->post('thungan');
		$ngay=$this->input->post('ngay_tn');
		
		$dl['dt_thungan']=$this->m_hoadon->doanhthuthungan($thungan, $ngay);
		$this->load->view('hoadon/v_doanhthu',$dl);
	}
	/*
	public function test(){
		//$a= $this->m_hoadon->doanhthu('2014/4/1','2014/4/2');
		//print_r($a);
		//echo $a->trigia;
		//$data['doanhthu']=$this->m_hoadon->doanhthu('2014/4/1','2014/4/2');
		$tungay=$this->input->post('tungay');
		$denngay=$this->input->post('denngay');
		echo $tungay;
		echo $denngay;
		echo 'dien du';
        //$data['path']=array('hoadon/v_doanhthu');
        //$this->load->view('layout_admin',$data);
		$dl['doanhthu']=$this->m_hoadon->doanhthu($tungay,$denngay);
		$this->load->view('hoadon/v_doanhthu',$dl);
	}*/
	public function sanphambanchay(){
		//$a=$this->m_hoadon->sanphambanchay();
		//echo $a[0]->tensanpham;
		//print_r($a);
		$dl['sanphambanchay']=$this->m_hoadon->sanphambanchay();
		$this->load->view('hoadon/v_doanhthu',$dl);
	}
	public function khachangvip(){
		//$a=$this->m_hoadon->khachangvip();
		//print_r($a);
		$dl['khachangvip']=$this->m_hoadon->khachangvip();
		$this->load->view('hoadon/v_doanhthu',$dl);
	}
}