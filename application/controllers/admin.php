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

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/index');
			$this->load->view('template/footeradmin');
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


	// GALLERY
	public function data_gallery()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Gallery';
			$data['gallery'] = $this->admin_model->getAllGallery();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_gallery', $data);
			$this->load->view('template/footeradmin');
		} else {
			redirect('login/index');
		}
	}

	public function tambah_gallery()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Tambah Data Gallery';

			$this->form_validation->set_rules('ket', 'Keterangan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/tambah_gallery', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->tambah_gallery();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('admin/data_gallery', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}

	public function edit_gallery($id)
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Edit Gallery';
			$data['gallery'] = $this->admin_model->getGalleryById($id);

			$this->form_validation->set_rules('ket', 'Keterangan', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/edit_gallery', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->edit_gallery();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('admin/data_gallery', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}

	public function hapus_gallery($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_gallery($id)) {
				$this->session->set_flashdata('hapus_gallery', true);
			} else {
				$this->session->set_flashdata('hapus_gallery', false);
			}
			redirect('admin/data_gallery', 'refresh');
		} else {
			redirect('login/index');
		}
	}



	// PRODUK DAN JASA
	public function data_produk()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Produk dan Jasa';
			$data['produk'] = $this->admin_model->getAllProduk();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_produk', $data);
			$this->load->view('template/footeradmin');
		} else {
			redirect('login/index');
		}
	}

	public function tambah_produk()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Tambah Data Produk';

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('istilah', 'Istilah', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/tambah_produk', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->tambah_produk();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('admin/data_produk', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}


	public function edit_produk($id)
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Edit Produk';
			$data['produk'] = $this->admin_model->getProdukById($id);

			$this->form_validation->set_rules('nama', 'Nama', 'required');
			$this->form_validation->set_rules('istilah', 'Istilah', 'required');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');


			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/edit_produk', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->edit_produk();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('admin/data_produk', 'refresh');
			}
		} else {
			redirect('login/index');
		}
	}

	public function hapus_produk($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_produk($id)) {
				$this->session->set_flashdata('hapus_produk', true);
			} else {
				$this->session->set_flashdata('hapus_produk', false);
			}
			redirect('admin/data_produk', 'refresh');
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
