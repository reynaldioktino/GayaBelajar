<?php  
class C_admin extends CI_Controller {
	function __construct(){  
		parent::__construct();  
		//******** DEFAULT SESSION ********* 
		if($this->session->userdata('level') != "1") {  
			redirect(base_url('C_login'));  
		}
		
	}

	public function index() {
		$this->load->view('admin/dashboard');
	}

	public function pertanyaan() {
		$this->load->view('admin/pertanyaan');
	}

	public function saran() {
		$this->load->view('admin/saran');
	}

}

?>