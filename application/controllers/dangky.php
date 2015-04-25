
<?php
class dangky extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_nguoidung');
		
	}
	public function dk()
	{
		$data['path']=array('/nguoidung/v_dangky');
		$this->load->view("layout",$data);
	}
	function ckecked()
	{
		if($this->input->post('checked')==true)return true;
		else{
		$this->form_validation->set_message('ckecked', '%s Check vào ô trên để đồng ý trở thành thành viên');
		return false;
		}
	}
	public function thuchiendk()
	{
		

		$this->form_validation->set_rules('hoten','họ tên','required|min_length[6]|max_length[50]');
		$this->form_validation->set_rules('taikhoan','tên tài khoản','required');
		$this->form_validation->set_rules('matkhau1','mật khẩu 1','required');
		$this->form_validation->set_rules('matkhau2','mật khẩu 2','required|matches[matkhau1]');
		$this->form_validation->set_rules('socmnd', 'Số cmnd', 'required|is_numeric');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[nguoidung.email]');
		$this->form_validation->set_rules('sodienthoai', 'Số điện thoại', 'required|is_numeric');
		$this->form_validation->set_rules('ckecked', 'Bạn', 'callback_ckecked');
																								
		
			$this->form_validation->set_message('is_numeric','%s phải là số');
            $this->form_validation->set_message('is_unique','%s da ton tai');
            $this->form_validation->set_message('required','Xin vui nhập %s');
            $this->form_validation->set_message('min_length','%s Phải có ít nhất %s kí tự');
            $this->form_validation->set_message('max_length','%s không được vượt quá %s ký tự');
			$this->form_validation->set_message('matches','%s không khớp');
			
		if($this->form_validation->run()==false)
		{
               $data['path']=array('/nguoidung/v_dangky');
                $this->load->view('layout',$data);
				}else{
                $ketqua=$this->m_nguoidung->dangky($this->input->post('hoten'),$this->input->post('taikhoan'),$this->input->post('matkhau1'),$this->input->post('socmnd'),$this->input->post('gioitinh'),$this->input->post('ngaysinh'),$this->input->post('email'),$this->input->post('diachi'),$this->input->post('sodienthoai'),'3');
                if($ketqua){
				$this->load->view('nguoidung/v_dangnhap');
                 
                }else{
                    $this->data['err']='đăng ký không thành công';
                }
		}
		
	}
}
?>