<?php
class chitiethoadon extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_cthoadon');
	}
	public function lietkecthd()
	{
		$data['title']='Liệt kê chi tiết hóa đơn';
		$data['dscthoadon']=$this->m_cthoadon->mlietkecthd();
		$data['path']=array('chitiethoadon/v_lietkecthd');
		$this->load->view("layout_admin",$data);
	}
	
}
?>