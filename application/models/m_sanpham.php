<?php
    class M_sanpham extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function laytongsodong(){
        	return $this->db->count_all('sanpham');
        }
        public function laytongsodongtheoloai($maloai){
        	$this->db->where('maloai',$maloai);
        	$kq= $this->db->get('sanpham');
        	return $kq->num_rows();
        }
        public function lietke($limit,$start){
        	$this->db->limit($limit);
        	$this->db->offset($start);
            $kq=$this->db->get('sanpham');
            if($kq->num_rows()>0){
                return $kq->result();
            }
            else return false;
        }
        public function layloaisp(){
            $kq=$this->db->get('loaisanpham');
            if($kq->num_rows()>0){
                return $kq->result();
            }else return false;
        }
        public function themsanpham($tensanpham,$hinhanh,$mota,$congsuat,$kichthuoc,$diennangtieuthu,$gia,$sothangbaohanh,$nuocsx,$hang,$maloai){
            $data['tensanpham']=$tensanpham;
            $data['hinhanh']=$hinhanh;
            $data['mota']=$mota;
            $data['congsuat']=$congsuat;
            $data['kichthuoc']=$kichthuoc;
            $data['diennangtieuthu']=$diennangtieuthu;
            $data['gia']=$gia;
            $data['sothangbaohanh']=$sothangbaohanh;
            $data['luotxem']=0;
            $data['nuocsx']=$nuocsx;
            $data['hang']=$hang;
            $data['maloai']=$maloai;
            return $this->db->insert('sanpham',$data);
        }
        public function hiendulieulenformsua($masanpham){
            $this->db->where('masanpham',$masanpham);
            $kq=$this->db->get('sanpham');
            if($kq->num_rows()>0){
                return $kq->row();
            }
			return false;
        }        
        public function suasanpham($masanpham,$tensanpham,$hinhanh,$mota,$congsuat,$kichthuoc,$diennangtieuthu,$gia,$sothangbaohanh,$nuocsx,$hang,$maloai,$xoahinhkhong){
            $data['tensanpham']=$tensanpham;
            $data['mota']=$mota;
            $data['congsuat']=$congsuat;
            $data['kichthuoc']=$kichthuoc;
            $data['diennangtieuthu']=$diennangtieuthu;
            $data['gia']=$gia;
            $data['sothangbaohanh']=$sothangbaohanh;
            $data['luotxem']=0;
            $data['nuocsx']=$nuocsx;
            $data['hang']=$hang;
            $data['maloai']=$maloai;
            
            if($xoahinhkhong==1){
            	$data['hinhanh']=$hinhanh;
            	$sanpham=$this->db->get('sanpham');
            	if($sanpham->num_rows()>0){
            		$sanpham=$sanpham->row();
            		$hinhcu=$sanpham->hinhanh;
            		unlink('public/hinh/hinhsanpham/'.$hinhcu);
            		$this->db->where('masanpham',$masanpham);
            		return $this->db->update('sanpham',$data);
            	}
            	
            }else{
            	$this->db->where('masanpham',$masanpham);
            	return $this->db->update('sanpham',$data);
            }
        }
        public function xoasanpham($masanpham){
        	$this->db->where('masanpham',$masanpham);
        	$sanpham=$this->db->get('sanpham');
        	if($sanpham->num_rows()>0){
        		$sanpham=$sanpham->row();
        		$hinhanh=$sanpham->hinhanh;
        		unlink('public/hinh/hinhsanpham/'.$hinhanh);
        		//echo delete_files('public/hinh/hinhsanpham/');//delete này chỉ xóa mọi thứ trong folder thôi
        		return $this->db->delete('sanpham',array('masanpham'=>$masanpham));
        	}
        }
		
        public function layout_lietke($maloai,$limit,$start){ 
			//$query = $this->db->get('mytable', 10, 20);       	
        	
        	//$this->db->offset($start);
			//$this->db->limit($limit);
			$this->db->where('maloai',$maloai);
        	$kq=$this->db->get('sanpham',$limit,$start);
        	//select * from sanpham where maloai=5 limit 1, 6
        	//return $kq->num_rows();
        	
        	if($kq->num_rows()>0){
        		return $kq->result();
        	}
        	return false;
        }
        public function sanpham_trong_hoadon($masanpham){
        	$this->db->where('masanpham',$masanpham);
        	$kq= $this->db->get('cthd');
        	return $kq->num_rows();
        }
		public function sanphammoi($limit,$start){
			$this->db->order_by('masanpham','desc');
            $kq=$this->db->get('sanpham',$limit,$start);
            if($kq->num_rows()>0){
                return $kq->result();
            }
            else return false;
        }
    }
?>