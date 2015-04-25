<?php 
class baiviet extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_baiviet');
		$this->load->model('m_loaisp');
		$this->load->library('pagination');
	}
	public function lietkebv()
	{
		$data['title']='Liệt kê bài viết';
		//phan trang
		$config['base_url']=base_url('baiviet/lietkebv');
		$config['total_rows']=$this->m_baiviet->count_all();
		$config['per_page']=5;
		$config['uri_segment']=3;
		$this->pagination->initialize($config);
		$data['ds_loaisp']=$this->m_loaisp->lietke();
		$data['dsbaiviet']=$this->m_baiviet->mlietkebv($config['per_page'],$this->uri->segment(3));
		$data['path']=array('baiviet/v_lietkebv');
		$this->load->view("layout_admin",$data);	
	}
	
	public function loadtrangthem()
	{
		
		$data['title']='thêm bài viết';
		$data['ds_loaisp']=$this->m_loaisp->lietke();
		$data['path']=array('baiviet/v_thembv');
		$this->load->view("layout_admin",$data);
	
	}
	
	public function thembv()
	
		{
						
						
			$this->load->library('form_validation');
			$this->form_validation->set_rules('txtten','Tên bài viết','required');
			$this->form_validation->set_rules('ttmota','Mô tả','required');
			$this->form_validation->set_rules('editor1','Nội dung','required');
			$this->form_validation->set_message('required','Xin vui lòng nhập phần %s');
			if (empty($_FILES['hinhanh']['name']))
            {
            	$this->form_validation->set_rules('hinhanh','hình ảnh','required');
            }
			if ($this->input->post('OKthem'))
			{
				if($this->form_validation->run()===false){ 
                $data['path']=array('baiviet/v_thembv');
                $this->load->view('layout_admin',$data);
                
            }else{
				$config['upload_path']='./public/hinh/hinhbaiviet/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '3000000';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                
				$hinh = time().'-'.$_FILES['hinhanh']['name'];
                $config['file_name']=$hinh;
                $this->load->library('upload',$config);
				$data['ds_loaisp']=$this->m_loaisp->lietke();
				if($this->upload->do_upload('hinhanh')){
						$loaisanpham= $this->input->post('dsloaisp');
						$name=$this->input->post('txtten');
						$mota=$this->input->post('ttmota');
						$noidung=$this->input->post('editor1');
						$ngaycapnhat=$this->input->post('date');
						$da=$this->m_baiviet->mthembv($name,$mota,$hinh,$noidung,$ngaycapnhat,$loaisanpham);
						if($da)
						{
							Redirect('baiviet/lietkebv');
						}
						else{
						echo 'Đã xảy ra lỗi khi thêm';
						}
					}else{
					echo 'không thêm được hình ảnh';
					}
				
				$data['path']=array('baiviet/v_thembv');
				$this->load->view("layout_admin",$data);
			}
		}
		}
		public function hienthibaivietcansua($id)
		{
			$data['title']='sửa bài viết';
			$data['ds_loaisp']=$this->m_loaisp->lietke();
			$data['baivietcansua']=$this->m_baiviet->hienlinh($id);
			$maloai=$data['baivietcansua']->maloai;
			$data['tensp']=$this->m_loaisp->hiendulieulenformsua($maloai);
			$data['dsbaiviet']=$this->m_baiviet->lietkebvcansua();
			$data['path']=array('baiviet/v_suabv');
			$this->load->view('layout_admin',$data);
		}
	
	public function suabv()
		{		

			$data['title']='sửa bài viết';
			$this->load->library('form_validation');
			$this->form_validation->set_rules('txtten','Tên bài viết','required|min_length[50]|max_length[200]');
			$this->form_validation->set_rules('ttmota','Mô tả','required');
			$this->form_validation->set_rules('ttnoidung','Nội dung','required');
			$this->form_validation->set_message('required','Xin vui lòng nhập phần %s');
			
			
			
			if($this->input->post('OKsua'))
			{	
			if($this->form_validation->run()===false){ 
				$mabv=$this->input->post('txtma');
				$data['baivietcansua']=$this->m_baiviet->hienlinh($mabv);
				
                $data['path']=array('baiviet/v_suabv');
                $this->load->view('layout_admin',$data);
				if($_FILES['hinhanh']['name']==""){
					$mabv=$this->input->post('txtma');
					$tenbv=$this->input->post('txtten');
					$mota=$this->input->post('ttmota');
					$hinhanh=$data['baivietcansua']->hinhanh;
					$noidung=$this->input->post('editor1');
					$ngaycapnhat=$this->input->post('date');
					$loaisanpham=$this->input->post('dsloaisp');
					$da=$this->m_baiviet->suabv($mabv,$tenbv,$mota,$hinhanh,$noidung,$ngaycapnhat,$loaisanpham);
					if($da)
					{
						Redirect('baiviet/lietkebv');
					}
					else{
						$this->data['err']='sửa không thành công';
					}
				}
				else{
					$config['upload_path']='./public/hinh/hinhbaiviet/';
        			$config['allowed_types'] = 'gif|jpg|png|jpeg';
        			$config['max_size'] = '3000000';
        			$config['max_width'] = '1024';
        			$config['max_height'] = '768';
        			
        			$hinh=time().'-'.$_FILES['hinhanh']['name'];
        			
        			$config['file_name']=$hinh;
        			$this->load->library('upload',$config);
        			if($this->upload->do_upload('hinhanh')){
						$mabv=$this->input->post('txtma');
						$name=$this->input->post('txtten');
						$mota=$this->input->post('ttmota');
						$noidung=$this->input->post('editor1');
						$ngaycapnhat=$this->input->post('date');
						$loaisanpham=$this->input->post('dsloaisp');
						$da=$this->m_baiviet->suabv($mabv,$name,$mota,$hinh,$noidung,$ngaycapnhat,$loaisanpham);
						if($da)
						{
							Redirect('baiviet/lietkebv');
						}
						else{
						$this->data['err']='Đã có lỗi xảy ra khi sửa';
						}
					}else{
					$this->data['err']='Không sửa được hình ảnh';
					}
					}
				}
			}
		}
		public function xoabv($id){
			$da=$this->m_baiviet->mxoabv($id);
			
			if($da)
			{
				Redirect('baiviet/lietkebv');
			}
		}
		
		public function layout_lkbaiviet(){
			
			$this->data['title']='Dịch vụ điện lạnh';
			$this->data['baivietmoi']=$this->m_baiviet->laybaivietmoi();
			$ma=$this->data['baivietmoi']-> mabaiviet;
			//phan trang
			
			$this->load->library('pagination');
        	$config['base_url']=base_url('baiviet/layout_lkbaiviet');
        	$config['total_rows']=$this->m_baiviet->count_all();
        	$config['per_page']=5;
        	$config['use_page_numbers']=TRUE;
        	$config['uri_segment'] = 3;
        	$this->pagination->initialize($config);
        	$tranghienhanh = $this->uri->segment(3)?$this->uri->segment(3):1;
        	$start = ($tranghienhanh-1)*$config['per_page'];
			
			$this->data['lkbv']=$this->m_baiviet->laybaivietlk($ma, $config['per_page'], $start);
			//$a=$this->m_baiviet->laybaivietlk($ma, $config['per_page'], $start);
			//print_r($a);
			$this->data['path']=array('baiviet/v_layout_lkbaiviet');
			$this->load->view("layout",$this->data);	
		
		}
		public function chitietbaivietmoi($mabaiviet){
			$this->data['title']='Chi tiết bài viết';
			$this->data['chitietbaiviet']=$this->m_baiviet->mchitietbaivietmoi($mabaiviet);
			$this->data['path']=array('baiviet/v_layout_chitietbaiviet');
			$this->load->view("layout",$this->data);
		}
		
		public function chitietbaiviet($mabaiviet){
			$this->data['chitietbaiviet']=$this->m_baiviet->mchitietbaiviet($mabaiviet);
			$this->data['title']='Chi tiết bài viết';
			$this->data['path']=array('baiviet/v_layout_chitietbaiviet');
			$this->load->view("layout",$this->data);
		}
		public function layout_lkbv($ma){
			$this->data['chitiettheoloaisp']=$this->m_baiviet->Lietketheoloaisp($ma);
			if($this->data['chitiettheoloaisp'])
			{
				$this->data['path']=array('baiviet/v_layout_lkbaiviettheosp');
				$this->load->view("layout",$this->data);
			}
			else{
			//$this->da['path']=array('baiviet/v_layout_lkbaiviettheosp');
			$this->data['loi']='Chua co bai viet cho san pham nay';
			$this->load->view("layout",$this->data);
		}
	}
		
	
	}
?>
