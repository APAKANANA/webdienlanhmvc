<?php
    class M_Loaisp extends  CI_Model{
        public function __construct(){
                parent::__construct();
        }
        public function laytongsodong(){
        	return $this->db->count_all('loaisanpham');
        }
        public function lietke(){
            $kq=$this->db->get('loaisanpham');
            if($kq->num_rows()>0){
                return $kq->result();
            }
            else{
                return false;
            }
        }
        
        public function themloaisp($tenloai){
            $data['tenloai']=$tenloai;
            return $this->db->insert('loaisanpham',$data);
        }
        
        public function hiendulieulenformsua($maloai){
            $this->db->where('maloai',$maloai);
            $kq=$this->db->get('loaisanpham');
            if($kq->num_rows()>0){
                return $kq->row_array();
            }else return false;
        }
        public function sualoaisp($maloai,$tenloai){
            $data['tenloai']=$tenloai;
            $this->db->where('maloai',$maloai);
            return $this->db->update('loaisanpham',$data);            
        }
        public function xoaloaisp($maloai){
            return $this->db->delete('loaisanpham',array('maloai'=>$maloai));  
        }
		public function laysp(){
			$kq=$this->db->get('sanpham');
            if($kq->num_rows()>0){
                return $kq->result();
            }
            else{
                return false;
            }
		}
		public function laysptc(){
			$this->db->limit(6);
			$kq=$this->db->get('sanpham');
            if($kq->num_rows()>0){
                return $kq->result();
            }
            else{
                return false;
            }
		}
		
		public function dem_sp_thuoc_loai($maloai){
			$this->db->where('maloai',$maloai);
			$kq= $this->db->get('sanpham');
			return $kq->num_rows();
		}
		public function lietke_layout($limit,$start){
			$this->db->limit($limit);
			$this->db->offset($start);
			$kq=$this->db->get('loaisanpham');
			if($kq->num_rows()>0){
				return $kq->result();
			}
			else{
				return false;
			}
		}
		public function timkiemsp($limit,$start,$text){
			$this->db->limit($limit);
			$this->db->offset($start);
			$kq=$this->db->like('tensanpham',$text)->get('sanpham');
			if($kq->num_rows()>0){
				return $kq->result();
			}
			else{
				return false;
			}
		}
    }
?>