<?php
    class Sanpham extends MY_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('m_sanpham');
        }
        public function lietke(){
        	$this->load->library('pagination');
        	$config['base_url']=base_url('sanpham/lietke');
        	$config['total_rows']=$this->m_sanpham->laytongsodong();
        	$config['per_page']=5;
        	$config['use_page_numbers']=TRUE;
        	$config['uri_segment'] = 3;
        	$this->pagination->initialize($config);
        	$tranghienhanh = $this->uri->segment(3)?$this->uri->segment(3):1;
        	$start = ($tranghienhanh-1)*$config['per_page'];
        	
            $data['layloaisp']=$this->m_sanpham->layloaisp();
            $data['dssanpham']=$this->m_sanpham->lietke($config['per_page'],$start);
            $data['path']=array('sanpham/v_lietke');
            $this->load->view('layout_admin',$data);
        }
        
        public function hienformthem(){
        	$data['layloaisp']=$this->m_sanpham->layloaisp();
        	$data['path']=array('sanpham/v_them');
        	$this->load->view('layout_admin',$data);
        }
        
        public function themsanpham(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('tensanpham','tên sản phẩm','required|min_length[5]|max_length[50]|is_unique[sanpham.tensanpham]');
            if (empty($_FILES['hinhanh']['name']))
            {
            	$this->form_validation->set_rules('hinhanh','hình ảnh','required');
            }
            if($this->form_validation->run()===false){
            	$data['layloaisp']=$this->m_sanpham->layloaisp();
            	$data['path']=array('sanpham/v_them');
            	$this->load->view('layout_admin',$data);
            }else{
            	
                $config['upload_path']='./public/hinh/hinhsanpham/';
                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size'] = '3000000';
                $config['max_width'] = '1024';
                $config['max_height'] = '768';
                $hinh=time().'-'.$_FILES['hinhanh']['name'];
				
                $config['file_name']=$hinh;
                $this->load->library('upload',$config);
                if($this->upload->do_upload('hinhanh')){
                    $ketqua=$this->m_sanpham->themsanpham($this->input->post('tensanpham'),$hinh,$this->input->post('mota'),$this->input->post('congsuat'),$this->input->post('kichthuoc'),$this->input->post('diennangtieuthu'),$this->input->post('gia'),$this->input->post('sothangbaohanh'),$this->input->post('nuocsx'),$this->input->post('hang'),$this->input->post('maloai'));
                    if($ketqua){
                        redirect('sanpham/hienformthem');
                    }else{
                        $this->data['err']='Thêm không thành công. Xin kiểm tra lại thông tin.';
                    }
                }else{
                	$data['layloaisp']=$this->m_sanpham->layloaisp();
                	$data['path']=array('sanpham/v_them');
                	$data['loihinh']='Hình quá nặng. Xin tải hình nhẹ hơn';
                	$this->load->view('layout_admin',$data);
                }
            }
        }
        
        public function hiendulieulenformsua($masanpham){
        	$data['layloaisp']=$this->m_sanpham->layloaisp();
        	//$data['dssanpham']=$this->m_sanpham->lietke();
        	$data['hiendulieudesua']=$this->m_sanpham->hiendulieulenformsua($masanpham);
        	$data['path']=array('sanpham/v_sua');
        	$this->load->view('layout_admin',$data);
        }
        
        public function suasanpham(){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('tensanpham','tên sản phẩm','required|min_length[5]|max_length[50]');
        	if($this->form_validation->run()===false){
        		$masanpham=$this->input->post('masanpham');
        		$data['layloaisp']=$this->m_sanpham->layloaisp();
        		//$data['dssanpham']=$this->m_sanpham->lietke();
        		$data['hiendulieudesua']=$this->m_sanpham->hiendulieulenformsua($masanpham);
        		$data['path']=array('sanpham/v_sua');
        		$this->load->view('layout_admin',$data);
        	}else{
    
        		if($_FILES['hinhanh']['name']==""){
	        		$ketqua=$this->m_sanpham->suasanpham($this->input->post('masanpham'),$this->input->post('tensanpham'),0,$this->input->post('mota'),$this->input->post('congsuat'),$this->input->post('kichthuoc'),$this->input->post('diennangtieuthu'),$this->input->post('gia'),$this->input->post('sothangbaohanh'),$this->input->post('nuocsx'),$this->input->post('hang'),$this->input->post('maloai'),0);
	                if($ketqua){
	                	redirect('sanpham/lietke');
	                }else{
	                	$this->data['err']='sửa không thành công';
	                }
        		}else{
        			$config['upload_path']='./public/hinh/hinhsanpham/';
        			$config['allowed_types'] = 'gif|jpg|png|jpeg';
        			$config['max_size'] = '3000000';
        			$config['max_width'] = '1024';
        			$config['max_height'] = '768';
        			
        			$hinh=time().'-'.$_FILES['hinhanh']['name'];
        			
        			$config['file_name']=$hinh;
        			$this->load->library('upload',$config);
        			if($this->upload->do_upload('hinhanh')){
        				$ketqua=$this->m_sanpham->suasanpham($this->input->post('masanpham'),$this->input->post('tensanpham'),$hinh,$this->input->post('mota'),$this->input->post('congsuat'),$this->input->post('kichthuoc'),$this->input->post('diennangtieuthu'),$this->input->post('gia'),$this->input->post('sothangbaohanh'),$this->input->post('nuocsx'),$this->input->post('hang'),$this->input->post('maloai'),1);
        				if($ketqua){
        					redirect('sanpham/lietke');
        				}else{
        					$this->data['err']='Sửa không thành công. Xin kiểm tra lại thông tin.';
        				}
        			}else{
        				$data['layloaisp']=$this->m_sanpham->layloaisp();
	                	$data['path']=array('sanpham/v_them');
	                	$data['loihinh']='Hình quá nặng. Xin tải hình nhẹ hơn';
	                	$this->load->view('layout_admin',$data);
        			}
        		}
        	}
        }
        
        public function xoasanpham($masanpham){
        	$num_rows=$this->m_sanpham->sanpham_trong_hoadon($masanpham);
        	if($num_rows>0){
        		$this->load->library('pagination');
        		$config['base_url']=base_url('sanpham/lietke');
        		$config['total_rows']=$this->m_sanpham->laytongsodong();
        		$config['per_page']=5;
        		$config['use_page_numbers']=TRUE;
        		$config['uri_segment'] = 3;
        		$this->pagination->initialize($config);
        		$tranghienhanh = $this->uri->segment(3)?$this->uri->segment(3):1;
        		$start = ($tranghienhanh-1)*$config['per_page'];
        		
        		$data['loixoasp']='Không được xóa sản phẩm đã có trong chi tiết hóa đơn';
        		$data['layloaisp']=$this->m_sanpham->layloaisp();
        		$data['dssanpham']=$this->m_sanpham->lietke($config['per_page'],$start);
        		$data['path']=array('sanpham/v_lietke');
        		$this->load->view('layout_admin',$data);
        	}else{
	        	$ketqua=$this->m_sanpham->xoasanpham($masanpham);
	        	if($ketqua){
	        		redirect('sanpham/lietke');
	        	}else{
	        		$this->data['err']='Xóa không thành công. Xin thử lại.';
	        	}
        	}
        }
        
        public function layout_lietke($maloai){
        	$this->load->library('pagination');
        	$config['base_url']=base_url('sanpham/layout_lietke').'/'.$maloai;
        	$config['total_rows']=$this->m_sanpham->laytongsodongtheoloai($maloai);
        	$config['per_page']=6;
        	$config['use_page_numbers']=TRUE;
        	$config['uri_segment'] = 4;
        	$this->pagination->initialize($config);
        	$tranghienhanh = $this->uri->segment(4)?$this->uri->segment(4):1;
        	$start = ($tranghienhanh-1)*$config['per_page'];
        	 
        	$this->data['dssanpham_layout']=$this->m_sanpham->layout_lietke($maloai,$config['per_page'],$start);
        	//$this->m_sanpham->layout_lietke($maloai,$config['per_page'],$start);
        	//print_r($a);
			//echo 'dien sp '.$this->uri->segment(4);
        	$this->data['path']=array('sanpham/v_lietke_layout');
        	$this->load->view('layout',$this->data);
        }
        
		public function chitietsanpham($masanpham){
			$this->data['chitietsp']=$this->m_sanpham->hiendulieulenformsua($masanpham);
			$this->data['path']=array('sanpham/v_chitietsanpham_layout');
			$this->load->view('layout',$this->data);
		}
		public function sanphammoi(){
			$this->load->library('pagination');
        	$config['base_url']=base_url('sanpham/sanphammoi');
        	$config['total_rows']=$this->m_sanpham->laytongsodong();
        	$config['per_page']=6;
        	$config['use_page_numbers']=TRUE;
        	$config['uri_segment'] = 3;
        	$this->pagination->initialize($config);
        	$tranghienhanh = $this->uri->segment(3)?$this->uri->segment(3):1;
        	$start = ($tranghienhanh-1)*$config['per_page'];
			
			//$a=$this->m_sanpham->sanphammoi();
			//echo $a[0]->tensanpham;
			$this->data['dssanphammoi']=$this->m_sanpham->sanphammoi($config['per_page'],$start);
        	$this->data['path']=array('sanpham/v_lietke_layout');
        	$this->load->view('layout',$this->data);
		}
    }
?>