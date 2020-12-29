<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Dashboard';
			$data['artikel'] = $this->admin_model->hitung_artikel();
			$data['berita'] = $this->admin_model->hitung_berita();
			$data['alluser'] = $this->admin_model->hitung_alluser();
			$data['admin'] = $this->admin_model->hitung_admin();
			$data['user'] = $this->admin_model->hitung_user();
			$data['topik'] = $this->admin_model->hitung_topik();
			$data['kalender'] = $this->admin_model->hitung_kalender();
			$data['donasi'] = $this->admin_model->hitung_donasi();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('template/footeradmin');
		} else {
			redirect('login/index');
		}
	}

	// ARTIKEL
	public function data_artikel()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Artikel';
			$data['artikel'] = $this->admin_model->getAllArtikel();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_artikel', $data);
			$this->load->view('template/footeradmin');
		} else {
			redirect('login/index');
		}
	}

	public function tambah_artikel()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Tambah Data Artikel';

			$data['kategori_artikel'] = $this->admin_model->getKategori();

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('Tanggal', 'Tanggal', 'required');
			$this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('sumber', 'Sumber', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/tambah_artikel', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->tambah_artikel();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('admin/data_artikel', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}

	public function edit_artikel($id)
	{
		$data['kategori_artikel'] = $this->admin_model->getKategori();

		if (isset($_SESSION['user'])) {

			$data['title'] = 'Edit Artikel';
			$data['artikel'] = $this->admin_model->getArtikelById($id);

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
			$this->form_validation->set_rules('sumber', 'Sumber', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/edit_artikel', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->edit_artikel();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('admin/data_artikel', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}

	public function hapus_artikel($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_artikel($id)) {
				$this->session->set_flashdata('hapus_artikel', true);
			} else {
				$this->session->set_flashdata('hapus_artikel', false);
			}
			redirect('admin/data_artikel', 'refresh');
		} else {
			redirect('login/index');
		}
	}


	// BERITA
	public function data_berita()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Berita';
			$data['berita'] = $this->admin_model->getAllBerita();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_berita', $data);
			$this->load->view('template/footeradmin');
		} else {
			redirect('login/index');
		}
	}

	public function tambah_berita()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Tambah Data Berita';

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/tambah_berita', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->tambah_berita();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('admin/data_berita', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}

	public function edit_berita($id)
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Edit Berita';
			$data['berita'] = $this->admin_model->getBeritaById($id);

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/edit_berita', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->edit_berita();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('admin/data_berita', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}

	public function hapus_berita($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_berita($id)) {
				$this->session->set_flashdata('hapus_berita', true);
			} else {
				$this->session->set_flashdata('hapus_berita', false);
			}
			redirect('admin/data_berita', 'refresh');
		} else {
			redirect('login/index');
		}
	}

	// TOPIK DISKUSI
	public function data_topik()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Topik Diskusi';
			$data['topik'] = $this->admin_model->getAllTopik();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_topik', $data);
			$this->load->view('template/footeradmin');
		} else {
			redirect('login/index');
		}
	}

	public function tambah_topik()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Tambah Data Topik Diskusi';

			$this->form_validation->set_rules('topik', 'Topik', 'required');
			$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/tambah_topik', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->tambah_topik();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('admin/data_topik', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}

	public function edit_topik($id)
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Edit Topik Diskusi';
			$data['topik'] = $this->admin_model->getTopikById($id);

			$this->form_validation->set_rules('topik', 'Topik', 'required');
			$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/edit_topik', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->edit_topik();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('admin/data_topik', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}

	public function hapus_topik($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_topik($id)) {
				$this->session->set_flashdata('hapus_topik', true);
			} else {
				$this->session->set_flashdata('hapus_topik', false);
			}
			redirect('admin/data_topik', 'refresh');
		} else {
			redirect('login/index');
		}
	}

	//TUJUAN DONASI
	public function data_tujuan()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Tujuan Donasi';
			$data['tujuan_donasi'] = $this->admin_model->getAllTujuan();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_tujuan', $data);
			$this->load->view('template/footeradmin');
		} else {
			redirect('login/index');
		}
	}

	public function tambah_tujuan()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Tambah Data Tujuan Donasi';

			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('alamat', 'alamat', 'required');
			$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
			$this->form_validation->set_rules('totaldana', 'totaldana', 'required');
			$this->form_validation->set_rules('bni', 'bni', 'required');
			$this->form_validation->set_rules('bri', 'bri', 'required');
			$this->form_validation->set_rules('bca', 'bca', 'required');
			$this->form_validation->set_rules('linkaja', 'linkaja', 'required');
			$this->form_validation->set_rules('dana', 'dana', 'required');
			$this->form_validation->set_rules('mandiri', 'mandiri', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/tambah_tujuan', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->tambah_tujuan();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('admin/data_tujuan', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}

	public function edit_tujuan($id)
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Edit Tujuan Donasi';
			$data['tujuan_donasi1'] = $this->admin_model->getTujuanById($id);

			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('alamat', 'alamat', 'required');
			$this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
			$this->form_validation->set_rules('totaldana', 'totaldana', 'required');
			$this->form_validation->set_rules('bni', 'bni', 'required');
			$this->form_validation->set_rules('bri', 'bri', 'required');
			$this->form_validation->set_rules('bca', 'bca', 'required');
			$this->form_validation->set_rules('linkaja', 'linkaja', 'required');
			$this->form_validation->set_rules('dana', 'dana', 'required');
			$this->form_validation->set_rules('mandiri', 'mandiri', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/edit_tujuan', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->edit_tujuan();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('admin/data_tujuan', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}
	public function hapus_tujuan($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_tujuan($id)) {
				$this->session->set_flashdata('hapus_tujuan', true);
			} else {
				$this->session->set_flashdata('hapus_tujuan', false);
			}
			redirect('admin/data_tujuan', 'refresh');
		} else {
			redirect('login/index');
		}
	}

	//DONASI
	public function data_donasi()
	{
		$data['title'] = 'Data Donasi';

		if (isset($_SESSION['user'])) {

			if (isset($_GET['bulan']) && !empty($_GET['bulan'])) {

				$bulan = $_GET['bulan'];

				$nama_bulan = array('', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');

				if (isset($_GET['cetak'])) {
					# code...
					$transaksi = $this->admin_model->FilterDonasi($bulan);

					$data['donasi'] = $this->admin_model->FilterDonasi($bulan);
					$this->load->library('pdf');

					$this->pdf->setPaper('A4', 'landscape');
					$this->pdf->filename = "laporandonasi.pdf";
					$this->pdf->load_view('admin/laporandonasi2', $data);
				} else if (isset($_GET['tampil'])) {
					if ($bulan == 'all') {
						$transaksi = $this->admin_model->getAllDonasi();
					} else {
						$transaksi = $this->admin_model->FilterDonasi($bulan);
					}
				} else if (isset($_GET['excel'])) {
					$transaksi = $this->admin_model->FilterDonasi($bulan);
					header("Content-type: application/vnd-ms-excel");
					header("Content-Disposition: attachment; filename=Laporan Donasi.xls");

					$data['donasi'] = $this->admin_model->FilterDonasi($bulan);
					$this->load->view('admin/exportdonasi2', $data);
				} else {
					$transaksi = $this->admin_model->FilterDonasi($bulan);
				}
			} else {
				$transaksi = $this->admin_model->getAllDonasi();
			}

			$data['data'] = $transaksi;

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_donasi', $data);
			$this->load->view('template/footeradmin');
		} else {
			redirect('login/index');
		}
	}

	public function laporandonasi()
	{

		$this->load->library('pdf');

		$this->load->model('Cetak_modeldonasi');
		$data['donasi'] = $this->Cetak_modeldonasi->viewlaporandonasi();
		$this->load->library('pdf');

		$this->pdf->setPaper('A4', 'landscape');
		$this->pdf->filename = "laporandonasi.pdf";
		$this->pdf->load_view('admin/laporandonasi', $data);
	}

	public function exportdonasi()
	{
		// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excel
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Laporan Donasi.xls");

		$data['donasi'] = $this->Cetak_modeldonasi->viewlaporandonasi();
		$this->load->view('admin/exportdonasi', $data);
	}

	public function hapus_donasi($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_donasi($id)) {
				$this->session->set_flashdata('hapus_donasi', true);
			} else {
				$this->session->set_flashdata('hapus_donasi', false);
			}
			redirect('admin/data_donasi', 'refresh');
		} else {
			redirect('login/index');
		}
	}

	//KALENDER
	public function data_kalender()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Kalender';
			$data['kalender'] = $this->admin_model->getAllKalender();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_kalender', $data);
			$this->load->view('template/footeradmin');
		} else {
			redirect('login/index');
		}
	}

	public function hapus_kalender($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_kalender($id)) {
				$this->session->set_flashdata('hapus_kalender', true);
			} else {
				$this->session->set_flashdata('hapus_kalender', false);
			}
			redirect('admin/data_kalender', 'refresh');
		} else {
			redirect('login/index');
		}
	}

	//DETAIL DISKUSI
	public function data_detailDiskusi()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Detail Diskusi';
			$data['diskusi'] = $this->admin_model->getAllDetailDiskusi();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_detailDiskusi', $data);
			$this->load->view('template/footeradmin');
		} else {
			redirect('login/index');
		}
	}

	public function hapus_diskusi($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_diskusi($id)) {
				$this->session->set_flashdata('hapus_diskusi', true);
			} else {
				$this->session->set_flashdata('hapus_diskusi', false);
			}
			redirect('admin/data_detailDiskusi', 'refresh');
		} else {
			redirect('login/index');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		echo "<script>alert('Anda berhasil Logout');</script>";
		redirect('login/index', 'refresh');
	}
}
