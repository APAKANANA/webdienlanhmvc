<?php
class m_hoadon extends  CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function mlietkehd(){
		$kq=$this->db->get('hoadon');
		if($kq->num_rows()>0){
			return $kq->result();
		}
		else{
			return false;
		}
	}
	public function hienlinh($id)
	{
		$this->db->where('sohoadon',$id);
		return $data=$this->db->get('hoadon')->row();
		//$data=$this->db->select ('*') -> from ('khuvuc')->where(array('makhuvuc'=>$id))->get()->row_array();
	
	}
	public function suahd($id,$manhanvien)
	{
		$data=array('manhanvien'=>$manhanvien,'trangthai'=>1);
		$this->db->where('sohoadon',$id);
		$this->db->update('hoadon',$data);
		return 1;
	}
	public function themhd($makhachhang,$trigia)
	{
		$ngayhoadon=gmdate('Y-m-d H:i:s',time()+7*3600);
		$data=array('makhachhang' => $makhachhang,'trigia'=>$trigia,'ngayhoadon'=>$ngayhoadon,'trangthai'=>0);
		$this->db->insert('hoadon',$data);
		return 1;
	}
	public function laysohoadon()
	{
	$this->db->select('sohoadon');
	$this->db->limit(1);
	$this->db->order_by("sohoadon","DESC");
	$data=$this->db->get('hoadon')->row();
	return $data->sohoadon;
	}
	public function themcthd($sohoadon,$masanpham,$soluong)
	{
		$data=array('sohoadon'=>$sohoadon,'masanpham'=>$masanpham,'soluong'=>$soluong);
		$this->db->insert('cthd',$data);
		return 1;
	}
	
	public function xoahd($id)
	{
		$this->db->where('sohoadon',$id);
		$this->db->delete('hoadon');
		return 1;
		
	}
	public function hienthichitiet($id)
	{
		$this->db->where('sohoadon',$id);
		return $data=$this->db->get('cthd')->result();
	}
	public function hienthikhachhang($id)
	{
		$this->db->where('manguoidung',$id);
		return $data=$this->db->get('nguoidung')->result();
	}	
	public function hienthitensp()
	{
		return $data=$this->db->get('sanpham')->result();
	}	
	public function thongtinsanpham($masanpham){
		$this->db->where('masanpham',$masanpham);
            $kq=$this->db->get('sanpham');
            if($kq->num_rows()>0){
                return $kq->row();
            }
			return false;
	}
	public function doanhthu($tu,$den){
		//date('Y-m-d');
		$this->db->select_sum('trigia');
		$this->db->where('ngayhoadon >=',$tu);
		$this->db->where('ngayhoadon <=',$den);
		$this->db->where('trangthai',1);
		$kq=$this->db->get('hoadon');
		if($kq->num_rows()>0){
			return $kq->row();
		}
		else{
			return false;
		}
	}
	public function sanphambanchay(){
		//return $this->db->select(masanpham,count(*))->order_by(count(*),desc)->get('cthd')->result_array();
		
		$this->db->select('sanpham.masanpham, sanpham.tensanpham');
		$this->db->select_sum('soluong');
		
		
		$this->db->from('cthd');
		$this->db->join('sanpham', 'sanpham.masanpham = cthd.masanpham');
		
		$this->db->order_by('sum(soluong)', 'desc'); 
		$this->db->group_by('masanpham');
		$kq=$this->db->get();
		if($kq->num_rows()>0){
                return $kq->result();
            }
            else return false;
	}/*
	public function spbanchay_kh($limit, $start){
		$this->db->select('sanpham.masanpham, sanpham.tensanpham');
		$this->db->select_sum('soluong');
		
		
		$this->db->from('cthd');
		$this->db->join('sanpham', 'sanpham.masanpham = cthd.masanpham');
		$this->db->offset($start);
		$this->db->limit($limit);
		$this->db->order_by('sum(soluong)', 'desc'); 
		$this->db->group_by('masanpham');
		$kq=$this->db->get();
		if($kq->num_rows()>0){
                return $kq->result();
            }
            else return false;
	}*/
	public function khachangvip(){
		$this->db->select('makhachhang, hoten');
		$this->db->select_sum('trigia');
		$this->db->from('hoadon');
		$this->db->join('nguoidung', 'nguoidung.manguoidung = hoadon.makhachhang');
		$this->db->order_by('sum(trigia)','desc');
		$this->db->group_by('makhachhang');
		$kq=$this->db->get();
		if($kq->num_rows()>0){
                return $kq->result();
            }
            else return false;
	}
	  
		public function laynguoidung(){
			$this->db->where('maquyen',2);
			$kq=$this->db->get('nguoidung');
            if($kq->num_rows()>0){
                return $kq->result();
            }else{
                return false;
            }
		}
		public function doanhthuthungan($thungan, $ngay){
			$this->db->select_sum('trigia');
			$this->db->where('manhanvien',$thungan);
			$this->db->where('ngayhoadon',$ngay);
			$this->db->where('trangthai',1);
			$kq=$this->db->get('hoadon');
            if($kq->num_rows()>0){
				return $kq->row();
			}
			else{
				return false;
			}
		}
	
	//$this->db->select(masanpham,count(*))->order_by(count(*),desc)->get('cthd')->result_array();
	/*select masanpham, sum(soluong)
from cthd
group by masanpham
order by sum(soluong) desc

select makhachhang,sum(trigia)
from hoadon
group by makhachhang;


//

SELECT sum(trigia)
from hoadon
where ngayhoadon=2014/4/1 and trangthai=1 and manhanvien=5//thieu dau \' o ngay
*/
}