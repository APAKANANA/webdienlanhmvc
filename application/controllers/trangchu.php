 <?php 
 class trangchu extends MY_Controller
 {
 	public function __construct(){
 		parent::__construct();
		$this->load->model('m_loaisp');
		$this->load->model('m_baiviet');
 	}
	 public function trangchu1()
	 {
		
		$this->data['loaisanpham']=$this->m_loaisp->lietke();
		$this->data['dssanpham_layhinh']= $this->m_loaisp->laysptc();
		$this->data['laybaiviettc']=$this->m_baiviet->laybaiviettc(3,1);
		$this->data['path']=array('noidungcontent/v_trangchu');
		$this->load->view('layout',$this->data);	 
	 }
	 public function lienhe()
	 {
		$this->data['path']=array('noidungcontent/v_lienhe');
		$this->load->view('layout',$this->data); 
	 }
	 public function tuvan()
	 {
		$this->data['path']=array('noidungcontent/v_tuvan');
		$this->load->view('layout',$this->data);  
	 }
 }
 ?>