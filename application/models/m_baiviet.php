<?php
class m_baiviet extends  CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function mlietkebv($number,$offset){
		$kq=$this->db->get('baiviet',$number,$offset);
		if($kq->num_rows()>0){
			return $kq->result();
		}
		else{
			return false;
		}
	}
	public function lietkebvcansua()
	{
	$kq=$this->db->get('baiviet');
		if($kq->num_rows()>0){
			return $kq->result();
		}
		else{
			return false;
		}
	}
	public function count_all()
	{
		return $this->db->count_all('baiviet');
	}
	public function mthembv($tenbv,$mota,$hinh,$noidung,$ngaycapnhat,$maloai)
	
	{
		$data['tenbaiviet']=$tenbv;
		$data['mota']=$mota;
		$data['hinhanh']=$hinh;
		$data['noidung']=$noidung;
		$data['ngaycapnhat']=$ngaycapnhat;
		$data['maloai']=$maloai;
		return $this->db->insert('baiviet',$data);
	}
	
	public function hienlinh($id)
	{
		$this->db->where('mabaiviet',$id);
		return $data=$this->db->get('baiviet')->row();
		//$data=$this->db->select ('*') -> from ('khuvuc')->where(array('makhuvuc'=>$id))->get()->row_array();
	
	}
	
	public function suabv($id,$tenbv,$mota,$hinh,$noidung,$ngaycapnhat,$maloai)
	{
		$data=array('tenbaiviet' => $tenbv,'mota'=>$mota,'hinhanh'=>$hinh,'noidung'=>$noidung,'ngaycapnhat'=>$ngaycapnhat,'maloai'=>$maloai);
		$this->db->where('mabaiviet',$id);
		$this->db->update('baiviet',$data);
		return $data;
	}
	public function mxoabv($id)
	{
		$this->db->where('mabaiviet',$id);
		$this->db->delete('baiviet');
		return 1;
	}
	
	
	public function laybaivietmoi()
	{
		$this->db->select('mabaiviet,tenbaiviet,mota,hinhanh,noidung');
		$this->db->limit('1');
		$this->db->order_by("mabaiviet","DESC");
		$kq=$this->db->get('baiviet');
		if($kq->num_rows()>0){
			return $kq->row();
		}
		else{
			return false;
		}
		
	}
	
	public function laybaivietlk($mabaiviet,$limit,$start)
	{
		//$kq=$this->db->query("select * from baiviet where mabaiviet not in (select mabaiviet from baiviet where mabaiviet=$ma)");
		//$this->db->order_by("mabaiviet","DESC");
		//$kq=$this->db->get('baiviet',$number,$offset);
		/*SELECT * 
from baiviet
where mabaiviet!=10
limit 6
offset 4;*/
		$this->db->offset($start);
		$this->db->limit($limit);
		$this->db->where('mabaiviet !=',$mabaiviet);
		$kq=$this->db->get('baiviet');
		if($kq->num_rows()>0){
			return $kq->result();
		}
		else{
			return false;
		}
	}
	public function laybaiviettc($limit,$start)
	{
		$this->db->offset($start);
		$this->db->limit($limit);
		$kq=$this->db->get('baiviet');
		if($kq->num_rows()>0){
			return $kq->result();
		}
		else{
			return false;
		}
	}
	
	public function mchitietbaivietmoi($mabaiviet)
	{
		$this->db->where('mabaiviet',$mabaiviet);
	$kq=$this->db->get('baiviet');
	if($kq->num_rows()>0){
			return $kq->result();
		}
		else{
			return false;
		}
	}
	public function mchitietbaiviet($mabaiviet)
	{
	$this->db->where('mabaiviet',$mabaiviet);
	$kq=$this->db->get('baiviet');
	if($kq->num_rows()>0){
			return $kq->result();
		}
		else{
			return false;
		}
	}
	public function lietketheoloaisp($masp){
	
		$this->db->where('maloai',$masp);
		$kq=$this->db->get('baiviet');
		if($kq->num_rows()>0){
				return $kq->result();
			}
			else{
				return false;
			}
		}
}
?>