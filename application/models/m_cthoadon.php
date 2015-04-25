<?php
class m_cthoadon extends  CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function mlietkecthd(){
		$kq=$this->db->get('cthd');
		if($kq->num_rows()>0){
			return $kq->result();
		}
		else{
			return false;
		}
	}
	
}
	?>