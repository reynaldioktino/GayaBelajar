<?php  
class C_login extends CI_Controller {
	function __construct(){  
		parent::__construct();  
		$this->load->model('M_login');
		//******** DEFAULT SESSION ********* 
		
	}

	public function index() {
		if($this->session->userdata('level') == "1") {  
			redirect(base_url('C_admin'));  
		} else if ($this->session->userdata('level') == "2") {
			redirect(base_url('C_user')); 
		}
		$this->load->view('login');
	}

	public function prosesLogin() {
		$nik = $this->input->post('nik');
		$password = $this->input->post('password');
		$cek = $this->M_login->cekLogin($nik, $password);
		if ($cek > 0) {
			$data_session = array(
				'nik' => $cek->nik,
				'password' => $cek->password,
				'level' => $cek->level
			);
			$this->session->set_userdata($data_session);
			if($this->session->userdata('level')==1) {
				redirect('C_admin');
			}elseif($this->session->userdata('level')==2) {
				redirect('C_user');
			}
		} else {
			$this->session->set_flashdata('info','nik atau password salah');
			redirect('C_login');
		}

	}

	public function daftar() {
		if($this->session->userdata('level') == "1") {  
			redirect(base_url('C_admin'));  
		} else if ($this->session->userdata('level') == "2") {
			redirect(base_url('C_user')); 
		}
		$this->load->view('user/register');
	}

	public function prosesDaftar() {
		$data = array(
			'nik'	=>	$this->input->post('nik'),
			'password'	=>	$this->input->post('password'),
			'level'	=>	'2'
			);
			$this->db->insert('akun',$data);
			redirect('C_login');
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('C_login');
	}
}

?>