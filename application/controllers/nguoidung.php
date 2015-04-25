<?php
    class Nguoidung extends MY_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model('m_nguoidung');
			$this->load->library('my_string');
        }
        public function lietke(){
        	$this->load->library('pagination');
        	$config['base_url']=base_url('nguoidung/lietke');
        	$config['total_rows']=$this->m_nguoidung->laytongsodong();
        	$config['per_page']=5;
        	$config['use_page_numbers']=TRUE;
        	$config['uri_segment'] = 3;
        	$this->pagination->initialize($config);
        	$tranghienhanh = $this->uri->segment(3)?$this->uri->segment(3):1;
        	$start = ($tranghienhanh-1)*$config['per_page'];
        	
			$data['title']='Thông tin người dùng';
            $data['layphanquyen']=$this->m_nguoidung->layphanquyen(); #lấy phân quyền #_#
            $data['dsnguoidung']=$this->m_nguoidung->lietke($config['per_page'],$start);
            $data['path']=array('nguoidung/v_lietke');
            $this->load->view('layout_admin',$data);
        }       
        public function themnguoidung(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('hoten','họ tên','trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('tendangnhap','tên đăng nhập','trim|required|min_length[5]|max_length[50]|is_unique[nguoidung.tendangnhap]');
            $this->form_validation->set_rules('pass','password','trim|required|min_length[6]|max_length[20]');
		 	$this->form_validation->set_rules('cmnd','CMND','trim|required|is_unique[nguoidung.cmnd]');
            $this->form_validation->set_rules('email','email','trim|required|valid_email|is_unique[nguoidung.email]');
                 
            if($this->form_validation->run()===false){  
            	$data['title']='Thêm người dùng';
                $data['path']=array('nguoidung/v_them');
                $this->load->view('layout_admin',$data);                
            }else{
                $ketqua=$this->m_nguoidung->themnguoidung($this->input->post('hoten'),$this->input->post('tendangnhap'),$this->input->post('pass'),$this->input->post('cmnd'),$this->input->post('gioitinh'),$this->input->post('ngaysinh'),$this->input->post('email'),$this->input->post('diachi'),$this->input->post('dienthoai'));
                if($ketqua){
                    redirect('nguoidung/themnguoidung');
                }else{
                    $this->data['err']='Thêm không thành công. Xin vui lòng kiểm tra lại thông tin.';
                }
            }            
        }
        public function hiendulieulenformsua($manguoidung){
        	$data['title']='Sửa thông tin người dùng'; 
            $data['hiendulieudesua']=$this->m_nguoidung->hiendulieulenformsua($manguoidung);
            $data['path']=array('nguoidung/v_sua');
            $this->load->view('layout_admin',$data);
        }
        public function suanguoidung(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('hoten','họ tên','trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('tendangnhap','tên đăng nhập','trim|required|min_length[5]|max_length[50]');
            $this->form_validation->set_rules('pass','password','trim|required|min_length[6]|max_length[20]');
            $this->form_validation->set_rules('cmnd','CMND','trim|required');
            $this->form_validation->set_rules('email','email','trim|required|valid_email');
            
            if($this->form_validation->run()===false){
            	$manguoidung=$this->input->post('manguoidung');
            	$data['title']='Sửa thông tin người dùng'; 
            	$data['hiendulieudesua']=$this->m_nguoidung->hiendulieulenformsua($manguoidung);
            	$data['path']=array('nguoidung/v_sua');
            	$this->load->view('layout_admin',$data);
                
            }else{
                $ketqua=$this->m_nguoidung->suanguoidung($this->input->post('hoten'),$this->input->post('manguoidung'),$this->input->post('tendangnhap'),$this->input->post('pass'),$this->input->post('cmnd'),$this->input->post('gioitinh'),$this->input->post('ngaysinh'),$this->input->post('email'),$this->input->post('diachi'),$this->input->post('dienthoai'));
                if($ketqua){
                    redirect('nguoidung/lietke');
                }else{
                    $this->data['err']='Sửa không thành công. Xin kiểm tra lại thông tin.';
                }                     
            }
        }
        public function xoanguoidung($manguoidung){
			$admin=$this->m_nguoidung->kiemtra_la_admin($manguoidung);
			if($admin){
				$this->load->library('pagination');
					$config['base_url']=base_url('nguoidung/lietke');
					$config['total_rows']=$this->m_nguoidung->laytongsodong();
					$config['per_page']=5;
					$config['use_page_numbers']=TRUE;
					$config['uri_segment'] = 3;
					$this->pagination->initialize($config);
					$tranghienhanh = 1;//vì $this->uri->segment(3) là mã
					$start = ($tranghienhanh-1)*$config['per_page'];
					$data['title']='Xóa người dùng';
					$data['loikhixoa']='Không được xóa admin.';
					$data['layphanquyen']=$this->m_nguoidung->layphanquyen();
					$data['dsnguoidung']=$this->m_nguoidung->lietke($config['per_page'],$start);
					$data['path']=array('nguoidung/v_lietke');
					//echo $this->m_nguoidung->layphanquyen($config['per_page'],$start);
					$this->load->view('layout_admin',$data);
			}else{
				$num_rows=$this->m_nguoidung->dem_nd_trong_hd($manguoidung);
				if($num_rows>0){
					$this->load->library('pagination');
					$config['base_url']=base_url('nguoidung/lietke');
					$config['total_rows']=$this->m_nguoidung->laytongsodong();
					$config['per_page']=5;
					$config['use_page_numbers']=TRUE;
					$config['uri_segment'] = 3;
					$this->pagination->initialize($config);
					$tranghienhanh = 1;
					$start = ($tranghienhanh-1)*$config['per_page'];
					$data['title']='Xóa người dùng';
					$data['loikhixoa']='Không được xóa người dùng đã giao dịch trong hóa đơn.';
					$data['layphanquyen']=$this->m_nguoidung->layphanquyen();
					$data['dsnguoidung']=$this->m_nguoidung->lietke($config['per_page'],$start);
					$data['path']=array('nguoidung/v_lietke');
					//echo $this->m_nguoidung->layphanquyen($config['per_page'],$start);
					$this->load->view('layout_admin',$data);
				}else{
					$ketqua=$this->m_nguoidung->xoanguoidung($manguoidung);
					if($ketqua){
						redirect('nguoidung/lietke');
					}else{
						$this->data['err']='Xóa không thành công. Xin vui lòng kiểm tra lại thông tin.';
					}
				}
			}
        }
		//Thành viên sửa thông tin của mình
        public function hiendulieusuathongtinnguoidung($manguoidung){			
        	$this->data['hiendulieusuathongtinnguoidung']=$this->m_nguoidung->hiendulieulenformsua($manguoidung);
			$this->data['title']='Sửa thông tin của bạn ở website điện lạnh.';
        	$this->data['path']=array('nguoidung/v_thongtinnguoidung');
        	$this->load->view('layout',$this->data);
        }
        public function suathongtinnguoidung(){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('hoten','họ tên','trim|required|min_length[5]|max_length[50]');
        	$this->form_validation->set_rules('pass','password','trim|required|min_length[6]|max_length[20]');
        	$this->form_validation->set_rules('cmnd','CMND','trim|required');
        	$this->form_validation->set_rules('email','email','trim|required|valid_email');
        	if($this->form_validation->run()===false){
        		$manguoidung=$this->input->post('manguoidung');
        		$this->data['hiendulieusuathongtinnguoidung']=$this->m_nguoidung->hiendulieulenformsua($manguoidung);
	        	//$data['hiendulieusuathongtinnguoidung']->hoten;
				$this->data['title']='Sửa thông tin của bạn ở website điện lạnh.';
	        	$this->data['path']=array('nguoidung/v_thongtinnguoidung');
	        	$this->load->view('layout',$this->data);
        	}else{
        		$ketqua=$this->m_nguoidung->suathongtinnguoidung($this->input->post('hoten'),$this->input->post('manguoidung'),$this->input->post('pass'),$this->input->post('cmnd'),$this->input->post('gioitinh'),$this->input->post('ngaysinh'),$this->input->post('email'),$this->input->post('diachi'),$this->input->post('dienthoai'));
        		if($ketqua){
        			redirect('loaisp/layout_lietke');
        		}else{
        			$this->data['err']='Sửa không thành công. Xin kiểm tra lại thông tin.';
        		}
        	}
        }
		//Kết thúc thành viên sửa thông tin của mình
        public function ycdangnhap(){
            $data['title']='Đăng nhập vào hệ thống';
            $this->load->view('nguoidung/v_dangnhap',isset ($data) ?$data :NULL);
        }
        public function dangnhap(){
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('username','username','trim|required|min_length[5]|max_length[50]');
        	$this->form_validation->set_rules('password','password','trim|required');       	
        	if($this->form_validation->run()===false){
				$data['title']='Đăng nhập vào hệ thống';//////////////////////////////////////////Q.P sao cái này k ăn, vì k có html<title>
        		$data['path']=array('nguoidung/v_dangnhap');
        		$this->load->view('nguoidung/v_dangnhap');       	
        	}else{//đưa vào model username->lấy thông tin của họ, kiểm tra thông tin có khớp với pass nhập vô, đúng thì tạo session
        		$ketqua=$this->m_nguoidung->dangnhap($this->input->post('username'));
        		if($ketqua){
        			if($ketqua->pass==$this->input->post('password')){
        				
        				$tt_thanhvien=array(
        					'manguoidung'=>$ketqua->manguoidung,
        					'hoten'=>$ketqua->hoten,
        					'tendangnhap'=>$ketqua->tendangnhap,
        					'maquyen'=>$ketqua->maquyen
        				);
        				
        				$this->session->set_userdata($tt_thanhvien);        				
        				if($ketqua->maquyen==1){
        					redirect('loaisp/lietke');
        				}elseif($ketqua->maquyen==2){
        						redirect('hoadon/hienthicheckhd');
        					}else{
	        					redirect('loaisp/layout_lietke');
	        				}        				
        			}else{
						$data['title']='Đăng nhập';
        				$data['saimatkhau']='Sai mật khẩu. Vui lòng nhập lại';
        				$this->load->view('nguoidung/v_dangnhap');
        			}
        		}else{
					$data['title']='Đăng nhập';
        			$data['saitendn']='Tên đăng nhập không tồn tại';
        			$this->load->view('nguoidung/v_dangnhap',$data);
        		}
        	}
        }
       
		public function hienthiformquenmk(){
        	$data['title']='Quên mật khẩu';
        	$this->load->view('nguoidung/v_quenmatkhau',isset ($data) ?$data :NULL);
        }
        public function quenmatkhau(){        	
        	$code=$this->my_string->random(10,true);
        	$this->load->library('form_validation');
        	$this->form_validation->set_rules('email','email','trim|required|valid_email');
        	if($this->form_validation->run()===false){
        		$data['title']='Quên mật khẩu';
        		$this->load->view('nguoidung/v_quenmatkhau',isset ($data) ?$data :NULL);
        	}else{//Người dùng nhập email, kiểm tra xem email đó là của ai trong ht, đổi pass của họ        		
        		$ketquatim=$this->m_nguoidung->timnguoidung($this->input->post('email'));
        		if($ketquatim){
        			$config = Array(
        					'protocol' => 'smtp',
        					'smtp_host' => 'ssl://smtp.googlemail.com',
        					'smtp_port' => 465,
        					'smtp_user' => 'quynhphuong9693@gmail.com',
        					'smtp_pass' => '952973954',
        					'mailtype' => 'html',
        					'charset' => 'utf-8',
        					'wordwrap' => TRUE
        			);
        			
        			$message = 'Xin chào! Mật khẩu của bạn đã được đổi thành '.$code;
        			$this->load->library('email', $config);
        			$this->email->set_newline("\r\n");
        			$this->email->from('quynhphuong9693@gmail.com');
        			$this->email->to($this->input->post('email'));
        			$this->email->subject('Điện lạnh PP_Lấy lại passwork');
        			$this->email->message($message);
        			 
        			if($this->email->send())
        			{
        			
        				//echo 'Email sent.<br>';
						//echo $ketquatim->manguoidung;
        				$ketqua=$this->m_nguoidung->doipassword($ketquatim->manguoidung,$code);
        				if($ketqua){
        					//$data['path']=array('nguoidung/v_dangnhap');
        					$data['title']='Đăng nhập vào hệ thống';
        					$this->load->view('nguoidung/v_dangnhap',isset ($data) ?$data :NULL);
        				}else{
        					$data['saiemail']='Xảy ra lỗi. Vui lòng kiểm tra lại địa chỉ email của bạn.';//////////////
        					//$data['path']=array('nguoidung/v_quenmatkhau');
        					$this->load->view('nguoidung/v_quenmatkhau',isset ($data) ?$data :NULL);
        				}
        			}
        			else
        			{
        				$data['saiemail']='Vui lòng kiểm tra lại địa chỉ email.</br> Hoặc kết nối internet.';//////////////
        				$this->load->view('nguoidung/v_quenmatkhau',isset ($data) ?$data :NULL);
        				//show_error($this->email->print_debugger());
        				
        				//email k có trong cuộc đời này thì xử lý ở đâu?
        			}
        			
        		}else{
        			$data['saiemail']='Email của bạn không có trong hệ thống P&P.link hỗ trợ';//////////////
        			//$data['path']=array('nguoidung/v_quenmatkhau');
        			$this->load->view('nguoidung/v_quenmatkhau',isset ($data) ?$data :NULL);
        		}        		
        	}       	
        }    
		
        public function dangxuat(){
        	$this->session->sess_destroy();
        	redirect('nguoidung/ycdangnhap');
        }
    }
?>