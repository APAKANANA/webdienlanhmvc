<?php
    class Khuvuc extends MY_Controller{
        public function __construct(){
            parent::__construct();
            //$this->load->model('m_khuvuc');
        }
        public function lietke(){
            $data['dskhuvuc']=$this->m_khuvuc->lietke();
            $data['path']=array('khuvuc/v_them','khuvuc/v_lietke');            
            $this->load->view('layout_admin',$data);
        }
        public function themkhuvuc(){
          //  $this->load->helper('form');
            $this->load->library('form_validation');
            $this->form_validation->set_rules('tenkhuvuc','tên khu vực','required|min_length[5]|max_length[50]|is_unique[khuvuc.tenkhuvuc]');
            if($this->form_validation->run()===false){
            	$data['dskhuvuc']=$this->m_khuvuc->lietke();
            	$data['path']=array('khuvuc/v_them','khuvuc/v_lietke');
            	$this->load->view('layout_admin',$data);
            }else{
                $ketqua=$this->m_khuvuc->themkhuvuc($this->input->post('tenkhuvuc'));
                if($ketqua){
                	redirect('khuvuc/lietke');
                }else{
                	$this->data['err']='Thêm không thành công. Xin kiểm tra lại thông tin.';
                }
            }            
        }
        public function hiendulieulenformsua($makhuvuc){
            $data['hiendulieudesua']=$this->m_khuvuc->hiendulieulenformsua($makhuvuc);
            $data['dskhuvuc']=$this->m_khuvuc->lietke();
            $data['path']=array('khuvuc/v_sua','khuvuc/v_lietke');
            $this->load->view('layout_admin',$data);
        }
        public function suakhuvuc(){
            $this->load->library('form_validation');
            $this->form_validation->set_rules('tenkhuvuc','tên khu vực','required|min_length[5]|max_length[50]');
            
            if($this->form_validation->run()===false){
            	$makhuvuc=$this->input->post('makhuvuc');
            	$data['hiendulieudesua']=$this->m_khuvuc->hiendulieulenformsua($makhuvuc);
            	$data['dskhuvuc']=$this->m_khuvuc->lietke();
            	$data['path']=array('khuvuc/v_sua','khuvuc/v_lietke');
            	$this->load->view('layout_admin',$data);
            }else{
                $ketqua=$this->m_khuvuc->suakhuvuc($this->input->post('makhuvuc'),$this->input->post('tenkhuvuc'));
                if($ketqua){
                	redirect('khuvuc/lietke');
                }else{
                	$this->data['err']='Sửa không thành công. Xin kiểm tra lại thông tin.';
                }
            }
        }
        public function xoakhuvuc($makhuvuc){
            $ketqua=$this->m_khuvuc->xoakhuvuc($makhuvuc);
            if($ketqua){
                redirect('khuvuc/lietke');
            }else{
                $this->data['err']='Xóa không thành công. Xin vui lòng thử lại.';
            }
        }
    }
?>