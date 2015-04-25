<?php
    class M_Nguoidung extends CI_Model{
        public function __construct(){
            parent::__construct();            
        }
        public function laytongsodong(){
        	return $this->db->count_all('nguoidung');
        }
        public function layphanquyen(){
            $kq=$this->db->get('phanquyen');
            if($kq->num_rows()>0){
                return $kq->result();
            }else{
                return false;
            }
        }
        public function lietke($limit,$start){
        	$this->db->limit($limit);
        	$this->db->offset($start);
            $kq=$this->db->get('nguoidung');
            if($kq->num_rows()>0){
                return $kq->result();
            }else{
                return false;
            }
        }
		public function dangky($hoten,$tendangnhap,$pass,$cmnd,$gioitinh,$ngaysinh,$email,$diachi,$dienthoai,$maquyen){
        	$data['hoten']=$hoten;
        	$data['tendangnhap']=$tendangnhap;
            $data['pass']=$pass;            
            $data['cmnd']=$cmnd;
            $data['gioitinh']=$gioitinh;
            $data['ngaysinh']=$ngaysinh;
            $data['email']=$email;
            $data['diachi']=$diachi;
            $data['dienthoai']=$dienthoai;
            $data['maquyen']=$maquyen;
            return $this->db->insert('nguoidung',$data);
        }
        public function themnguoidung($hoten,$tendangnhap,$pass,$cmnd,$gioitinh,$ngaysinh,$email,$diachi,$dienthoai){
        	$data['hoten']=$hoten;
        	$data['tendangnhap']=$tendangnhap;
            $data['pass']=$pass;            
            $data['cmnd']=$cmnd;
            $data['gioitinh']=$gioitinh;
            $data['ngaysinh']=$ngaysinh;
            $data['email']=$email;
            $data['diachi']=$diachi;
            $data['dienthoai']=$dienthoai;
            $data['maquyen']=2;
            return $this->db->insert('nguoidung',$data);
        }
        public function hiendulieulenformsua($manguoidung){
            $this->db->where('manguoidung',$manguoidung);
            $kq=$this->db->get('nguoidung');
            if($kq->num_rows()>0){
                return $kq->row();
            }else{
                return false;
            }
        }
        public function suanguoidung($hoten,$manguoidung,$tendangnhap,$pass,$cmnd,$gioitinh,$ngaysinh,$email,$diachi,$dienthoai){
        	$data['hoten']=$hoten;
        	$data['tendangnhap']=$tendangnhap;
            $data['pass']=$pass;            
            $data['cmnd']=$cmnd;
            $data['gioitinh']=$gioitinh;
            $data['ngaysinh']=$ngaysinh;
            $data['email']=$email;
            $data['diachi']=$diachi;
            $data['dienthoai']=$dienthoai;
            $data['maquyen']=2;
            $this->db->where('manguoidung',$manguoidung);
            return $this->db->update('nguoidung',$data);
        }
        public function xoanguoidung($manguoidung){
            return $this->db->delete('nguoidung',array('manguoidung'=>$manguoidung));
        }
        public function dangnhap($username){
        	$this->db->where('tendangnhap',$username);
        	$kq=$this->db->get('nguoidung');
        	if($kq->num_rows()>0){
        		return $kq->row();
        	}else return false;
        }
        public function timnguoidung($email){
        	$this->db->where('email',$email);
        	$kq=$this->db->get('nguoidung');
        	if($kq->num_rows()>0){
        		return $kq->row();
        	}else return false;
        }
        public function doipassword($manguoidung,$pass){
        	$data['pass']=$pass;
        	$this->db->where('manguoidung',$manguoidung);
        	return $this->db->update('nguoidung',$data);
        }
        public function suathongtinnguoidung($hoten,$manguoidung,$pass,$cmnd,$gioitinh,$ngaysinh,$email,$diachi,$dienthoai){
        	$data['hoten']=$hoten;
        	$data['pass']=$pass;
        	$data['cmnd']=$cmnd;
        	$data['gioitinh']=$gioitinh;
        	$data['ngaysinh']=$ngaysinh;
        	$data['email']=$email;
        	$data['diachi']=$diachi;
        	$data['dienthoai']=$dienthoai;
        	$this->db->where('manguoidung',$manguoidung);
        	return $this->db->update('nguoidung',$data);
        }   
		public function kiemtra_la_admin($manguoidung){
        	$this->db->where('manguoidung',$manguoidung);
			$this->db->where('maquyen',1);
        	$kq= $this->db->get('nguoidung');
        	return $kq->num_rows();
        }
        public function dem_nd_trong_hd($manguoidung){
        	$this->db->where('makhachhang',$manguoidung);
        	$this->db->or_where('manhanvien',$manguoidung);
        	$kq= $this->db->get('hoadon');
        	return $kq->num_rows();
        }
    }
?>