<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['title'] = "Home";

		$this->load->view('user/header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('user/footer');
	}

	// =========================================================================

	public function berita()
	{
		# code...
		$data['title'] = "Berita";
		$data['berita'] = $this->user_model->getAllBerita();

		$this->load->view('user/header', $data);
		$this->load->view('user/berita', $data);
		$this->load->view('user/footer');
	}

	public function detail_berita($id)
	{
		# code...
		$data['title'] = "Detail";
		$data['berita'] = $this->user_model->getBeritaById($id);

		$this->load->view('user/header', $data);
		$this->load->view('user/detail_berita');
		$this->load->view('user/footer');
	}

	// =========================================================================

	public function artikel()
	{
		# code...
		$data['title'] = "Artikel";

		$semua = "all";
		$tips = "1";
		$mm = "2";
		$p = "4";
		$w = "5";

		if (isset($_POST['kategori']) && ! empty($_POST['kategori'])) {
			$kategori = $_POST['kategori'];

			if ($kategori == 'tips') {
				# code...
				$ket = "Kategori yang dipilih : Tips";
				$tampilKategori = $this->user_model->getKategori($tips);
			}
			else if ($kategori == 'makanan & minuman') {
				# code...
				$ket = "Kategori yang dipilih : Makanan & Minuman";
				$tampilKategori = $this->user_model->getKategori($mm);
			}
			else if ($kategori == 'pria') {
				# code...
				$ket = "Kategori yang dipilih : Pria";
				$tampilKategori = $this->user_model->getKategori($p);
			}
			else if ($kategori == 'wanita') {
				# code...
				$ket = "Kategori yang dipilih : Wanita";
				$tampilKategori = $this->user_model->getKategori($w);
			}
			else if ($kategori== 'all') {
				# code...
				$ket = "Tampilkan Semua Artikel";
				$tampilKategori = $this->user_model->getAllArtikel();
			}
		}
		else {
			$ket="";
			$tampilKategori = $this->user_model->getAllArtikel();
		}

		$data['ket'] = $ket;
		$data['data'] = $tampilKategori;

		$this->load->view('user/header', $data);
		$this->load->view('user/artikel', $data);
		$this->load->view('user/footer');
	}

	public function detail_artikel($id)
	{
		# code...
		$data['title'] = "Detail";
		$data['artikel'] = $this->user_model->getArtikelById($id);

		$this->load->view('user/header', $data);
		$this->load->view('user/detail_artikel', $data);
		$this->load->view('user/footer');
	}

	// =========================================================================

	public function donasi()
	{
		# code...
		$data['title'] = "Donasi";


		$this->load->view('user/header', $data);
		$this->load->view('user/donasi');
		$this->load->view('user/footer');
	}

	// =========================================================================

	public function kalendar()
	{
		# code...
		$data['title'] = "Kalendar Kesuburan";

		$this->load->view('user/header', $data);
		$this->load->view('user/kalendar');
		$this->load->view('user/footer');
	}

	// =========================================================================

	public function diskusi()
	{
		# code...
		$data['title'] = "Diskusi";
		$data['topik'] = $this->admin_model->getAllTopik();
		$data['diskusi'] = $this->admin_model->hitung_diskusi();

		$this->load->view('user/header', $data);
		$this->load->view('user/diskusi', $data);
		$this->load->view('user/footer');
	}

	public function detail_diskusi($id)
	{
		# code...
		$data['title'] = "Detail Diskusi";
		$data['diskusi'] = $this->admin_model->hitung_diskusi();
		$data['topik'] = $this->admin_model->getTopikById($id);
		$data['komentar'] = $this->user_model->getAllTanggapan($id);

		$this->load->view('user/header', $data);
		$this->load->view('user/detail_diskusi', $data);
		$this->load->view('user/footer');
	}

	public function tambah_topik()
	{
		$data['title'] = "Diskusi";
		$data['topik'] = $this->admin_model->getAllTopik();
		$data['diskusi'] = $this->admin_model->hitung_diskusi();

		$this->form_validation->set_rules('topik', 'Topik', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('user/header', $data);
			$this->load->view('user/diskusi', $data);
			$this->load->view('user/footer');
		} else {
			$this->admin_model->tambah_topik();
			echo "<script>alert('Success');</script>";
			redirect('user/diskusi', 'refresh');
		}
	}

	public function tambah_diskusi($id)
	{
		# code...
		$data['title'] = "Detail Diskusi";
		$data['diskusi'] = $this->admin_model->hitung_diskusi();
		$data['topik'] = $this->admin_model->getTopikById($id);

		$this->form_validation->set_rules('pembahasan', 'Tanggapan', 'required');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->load->view('user/header', $data);
			$this->load->view('user/detail_diskusi', $data);
			$this->load->view('user/footer');
		} else {
			$this->user_model->tambah_tanggapan($id);
			echo "<script>alert('Success');</script>";
			redirect('user/detail_diskusi/' . $id, 'refresh');
		}
	}

	// =========================================================================

	public function logout()
	{
		# code...
		$this->session->sess_destroy();
		echo "<script>alert('Anda berhasil Logout');</script>";
		redirect('', 'refresh');
	}
}
