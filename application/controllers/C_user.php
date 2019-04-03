<?php  
class C_user extends CI_Controller {
	function __construct(){  
		parent::__construct();  
		$this->load->model('M_pertanyaan');
		$this->load->model('M_konsultasi');
		$this->load->model('M_saran');
		//******** DEFAULT SESSION ********* 
		if($this->session->userdata('level') != "2") {  
			redirect(base_url('C_login'));  
		}
		
	}

	public function index() {
		$this->load->view('user/dashboard');
	}

	public function konsultasi() {
		$data['soal1'] = $this->M_pertanyaan->soal1();
		$data['soal2'] = $this->M_pertanyaan->soal2();
		$data['soal3'] = $this->M_pertanyaan->soal3();
		$data['soal4'] = $this->M_pertanyaan->soal4();
		$data['soal5'] = $this->M_pertanyaan->soal5();
		$data['soal6'] = $this->M_pertanyaan->soal6();
		$data['soal7'] = $this->M_pertanyaan->soal7();
		$data['soal8'] = $this->M_pertanyaan->soal8();
		$data['soal9'] = $this->M_pertanyaan->soal9();
		$data['soal10'] = $this->M_pertanyaan->soal10();
		$data['soal11'] = $this->M_pertanyaan->soal11();
		$data['soal12'] = $this->M_pertanyaan->soal12();
		$data['soal13'] = $this->M_pertanyaan->soal13();
		$data['soal14'] = $this->M_pertanyaan->soal14();
		$data['soal15'] = $this->M_pertanyaan->soal15();
		$data['soal16'] = $this->M_pertanyaan->soal16();
		$data['soal17'] = $this->M_pertanyaan->soal17();
		$data['soal18'] = $this->M_pertanyaan->soal18();
		$data['soal19'] = $this->M_pertanyaan->soal19();
		$data['soal20'] = $this->M_pertanyaan->soal20();
		$this->load->view('user/konsultasi', $data);
	}

	public function hasilKonsul() {
		$nik = $this->session->userdata('nik');
		$data1 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal1'),
			'nilai'	=>	$this->input->post('s1')
			);
		$this->db->insert('konsultasi',$data1);
		$data2 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal2'),
			'nilai'	=>	$this->input->post('s2')
			);
		$this->db->insert('konsultasi',$data2);
		$data3 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal3'),
			'nilai'	=>	$this->input->post('s3')
			);
		$this->db->insert('konsultasi',$data3);
		$data4 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal4'),
			'nilai'	=>	$this->input->post('s4')
			);
		$this->db->insert('konsultasi',$data4);
		$data5 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal5'),
			'nilai'	=>	$this->input->post('s5')
			);
		$this->db->insert('konsultasi',$data5);
		$data6 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal6'),
			'nilai'	=>	$this->input->post('s6')
			);
		$this->db->insert('konsultasi',$data6);
		$data7 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal7'),
			'nilai'	=>	$this->input->post('s7')
			);
		$this->db->insert('konsultasi',$data7);
		$data8 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal8'),
			'nilai'	=>	$this->input->post('s8')
			);
		$this->db->insert('konsultasi',$data8);
		$data9 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal9'),
			'nilai'	=>	$this->input->post('s9')
			);
		$this->db->insert('konsultasi',$data9);
		$data10 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal10'),
			'nilai'	=>	$this->input->post('s10')
			);
		$this->db->insert('konsultasi',$data10);
		$data11 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal11'),
			'nilai'	=>	$this->input->post('s11')
			);
		$this->db->insert('konsultasi',$data11);
		$data12 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal12'),
			'nilai'	=>	$this->input->post('s12')
			);
		$this->db->insert('konsultasi',$data12);
		$data13 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal13'),
			'nilai'	=>	$this->input->post('s13')
			);
		$this->db->insert('konsultasi',$data13);
		$data14 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal14'),
			'nilai'	=>	$this->input->post('s14')
			);
		$this->db->insert('konsultasi',$data14);
		$data15 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal15'),
			'nilai'	=>	$this->input->post('s15')
			);
		$this->db->insert('konsultasi',$data15);
		$data16 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal16'),
			'nilai'	=>	$this->input->post('s16')
			);
		$this->db->insert('konsultasi',$data16);
		$data17 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal17'),
			'nilai'	=>	$this->input->post('s17')
			);
		$this->db->insert('konsultasi',$data17);
		$data18 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal18'),
			'nilai'	=>	$this->input->post('s18')
			);
		$this->db->insert('konsultasi',$data18);
		$data19 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal19'),
			'nilai'	=>	$this->input->post('s19')
			);
		$this->db->insert('konsultasi',$data19);
		$data20 = array(
			'kode'	=> $this->input->post(''),
			'nik'	=>	$nik,
			'nosoal'=>	$this->input->post('nosoal20'),
			'nilai'	=>	$this->input->post('s20')
			);
		$this->db->insert('konsultasi',$data20);

		$a = $this->M_konsultasi->jumlahA($nik);
		$k = $this->M_konsultasi->jumlahK($nik);
		$v = $this->M_konsultasi->jumlahV($nik);

		$data['persenA'] = $a / 20 * 100;
		$data['persenK'] = $k / 20 * 100;
		$data['persenV'] = $v / 20 * 100;

		if ($a > $k && $a > $v) {
			$data['saran'] = $this->M_saran->getSaranA();
		} else if ($k > $a && $k > $v) {
			$data['saran'] = $this->M_saran->getSaranK();
		} else if ($v > $k && $v > $a) {
			$data['saran'] = $this->M_saran->getSaranV();
		}
		$this->load->view('user/hasilKonsul', $data);
	}

}

?>