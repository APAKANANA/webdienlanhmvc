<?php
    class M_Khuvuc extends  CI_Model{
        public function __construct(){
                parent::__construct();
        }
        public function lietke(){
            $kq=$this->db->get('khuvuc');
            if($kq->num_rows()>0){
                return $kq->result();
            }
            else{
                return false;
            }
        }
        
        public function themkhuvuc($tenkhuvuc){
            $data['tenkhuvuc']=$tenkhuvuc;
            return $this->db->insert('khuvuc',$data);
        }
        
        public function hiendulieulenformsua($makhuvuc){
            $this->db->where('makhuvuc',$makhuvuc);
            $kq=$this->db->get('khuvuc');
            if($kq->num_rows()>0){
                return $kq->row_array();
            }else return false;
        }
        public function suakhuvuc($makhuvuc,$tenkhuvuc){
            $data['tenkhuvuc']=$tenkhuvuc;
            $this->db->where('makhuvuc',$makhuvuc);
            return $this->db->update('khuvuc',$data);            
        }
        public function xoakhuvuc($makhuvuc){
            return $this->db->delete('khuvuc',array('makhuvuc'=>$makhuvuc));  
        }
    }
?>