<?php
    class Loaisp extends MY_Controller{
        public function __construct(){
            parent::__construct();
            //$this->load->model('m_loaisp');
        }
        public function lietke(){
            $data['dsloaisp']=$this->m_loaisp->lietke();
            $data['path']=array('loaisp/v_them','loaisp/v_lietke');            
            $this->load->view('layout_admin',$data);
        }
        public function themloaisp(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('tenloai','tên loại','required|min_length[5]|max_length[50]|is_unique[loaisanpham.tenloai]');
            if($this->form_validation->run()===false){
            	$data['dsloaisp']=$this->m_loaisp->lietke();
            	$data['path']=array('loaisp/v_them','loaisp/v_lietke');
            	$this->load->view('layout_admin',$data);
            }else{
                $ketqua=$this->m_loaisp->themloaisp($this->input->post('tenloai'));
            
            	if($ketqua){
                	redirect('loaisp/lietke');
            	}else{
                	$this->data['err']='Thêm không thành công. Xin vui lòng kiểm tra lại thông tin.';
            	}
            }
        }
        public function hiendulieulenformsua($maloai){
            $data['hiendulieudesua']=$this->m_loaisp->hiendulieulenformsua($maloai);
            $data['dsloaisp']=$this->m_loaisp->lietke();
            $data['path']=array('loaisp/v_sua','loaisp/v_lietke');
            $this->load->view('layout_admin',$data);
        }
        public function sualoaisp(){
            $this->load->library('form_validation');
          //  $ma =  $this->uri->segment(3); //có đâu mà lấy
            $this->form_validation->set_rules('tenloai','tên loại','required|min_length[5]|max_length[50]');
            if($this->form_validation->run()===false){
            	$maloai=$this->input->post('maloai');
            	$data['hiendulieudesua']=$this->m_loaisp->hiendulieulenformsua($maloai);
            	$data['dsloaisp']=$this->m_loaisp->lietke();
            	$data['path']=array('loaisp/v_sua','loaisp/v_lietke');
            	$this->load->view('layout_admin',$data);
            }else{
                $ketqua=$this->m_loaisp->sualoaisp($this->input->post('maloai'),$this->input->post('tenloai'));
                if($ketqua){
                	redirect('loaisp/lietke');
                }else{
                	$this->data['err']='Sửa không thành công. Xin vui lòng kiểm tra lại thông tin.';
                }
            }
            
        }
        public function xoaloaisp($maloai){
        	$num_rows=$this->m_loaisp->dem_sp_thuoc_loai($maloai);
        	if($num_rows>0){
        		$data['loixoaloaisp']='Không được xóa loại sản phẩm đã có sản phẩm.';
        		$data['dsloaisp']=$this->m_loaisp->lietke();
        		$data['path']=array('loaisp/v_them','loaisp/v_lietke');
        		$this->load->view('layout_admin',$data);
        	}else{
	            $ketqua=$this->m_loaisp->xoaloaisp($maloai);
	            if($ketqua){
	                redirect('loaisp/lietke');
	            }else{
	                $this->data['err']='Xóa không thành công. Xin vui lòng kiểm tra lại thông tin.';
	            }
        	}
        }
        public function layout_lietke(){
        	$this->load->library('pagination');
        	$config['base_url']=base_url('loaisp/layout_lietke');
        	$config['total_rows']=$this->m_loaisp->laytongsodong();
        	$config['per_page']=6;
        	$config['use_page_numbers']=TRUE;
        	$config['uri_segment'] = 3;
        	$this->pagination->initialize($config);
        	$tranghienhanh = $this->uri->segment(3)?$this->uri->segment(3):1;
        	$start = ($tranghienhanh-1)*$config['per_page'];
        	
        	$this->data['dsloaisp_layout']=$this->m_loaisp->lietke_layout($config['per_page'],$start);
			$this->data['dssanpham_layhinh']=$this->m_loaisp->laysp();
			 $data['dsloaisp']=$this->m_loaisp->lietke();//pp
        	 $this->data['path']=array('loaisp/v_lietke_layout');
        	 $this->load->view('layout',$this->data);
        }
		public function timsanpham(){
			// chỗ này ng` tạo function mới để gắn code này vào
			if(isset($_POST['tim'])){
			$sanpham=$this->db->like('tensanpham',$_POST['tim'])->limit(12)->get('sanpham')->result_array();
			
				foreach ($sanpham as $keysanpham => $valsanpham){
					echo '<div id="right">';
						echo '<div id="nd1a" class="traisp">
										<div class="chuaanh">';
											?><a href="<?php echo base_url('sanpham/chitietsanpham/'.$valsanpham['masanpham']) ?>"><img class="center" src="<?php echo base_url('public/hinh/hinhsanpham/'.$valsanpham['hinhanh']);?>"/></a>
											<?php 
										echo '</div>';
										echo '<p>';
										echo $valsanpham['tensanpham'];
										echo '</br>';
										echo 'Giá: '.$valsanpham['gia'].'000 VND';
										echo '</br>';
										echo 'Hãng sx: '.$valsanpham['hang'];							
										echo '</p>';
						echo '</div>';        			
									
					echo '</div>';
				}
					
			
			}
		
		
		
		}
	}
?>