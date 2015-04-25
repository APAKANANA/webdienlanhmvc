<?php
	class MY_Controller extends CI_Controller{
		protected $data;
		public function __construct(){
			parent::__construct();
			$this->load->model('m_loaisp');
			$this->load->model('m_khuvuc');
			$this->data['ds_loaisp']=$this->m_loaisp->lietke();
			$this->data['ds_khuvuc']=$this->m_khuvuc->lietke();
		}
		
	}
?>