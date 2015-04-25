<?php
class Myhooks
{
    var $ci;
    public function start()
    {
        $uri=uri_string();
        $controller='';
        $method='';
        if($uri=='')
        {
            $controller="loaisp";
            $method="layout_lietke";
        }
        else
        {
            $mang=explode('/',$uri);
            if(count($mang)==1)
            {
                $controller=$mang[0];
                $method="layout_lietke";
            }
            else
            {
                $controller=$mang[0];
                $method=$mang[1];
            }
            
        }
        $this->ci=&get_instance();
        if($this->ci->session->userdata('maquyen'))
            $quyen=$this->ci->session->userdata('maquyen');
        else
            $quyen=0;
            
		if(!$this->phan_quyen($quyen,$controller,$method))
            redirect('trangchu/trangchu1');
          

    }
    public function phan_quyen($quyen,$route,$action)
    {
        $kq=false;
		//xem
		$role0=array('sanpham'=>array('layout_lietke','chitietsanpham','sanphammoi'),
                    'baiviet'=>array('layout_lkbaiviet','chitietbaivietmoi','chitietbaiviet','layout_lkbv'),
                    'nguoidung'=>array('ycdangnhap','dangnhap','hienthiformquenmk','quenmatkhau'),
					//'khuvuc'=>array(''),
					'loaisp'=>array('layout_lietke','timsanpham'),
					//'hoadon'=>array('themvaogiohang','xemgiohang','suagiohang','xoagiohang'),
					'trangchu'=>array('trangchu1','lienhe','tuvan')
					);
		//admin
        $role1=array('sanpham'=>array('lietke','hienformthem','themsanpham','hiendulieulenformsua','suasanpham','xoasanpham','layout_lietke','chitietsanpham','sanphammoi'),
                    'baiviet'=>array('lietkebv','loadtrangthem','thembv','hienthibaivietcansua','suabv','xoabv','layout_lkbaiviet','chitietbaivietmoi','chitietbaiviet','layout_lkbv'),
                    'nguoidung'=>array('lietke','hiendulieusuathongtinnguoidung','suathongtinnguoidung','themnguoidung','hiendulieulenformsua','suanguoidung','xoanguoidung','ycdangnhap','dangnhap','hienthiformquenmk','quenmatkhau','dangxuat'),
					'khuvuc'=>array('lietke','themkhuvuc','hiendulieulenformsua','suakhuvuc','xoakhuvuc'),
					'loaisp'=>array('lietke','themloaisp','hiendulieulenformsua','sualoaisp','xoaloaisp','layout_lietke','timsanpham'),
					'hoadon'=>array('lietkehd','xemchitiet','themvaogiohang','taohd','xemgiohang','suagiohang','xoagiohang','thongke','doanhthu','doanhthuthungan','sanphambanchay','khachangvip','xoatdgh'),
					'trangchu'=>array('trangchu1','lienhe','tuvan')
					);  
		//thu ngân
        $role2=array('sanpham'=>array('layout_lietke','chitietsanpham','sanphammoi'),
                    'baiviet'=>array('layout_lkbaiviet','chitietbaivietmoi','chitietbaiviet','layout_lkbv'),
                    'nguoidung'=>array('ycdangnhap','dangnhap','hienthiformquenmk','quenmatkhau','dangxuat','hiendulieusuathongtinnguoidung','suathongtinnguoidung'),
					//'khu_vuc'=>array(''),
					'loaisp'=>array('layout_lietke','timsanpham'),
					'hoadon'=>array('themvaogiohang','taohd','xemgiohang','suagiohang','xoagiohang','hienthicheckhd','suahd'),
					'trangchu'=>array('trangchu1','lienhe','tuvan')
					);
		//khách hàng
		$role3=array('sanpham'=>array('layout_lietke','chitietsanpham','sanphammoi'),
                    'baiviet'=>array('layout_lkbaiviet','chitietbaivietmoi','chitietbaiviet','layout_lkbv'),
                    'nguoidung'=>array('ycdangnhap','dangnhap','hienthiformquenmk','quenmatkhau','dangxuat','hiendulieusuathongtinnguoidung','suathongtinnguoidung'),
					//'khu_vuc'=>array(''),
					'loaisp'=>array('layout_lietke','timsanpham'),
					'hoadon'=>array('themvaogiohang','taohd','xemgiohang','suagiohang','xoagiohang'),
					'trangchu'=>array('trangchu1','lienhe','tuvan')
					);
        if($quyen==0)
        {
            foreach($role0 as $controller=>$mang_pt)
            {
                if($route==$controller)
                {
                    if(array_search($action,$mang_pt)!==false)
                        {
                            $kq=true;
                        }
                    break;
                }
                
            }
        }
        
        if($quyen==1)
        {
            foreach($role1 as $controller=>$mang_pt)
            {
                if($route==$controller)
                {
                    if(array_search($action,$mang_pt)!==false)
                        {
                            $kq=true;
                        }
                    break;
                }
                
            }
        }
        
        if($quyen==2)
        {
            foreach($role2 as $controller=>$mang_pt)
            {
                if($route==$controller)
                {
                    if(array_search($action,$mang_pt)!==false)
                        {
                            $kq=true;
                        }
                    break;
                }
                
            }
        }
		
		if($quyen==3)
        {
            foreach($role3 as $controller=>$mang_pt)
            {
                if($route==$controller)
                {
                    if(array_search($action,$mang_pt)!==false)
                        {
                            $kq=true;
                        }
                    break;
                }
                
            }
        }
        return $kq;
        
        
    }
}
?>